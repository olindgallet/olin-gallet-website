<?php
//source --
//http://email.about.com/gi/o.htm?zi=1/XJ&zTi=1&sdn=email&cdn=compute&tm=78&f=10&tt=13&bt=0&bts=0&zu=http%3A//www.phpbuilder.com/columns/ian_gilfillan20060412.php3
$to      = "olindgallet@olingallet.com";
$body = $_REQUEST["message"];
$email = $_REQUEST["email"];
$subject = 'Dialog Request -- from: '.$email;

$dodgy_strings = array(
                "content-type:"
                ,"mime-version:"
                ,"multipart/mixed"
                ,"bcc:"
);

function is_valid_email($email) {
  // First, we check that there's one @ symbol, 
  // and that the lengths are right.
  if (!ereg("^[^@]{1,64}@[^@]{1,255}$", $email)) {
    // Email invalid because wrong number of characters 
    // in one section or wrong number of @ symbols.
    return false;
  }
  // Split it into sections to make life easier
  $email_array = explode("@", $email);
  $local_array = explode(".", $email_array[0]);
  for ($i = 0; $i < sizeof($local_array); $i++) {
    if
(!ereg("^(([A-Za-z0-9!#$%&'*+/=?^_`{|}~-][A-Za-z0-9!#$%&
?'*+/=?^_`{|}~\.-]{0,63})|(\"[^(\\|\")]{0,62}\"))$",
$local_array[$i])) {
      return false;
    }
  }
  // Check if domain is IP. If not, 
  // it should be valid domain name
  if (!ereg("^\[?[0-9\.]+\]?$", $email_array[1])) {
    $domain_array = explode(".", $email_array[1]);
    if (sizeof($domain_array) < 2) {
        return false; // Not enough parts to domain
    }
    for ($i = 0; $i < sizeof($domain_array); $i++) {
      if
(!ereg("^(([A-Za-z0-9][A-Za-z0-9-]{0,61}[A-Za-z0-9])|
?([A-Za-z0-9]+))$",
$domain_array[$i])) {
        return false;
      }
    }
  }
  return true;
}

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
      echo "$bad_string found. Suspected injection attempt - mail not being sent.";
      exit;
    }
  }
}

function contains_newlines($str_to_test) {
   if(preg_match("/(%0A|%0D|\\n+|\\r+)/i", $str_to_test) != 0) {
     echo "newline found in $str_to_test. Suspected injection attempt - mail not being sent.";
     exit;
   }
} 

if($_SERVER['REQUEST_METHOD'] != "POST"){
   echo("Unauthorized attempt to access page.");
   exit;
}

if (!is_valid_email($email)) {
  echo 'EMAIL: '.$email.' | ';
  echo 'Invalid email submitted - mail not being sent.';
  exit;
}

contains_bad_str($email);
contains_bad_str($subject);
contains_bad_str($body);

contains_newlines($email);
contains_newlines($subject);

$headers = "From: $email";
if (mail($to, $subject, $body, $headers)){
  echo 'That email has been sent!  Redirecting you to the homepage in seconds...';
  echo '<META HTTP-EQUIV=REFRESH CONTENT=3;URL=/index.php>';
} else {
  echo "<p>Error sending an email -- try manually by sending email to olindgallet@olingallet.com</p>";
  echo "<p>Go back -- <a href=\"/index.php\">click here</a></p>";
}
?>
