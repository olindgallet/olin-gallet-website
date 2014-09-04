<?php
	require_once('session-util.php');
	session_start();
	set_site_token();
?>
<!DOCTYPE html>
<html>
	<head>
		<title>
			Olin Gallet | Web Development
		</title>
		<meta property="og:title" content="Olin Gallet | Web Development" />
		<meta property="og:type" content="website" />
		<meta property="og:description" content="This website is about New Orleans web developer Olin Gallet."/>
		<meta property="og:url" content="http://www.olingallet.com" />
		<meta property="og:image" content="http://www.olingallet.com/images/skyline-header.png" />
		
		<meta name=”twitter:url” content=”http://www.olingallet.com“>
		<meta name=”twitter:title” content=”Olin Gallet | Web Development”>
		<meta name=”twitter:description” content=”This website is about New Orleans web developer Olin Gallet.“>
		<meta name=”twitter:image” content=”http://www.olingallet.com/images/skyline-header.png”>
		<!--[if IE]>
			<META HTTP-EQUIV=REFRESH CONTENT=0;URL=ie.php>
		<![endif]-->
		<link rel="stylesheet" type="text/css" href="css/960_24_col.css" />
		<link rel="stylesheet" type="text/css" href="css/style.css" /> 
		<link href='http://fonts.googleapis.com/css?family=Cabin+Condensed' rel='stylesheet' type='text/css'>
		<link rel="icon" 
        type="image/png" 
        href="images/olin-gallet-favicon.png">
		<meta charset="utf-8">
		<script type="text/javascript" src="scripts/preloader.js"></script>
	</head>

	<body>
		<div class="container_24">
			<header id="header" class="grid_24">
				<div id="page-title">
					<h2>Olin Gallet | Web Development</h2>
				</div>
				<div id="sky-buttons">
					<ul>
						<li><img id="morning-button" src="images/morning-button-dark.png" /></li>
						<li><img id="midday-button" src="images/midday-button-dark.png" /></li>
						<li><img id="sunset-button" src="images/sunset-button-dark.png" /></li>
						<li><img id="night-button" src="images/night-button-dark.png" /></li>
					</ul>
				</div>
			</header>
		</div>
	
	<div class="container_24">
		<div id="social-background" class="grid_24">
		
			<div class="container_24">
				<div class="prefix_1 grid_3">
				My Resume:
				</div>
				
				<div class="grid_1">
					<a href="http://bit.ly/olin-gallet-resume"><img src="images/word-icon.png"></a>
				</div>
				
				<div class="prefix_1 grid_1">
					<a href="http://bit.ly/olin-gallet-resume-pdf"><img src="images/pdf-icon.png"></a>
				</div>
				
				<div class="prefix_9 grid_4">
					My Social Media:
				</div>
				
				<div class="grid_1">
					<a href="http://bit.ly/olin-gallet-twitter"><img src="images/twitter-button.png" /></a>
				</div>
				
				<div class="prefix_1 grid_1 suffix_1">
					<a href="http://bit.ly/olin-gallet-linkedin"><img src="images/linkedin-button.png" /></a>
				</div>
			</div>
			
		</div>
		
		<div id="menu-background" class="grid_24">
		
			<div class="container_24">
				<div class="prefix_2 grid_4">
					<a href="http://bit.ly/olin-gallet-portfolio"><img src="images/portfolio-option.png"/></a>
				</div>
				
				<div class="grid_4">
					<a href="http://bit.ly/olin-gallet-weblog"><img src="images/blog-option.png"/></a>
				</div>
				
				<div class="grid_4 suffix_10">
					<a href="http://bit.ly/olin-gallet-copywriting-blog"><img src="images/copywriting-option.png"/></a>
				</div>
			</div>
			
		</div>
		
		<div id="about-background" class="grid_24">
		
			<div class="container_24">
				<div class="prefix_1 grid_9 suffix_4">
					<h2>This is Me:</h2>
					
					<p>I am a computer scientist living currently in New Orleans, LA.  I design solutions for problems in the world of computer science, document my journey in blogs, and have fun doing it.  </p>
					
					<h2>How I Can Help You:</h2>
					
					<ul>
						<li>Make/modify a website</li>
						<li>Make/modify backend (databases, logic, etc.)</li>
						<li>Most importantly, solve problems</li>
					</ul>
					<p>Got a question or a business inquiry? Contact me through the form to the right.</p>
				</div>
				
				<div class="grid_9 suffix_1">
					<h2>Contact:</h2>
					
					<form action="mail.php" method="POST" id="contact-form">
						<ul>
							<li><label for="contact-email">Email*:</label><input size="40" id="contact-email" type="email" name="email" placeholder="Your email is required." required/></li>
							<li><label for="contact-message">Message:</label><textarea cols="40" rows="4" id="contact-message" type="text" name="message" placeholder="A message is helpful but not required."></textarea></li>
							<li><input type="submit" id="submit-contact-form" class="submit" value="Submit" /> </li>
						</ul>
						<div id="contact-form-status" class="error-message"></div>
					</form>
					
					<p class="vcard">
						<a class="fn url" href="http://www.olingallet.com" title="Contact Information for Olin Gallet">Olin Gallet</a><br/>
						<span class="tel">Telephone: <span class="value">830-776-4667</span></span><br/>
						<span class="adr">
							<span class="locality">New Orleans</span> <span class="region">LA</span> <span class="postal-code">70112</span> <span class="country-name">USA</span><br/>
						</span>
					</p>
				</div>
			</div>
			
		</div>
		
		<footer class="prefix_1 grid_22 suffix_1">
			Olin Gallet &copy;<?php echo date("Y") ?> | New Orleans, LA | 830 776 4667
		</footer>
	</div>

	
	<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.2/raphael-min.js"></script> 
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.7.0/moment.min.js"></script>
	<script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/moment-timezone/0.1.0/moment-timezone.min.js"></script>
	<script type="text/javascript" src="scripts/skyline.js"></script>
	<script type="text/javascript" src="scripts/mail-form-validation.js"></script>
  </body>
  
</html>