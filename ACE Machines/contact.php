<!DOCTYPE html>
<html>
<head>

<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3EPY6M5M37"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-3EPY6M5M37');
</script>


<title>Ace Machine, Manufacturer flyash,concrete block machine Coimbatore, tamilnadu</title>
<meta name="description" content="Manufacturer of flyash brick machine, concrete block machine, paver block machine, concrete block machine, interlock block machine, Vibrating Table, pan mixer, Material Handling Trolly, Belt Conveyor offered by ace machines, Coimbatore, Tamil Nadu." />
<meta name="keywords" content="flyash brick machine, concrete block machine, paver block machine, concrete block machine, interlock block machine, Vibrating Table, pan mixer, Material Handling Trolly, Belt Conveyor, Tilting Trolley" />
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<meta name="msvalidate.01" content="C4BF701DAD3437BAE22DC5BCB45DC6C0" />
<meta name="author" content="mediawonderz">
<meta name="geo.region" content="IN-KA">
<meta name="geo.placename" content="coimbatore, Tamilnadu, Chennai, Bengaluru, Karnataka, India">
<meta name="geo.position" content="12.955957; 77.637471">
<meta name="robots" content="INDEX, FOLLOW">
<meta name="search engines" content="ALL"/>
<meta name="Author" content="mediawonderz.com"/>
<meta name="copyright" content="mediawonderz.com" />
<meta name="email" content="info@mediawonderz.com" />
<meta name="Robots" content="INDEX,FOLLOW"/>
<meta name="YahooSeeker" content="INDEX, FOLLOW"/>
<meta name="msnbot" content="INDEX, FOLLOW"/>
<meta name="googlebot" content="INDEX, FOLLOW"/>
<meta name="language" content="english"/>
<meta name="Expires" content="never"/>
<meta name="revisit-after" content="Daily"/>
<meta name="Distribution" content="Global"/>
<meta name="Rating" content="general"/>
<meta name="region" content="India"/>

<!-- Favicon -->
<link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="img/apple-touch-icon.png">

		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1.0, shrink-to-fit=no">

		<!-- Web Fonts  -->
		<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800%7CShadows+Into+Light%7CPlayfair+Display:400" rel="stylesheet" type="text/css">

		<!-- Vendor CSS -->
		<link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/fontawesome-free/css/all.min.css">
		<link rel="stylesheet" href="vendor/animate/animate.min.css">
		<link rel="stylesheet" href="vendor/simple-line-icons/css/simple-line-icons.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.min.css">
		<link rel="stylesheet" href="vendor/magnific-popup/magnific-popup.min.css">

		<!-- Theme CSS -->
		<link rel="stylesheet" href="css/theme.css">
		<link rel="stylesheet" href="css/theme-elements.css">
		<link rel="stylesheet" href="css/theme-blog.css">
		<link rel="stylesheet" href="css/theme-shop.css">

		<!-- Current Page CSS -->
		<link rel="stylesheet" href="vendor/rs-plugin/css/settings.css">
		<link rel="stylesheet" href="vendor/rs-plugin/css/layers.css">
		<link rel="stylesheet" href="vendor/rs-plugin/css/navigation.css">

		<!-- Demo CSS -->


		<!-- Skin CSS -->
		<link rel="stylesheet" href="css/skins/default.css">
		<script src="master/style-switcher/style.switcher.localstorage.js"></script>

		<!-- Theme Custom CSS -->
		<link rel="stylesheet" href="css/custom.css">

		<!-- Head Libs -->
		<script src="vendor/modernizr/modernizr.min.js"></script>




</head>



<body class="loading-overlay-showing" data-plugin-page-transition data-loading-overlay data-plugin-options="{'hideDelay': 100}">

<div class="body">



<?php require 'header.php'; ?>




<?php
$your_email ='ACE <info@acemachines.in>';// <<=== update to your email address


$errors = '';
$name = '';
$visitor_email = '';
$user_message = '';
$subject = '';

if(isset($_POST['submit']))
{
	$sub = 'ACE Enquiry Form';
	$name = $_POST['name'];
	$visitor_email = $_POST['email'];
	$user_message = $_POST['message'];

	$subject=$_POST['subject'];
	///------------Do Validations-------------
	if(empty($name)||empty($visitor_email))
	{
		$errors .= "\n Name and Email are required fields. ";
	}

	if(IsInjected($visitor_email))
	{
		$errors .= "\n Bad email value!";
	}
	if(empty($_SESSION['6_letters_code'] ) ||
	  strcasecmp($_SESSION['6_letters_code'], $_POST['6_letters_code']) != 0)
	{
	//Note: the captcha code is compared case insensitively.
	//if you want case sensitive match, update the check above to
	// strcmp()
		$errors .= "\n The captcha code does not match!";
	}

	if(empty($errors))
	{
		//send the email
		$to = $your_email;

		$from = $your_email;
		$ip = isset($_SERVER['REMOTE_ADDR']) ? $_SERVER['REMOTE_ADDR'] : '';

		$body = "A user  $name submitted the contact form, ACE:\n".
		"Name: $name\n".
		"Email: $visitor_email \n".

		"Mobile Number: $subject\n".

		"Message: $user_message\n";

		$headers = "From: $from \r\n";

		$headers .= "Reply-To: $visitor_email \r\n";
		$headers .= "Bcc: mediawonderz3@gmail.com \r\n";

		$ok = mail($to, $sub, $body,$headers);
	if ($ok) {

			 echo '<script type="text/javascript">alert("mail sent successfully");</script>';


	} else {

		echo '<script type="text/javascript">alert("Some problem to mail sending");</script>';


	}

		//header('Location: thank-you.html');
	}
}

// Function to validate against any email injection attempts
function IsInjected($str)
{
  $injections = array('(\n+)',
              '(\r+)',
              '(\t+)',
              '(%0A+)',
              '(%0D+)',
              '(%08+)',
              '(%09+)'
              );
  $inject = join('|', $injections);
  $inject = "/$inject/i";
  if(preg_match($inject,$str))
    {
    return true;
  }
  else
    {
    return false;
  }
}
?>
<style>

.err
{
	font-family : Verdana, Helvetica, sans-serif;
	font-size : 12px;
	color: red;
}
</style>



			<div role="main" class="main">
				<section class="page-header page-header-modern page-header-background page-header-background-md" style="background-image: url(images/product-banner.jpg);    background-position: center; background-size: cover;">
					<div class="container">
						<div class="row mt-5">
							<div class="col-md-12 align-self-center p-static order-2 text-center">
								<h1 class="text-9 font-weight-bold">CONTACT US</h1>
							</div>
						</div>
					</div>
				</section>


				<div class="container">

					<div class="row py-4">
						<div class="col-lg-6">

						<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62653.56444783894!2d76.95124324719245!3d11.050037267141093!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3ba8f901a699974f%3A0x4a14315d7f7f106c!2sASIA%20CONTROL%20ENGINEERING%20(ACE%20MACHINES)!5e0!3m2!1sen!2sin!4v1690021249757!5m2!1sen!2sin" width="500" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>


						</div>
						<div class="col-lg-6">

							<div class="appear-animation" data-appear-animation="fadeIn" data-appear-animation-delay="800">
								<h4 class="mt-2 mb-3">ACE MACHINES


								</h4>
								<ul class="list list-icons list-icons-style-2 mt-2">
								<li><i class="fas fa-user-circle top-6"></i>Prabhu</br><b>Properitor </b></li>
									<li><i class="fas fa-phone top-6"></i>  +91 74488 75555</li>
									<li><i class="fas fa-map-marker-alt top-6"></i><b> Office Location: </b></br> 29/8A-1, Chinnasamy Nagar, Ganapathy, Coimbatore - 641006.</li>
									<li><i class="fas fa-map-marker-alt top-6"></i><b> Factory Location: </b></br> SF.No: 35/5, Pallakkadu Thottam,
								Near AMD Nagar, Vilankuruchi,</br> Coimbatore - 641035,  Tamilnadu, India.</li>

									<li><i class="fas fa-envelope top-6"></i>  info@acemachines.in</br>acemachines.in@gmail.com</li>
								</ul>
							</div>





						</div>

					</div>

				</div>



			</div>

			<footer id="footer" class="custom-footer m-0" style="background-color:#0e4173; top: 127px;">
				<div class="container">


					<div class="row text-center" style="background-color:#0e4173;padding-top:15px">
						<div class="col">

							<p class="text-4 text-color-light opacity-7">© Copyright 2019 All Rights Reserved | Designed By Media Wonderz</p>
						</div>
					</div>
				</div>
			</footer>
		</div>

		<!-- Vendor -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/jquery.appear/jquery.appear.min.js"></script>
		<script src="vendor/jquery.easing/jquery.easing.min.js"></script>
		<script src="vendor/jquery.cookie/jquery.cookie.min.js"></script>
		<script src="master/style-switcher/style.switcher.js" id="styleSwitcherScript" data-base-path="" data-skin-src=""></script>
		<script src="vendor/popper/umd/popper.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
		<script src="vendor/common/common.min.js"></script>
		<script src="vendor/jquery.validation/jquery.validate.min.js"></script>
		<script src="vendor/jquery.easy-pie-chart/jquery.easypiechart.min.js"></script>
		<script src="vendor/jquery.gmap/jquery.gmap.min.js"></script>
		<script src="vendor/jquery.lazyload/jquery.lazyload.min.js"></script>
		<script src="vendor/isotope/jquery.isotope.min.js"></script>
		<script src="vendor/owl.carousel/owl.carousel.min.js"></script>
		<script src="vendor/magnific-popup/jquery.magnific-popup.min.js"></script>
		<script src="vendor/vide/jquery.vide.min.js"></script>
		<script src="vendor/vivus/vivus.min.js"></script>

		<!-- Theme Base, Components and Settings -->
		<script src="js/theme.js"></script>

		<!-- Current Page Vendor and Views -->
		<script src="vendor/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
		<script src="vendor/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

		<!-- Theme Custom -->
		<script src="js/custom.js"></script>

		<!-- Theme Initialization Files -->
		<script src="js/theme.init.js"></script>



	</body>

</html>