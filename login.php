<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
$error='';
session_start();
if($_SESSION){
	if($_SESSION['admin'])
	{
		header("Location:profileadmin.php");
	}
	
	if($_SESSION['user'])
	{
		header("Location:profile.php");
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
</head>

<body>
	<div class="h_bg">
		<div class="wrap">

		</div>
	</div>
	<div class="nav_bg">
		<div class="wrap">
			<ul class="nav">
				<li>
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
				<li class="active">
					<a href="login.php">Login</a>
				</li>
				<div class="clear"></div>
			</ul>
		</div>
	</div>
	<div class="s_bg">
		<div class="wrap">
			<div class="cont_main">
				<div class="contact">
					<div class="section group">
						<div class="col span_2_of_3">
							<div class="contact-form">
								<h3><center>Login</h3></center>
								<form action ="" method ="post">
									<div>
										<span>
											<label>Username:</label>
										</span>
										<span>
											<input name="username" type="text" placeholder="username..">
										</span>
									</div>
									<div>
										<span>
											<label>Password:</label>
										</span>
										<span>
											<input name="password" type="password" placeholder="*********">
										</span>
									</div>
									
									
									<div>
										<span>
											<input type="submit" name="btnSubmit"value="Login">
											
										</span>
									</div>
									</br><span><?php echo $error;?></span>
								</form>
							</div>
						</div>
						<div class="col span_1_of_3">
							<div class="contact_info">
								<h3>Find Us Here</h3>
								<div class="map">
								
									<iframe width="100%" height="175" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3925.530717133023!2d123.89584231479662!3d10.299343992646326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x33a99958341065a1%3A0xf9ef65b5f789bc0f!2sLalit+M.+Villamor+Dentist!5e0!3m2!1sen!2sph!4v1534254564817" width="600" height="450" frameborder="0" style="border:0"></iframe>
									<br>

								</div>
							</div>
							<div class="company_address">
								<h3>Clinic Information :</h3>
								<p>Pelaez St. Cebu City,</p>
								<p>6000 Cebu</p>
								<p>Phone:(032) 256 0446</p>
								<p>Email:
									<span>
										<a href="mailto:info@example.com">lmvillamor@gmail.com</a>
									</span>
								</p>
								<p>Follow us on:
									<span>Facebook</span>
								</p>
							</div>
						</div>
						<div class="clear"></div>
					</div>
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