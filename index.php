<?php
session_start();
if($_SESSION){
	if($_SESSION['admin'])
	{
		header("Location: profileadmin.php");
	}
	if($_SESSION['user'])
	{
		header("Location: profile.php");
	}
}



include('log-in.php'); 

?>
<!DOCTYPE HTML>
<html>

<head>
	<title>Lalit M. Villamor Dentist</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<link href='//fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>
	<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />

	<!--slider-->
	<link href="css/flexslider.css" rel="stylesheet" type="text/css" media="all" />
	<script src="js/jquery-1.7.1.min.js" type="text/javascript"></script>
	<script src="js/jquery.flexslider.js" type="text/javascript"></script>
	<script type="text/javascript">
		$(function () {
			SyntaxHighlighter.all();
		});
		$(window).load(function () {
			$('.flexslider').flexslider({
				animation: "slide",
				animationLoop: false,
				itemWidth: 210,
				itemMargin: 5,
				minItems: 2,
				maxItems: 4,
				start: function (slider) {
					$('body').removeClass('loading');
				}
			});
		});
	</script>
</head>

<body>
	<div class="h_bg">
		<div class="wrap">
			<div class="header">
				<div class="logo">
					<h1>
						
					</h1>
				</div>
			</div>
		</div>
	</div>
	<div class="nav_bg">
		<div class="wrap">
			<ul class="nav">
				<li class="active">
					<a href="index.html">Home</a>
				</li>
				<li>
					<a href="about.html">About</a>
				</li>
				<li>
					<a href="staff.html">Staff</a>
				</li>
				<li>
					<a href="dentalhealth.html">Dental Health</a>
				</li>
				<li>
					<a href="sign-up.php">Sign-up</a>
				</li>
				<li>
					<a href="login.php">Login</a>
				</li>
				<div class="clear"></div>
			</ul>
		</div>
	</div>
	<div class="h_btm_bg">
		<div class="wrap">
			<div class="h_btm">
				<div class="header-para">
					<h2>Lalit M. Villamor Dentist</h2>
					<h3></h3>
					<p>This Web Application's objective is to provide a wide-range of convenient, confidential, dental health care services using the Internet.
					<br>
					<br>Also offers online reservation for check-ups.
					<br>
					<br>Includes oral hygiene maintenance and scheduled dental appointments, requires effective communication between dentists and patients. </p>
				</div>
				<div class="header-banner">
					<img src="images/drlalit.png" alt="">
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
	<div class="s_bg">
		<div class="wrap">
			<div class="main_cont">
				<section class="slider">
					<div class="flexslider carousel">
						<ul class="slides">
						    <li>
								<img src="images/asd.jpg" />
							</li>
							<li>
								<img src="images/asd1.jpg" />
							</li>
							<li>
								<img src="images/asd2.jpg" />
							</li>
							<li>
								<img src="images/asd3.jpg" />
							</li>
							<li>
								<img src="images/asd4.jpg" />
							</li>
							<li>
								<img src="images/asd5.jpg" />
							</li>
							<li>
								<img src="images/asd6.jpg" />
							</li>
							<li>
								<img src="images/asd7.jpg" />
							</li>
							<li>
								<img src="images/asd8.jpg" />
							</li>
							<li>
								<img src="images/asd9.jpg" />
							</li>
							<li>
								<img src="images/asd10.jpg" />
							</li>
							<li>
								<img src="images/asd11.jpg" />
							</li>
						</ul>
					</div>
				</section>
				<div class="ribben">
					<div class="l-triangle-top"></div>
					<div class="l-triangle-bottom"></div>
					<div class="rectangle"></div>
					<div class="r-triangle-top"></div>
					<div class="r-triangle-bottom"></div>
					<div class="clear"></div>
				</div>
				<div class="main">
					<div class="content">
						<b>Purpose</b>
<p>This project aims to let patients of Lalit M. Villamor Dental Clinic to know basic and helpful tips in taking care of our oral cavity. As well as to know the schedule of the dentist to make an appointment if necessary.</p>	
<br>Scope
<p>Lalit M. Villamor Dental Clinic doesn’t have an online/mobile application for the dental clinic, and when it comes to scheduled dental check-ups, it gives the option for the receptionist and admin to schedule the appointment for the patients with the doctor with respect to the treatment.</p>
	<br>Objectives
<p>The dental software is used for collecting, managing, saving, and retrieving health information for the patients, and for creating reports for the patients. Patient records are used by the dentists in order to organize the records of the patients in their practice. This software is designed and built to meet all the requirements of a dental clinic and to help the dentist in managing their clinics in an effective manner. With just a few clicks the user can schedule faster, record treatment plans easier</p>
						
						
					</div>
					<div class="sidebar">
						<h2></h2>
						
					</div>
					<div class="clear"></div>
				</div>
			</div>
		</div>
	</div>
	<div class="ftr-bg">
		<div class="wrap">
			<div class="footer">
				
				<div class="copy">
					<p class="w3-link">© Lalit M. Villamor Dentist. All Rights Reserved.
					</p>
				</div>
				<div class="clear"></div>
			</div>
		</div>
	</div>
</body>

</html>