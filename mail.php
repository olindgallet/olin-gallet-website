<?php
	define('HOME_URL', 'http://www.olingallet.com');
	define('LOG_FILE', 'email-log.txt');
	
	require_once('session-util.php');
	require_once('file-logger.php');
	session_start();
	
	if (!is_site_in_session() || !isset($_POST['email'])){
		header('Location: http://www.olingallet.com/');
	} else {		
		$to      = "@";
		$body    = $_POST["message"];
		$email   = $_POST["email"];
		$subject = 'Dialog Request from: '.$email;

		$dodgy_strings = array(
						"content-type:"
						,"mime-version:"
						,"multipart/mixed"
						,"bcc:"
		);

		function contains_bad_str($str_to_test) {
		  $bad_strings = array(
						"content-type:"
						,"mime-version:"
						,"multipart/mixed"
				,"Content-Transfer-Encoding:"
						,"bcc:"
				,"cc:"
				,"to:"
		  );
		  
		  foreach($bad_strings as $bad_string) {
			if(eregi($bad_string, strtolower($str_to_test))) {
			  $logger = new File_Logger(LOG_FILE);
		      $logger->write('Email failed from: '.$email.' '.$body.'\n');
			  header('Location: '.HOME_URL);
			  exit;
			}
		  }
		}

		function contains_newlines($str_to_test) {
		   if(preg_match("/(%0A|%0D|\\n+|\\r+)/i", $str_to_test) != 0) {
			 $logger = new File_Logger(LOG_FILE);
			 $logger->write('Email failed from: '.$to.' '.$body.'\n');
			 header('Location: '.HOME_URL);
			 exit;
		   }
		} 

		if($_SERVER['REQUEST_METHOD'] != "POST"){
			$logger = new File_Logger(LOG_FILE);
			$logger->write('Email failed from: '.$to.' '.$body.'\n');
			header('Location: '.HOME_URL);
			exit;
		}

		contains_bad_str($email);
		contains_bad_str($subject);
		contains_bad_str($body);

		contains_newlines($email);
		contains_newlines($subject);

		$headers = "From: $email";
		if (@mail($to, $subject, $body, $headers)){
		  header('Location: '.HOME_URL);
		  exit;
		} else {
		  $logger = new File_Logger(LOG_FILE);
		  $logger->write('Email failed from: '.$to.' '.$body.'\n');
		  header('Location: '.HOME_URL);
		  exit;
		}
	}
	?>
