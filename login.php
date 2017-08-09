

    <?php
    	//Start session
    	session_start();	
    	//Unset the variables stored in session
    	unset($_SESSION['SESS_MEMBER_ID']);
    	unset($_SESSION['SESS_FIRST_NAME']);
    	unset($_SESSION['SESS_LAST_NAME']);
    ?>






<!DOCTYPE html>


<!-- Mirrored from ocsolutions.co.in/html/jobportal/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jul 2017 20:47:43 GMT -->
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Login</title>
<!-- Bootstrap stylesheet -->
<link href="bootstrap/css/bootstrap.css" rel="stylesheet">
<!-- font -->
<link href="https://fonts.googleapis.com/css?family=Libre+Baskerville:400,400i,700%7CSource+Sans+Pro:300,400,600,700" rel="stylesheet"> 
<!-- stylesheet -->
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<link href="css/style_cyan.css" title="style_cyan" rel="alternate stylesheet" type="text/css"/>
<link href="css/style_red.css" title="style_red" rel="alternate stylesheet" type="text/css"/>
<link href="css/style_green.css" title="style_green" rel="alternate stylesheet" type="text/css"/>
<link href="css/style_blue.css" title="style_blue" rel="alternate stylesheet" type="text/css"/>
<!-- font-awesome -->
<link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
<!-- crousel css -->
<link href="js/owl-carousel/owl.carousel.css" rel="stylesheet" type="text/css" />
<!--bootstrap select-->
<link href="js/dist/css/bootstrap-select.css" rel="stylesheet" type="text/css" />
</head>
<body>
<!-- top start here -->
	<div id="top">
		<!-- top container start here-->
		<div class="container">
			<div id="top-links">
				<ul class="list-inline pull-left button">
					<li>
						<a href="about.php"><span>ABOUT US</span></a>
					</li>
					<li>
						<a href="contact.php"><span>CONTACT US</span></a>
					</li>
					<li>
						<a href="contact.php"><span>EMAIL : INFO@JOBPORTAL.COM</span></a>
					</li>
				</ul>
				<ul class="list-inline pull-right icon">
					<li>
						<a href="https://www.facebook.com/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a>
					</li>
					<li>
						<a href="https://twitter.com/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					</li>
					<li>
						<a href="https://plus.google.com/" target="_blank"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
					</li>
					<li>
						<a href="https://www.instagram.com/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
					</li>
					<li>
						<a href="https://in.pinterest.com/" target="_blank"><i class="fa fa-pinterest-p" aria-hidden="true"></i></a>
					</li>
				</ul>
			</div>
		</div>
		<!-- top container end here-->
	</div>
<!-- top end here -->
	
<!-- header start here-->
	<header>
		<!-- header container start here-->
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-md-3 col-xs-12">
					<!-- logo start here-->
					<div id="logo">
						<a href="index-2.php">
							<img class="img-responsive logochange" alt="logo" title="logo" src="images/logo.png" />
						</a>
					</div>
					<!-- logo end here-->
				</div>
				<div class="col-sm-3 col-md-3 col-xs-12 visible-xs paddleft">
					<!-- button-login start here -->
					<div class="button-login pull-right">
						<button type="button" class="btn btn-default btn-lg" onclick="location.href='login.php'">Login</button>
						<button type="button" class="btn btn-primary btn-lg" onclick="location.href='submit-job.php'">Submit Job</button>
					</div>
					<!-- button-login end here -->
				</div>
			    <div class="col-sm-6 col-md-6 col-xs-12 padd0">
					<!-- menu start here-->
					<nav class="navbar" id="menu">
						<div class="navbar-header">
							<span class="menutext visible-xs">Menu</span>
							<button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="btn btn-navbar navbar-toggle" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
						</div>
						<div class="collapse navbar-collapse navbar-ex1-collapse padd0">
							<ul class="nav navbar-nav pull-left">
								<li class="dropdown">
									<a   href="index.php">HOME</a>
								
								</li>
								<li class="dropdown">
									<a  href="jobs-list-view.php">JOBS</a>
								
								</li>
								<li class="dropdown">
									<a  href="candidate-grid-view.php">CANDIDATES</a>
									
								</li>
								<li class="dropdown">
									<a href="employers.php">EMPLOYERS</a>
									
								</li>
								
								<li class="dropdown">
									<a  href="contact.php">Contact Us
									
									</a>
								
								</li>
							</ul>
						</div>
					</nav>
					<!-- menu end here -->
				</div>
			    <div class="col-sm-3 col-md-3 col-xs-12 hidden-xs">
					<!-- button-login start here -->
					<div class="button-login pull-right">
						<button type="button" class="btn btn-default btn-lg" onclick="location.href='login.php'">Login</button>
						<button type="button" class="btn btn-primary btn-lg" onclick="location.href='submit-job.php'">Submit Job</button>
					</div>
					<!-- button-login end here -->
				</div>
			</div>
		</div>
		<!-- header container end here -->
	</header>
<!-- header end here -->

<!-- login start here -->
	<div id="login">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<!-- login-content start here -->
					<div class="login-content">
						<h1>Login</h1>
						<ul class="list-inline">
							<li>
								<a href="index-2.php">Home</a>
							</li>
							<li>></li>
							<li>
								<a href="login.php">Login</a>
							</li>
						</ul>
					</div>
				<!-- login-content end here -->
				</div>
			</div>
		</div>
	</div>
<!-- login end here -->


<!-- login-form start here -->
	<div id="login-form">
		<div class="container">
			<div class="row">
				<div class="col-sm-offset-2 col-md-8 col-sm-8  col-xs-12">
					<div class="form">
						<div class="border"></div>
						<div class="border1"></div>
						<form class="form-horizontal" method="post" action="userAccount.php">
												

			

					<?php echo !empty($statusMsg)?'<p class="'.$statusMsgType.'">'.$statusMsg.'</p>':''; ?>
							<fieldset>
								<div class="form-group">
									<div class="col-sm-12">
										<label>E-mail</label>
										<input class="form-control" id="input-email"type="email" name="email" placeholder="EMAIL" required="">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-12">
										<label>Password</label>
										<input class="form-control" id="input-password"  name="password" placeholder="PASSWORD" required="">
									</div>
								</div>
								
								<div class="form-group">
									<div class="col-sm-12 confirmation">
										<label>
											<input name="confirmation" value="yes" type="checkbox">Remember me
										</label>
										<a href="#" class="colorLink subHeadingText icon-wrap pull-right">Forgot password?</a>
									</div>
								</div>
								
								<div class="button">
									<button type="submit" name="loginSubmit" value="LOGIN" class="btn btn-primary btnus" method="post">LOGIN</button>
								</div>
								
								<p>Don't have an account? <a href="register.php">Register</a></p>
							</fieldset>
							 
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- login-form  end here -->


<!-- Footer start here -->
	<footer>
		<div class="container">
			<div class="bor col-md-12 col-sm-12 col-xs-12 padd0">
				<div class="col-sm-5 col-md-5 col-xs-12 subscribe">
					<h5>Subscribe Our Newsletter</h5>
					<form name="subscribe">
						<div class="form-group">
							<div class="input-group">
								<input type="text" placeholder="Enter your Email Address" id="subscribe_email1" name="subscribe_email" value="" class="form-control">
								<div class="input-group-btn">
									<button class="btn btn-default btn-lg" type="submit"><i class="fa fa-paper-plane-o" aria-hidden="true"></i> SUBSCRIBE</button>
								</div>
							</div>
						</div>
					</form>
				</div>
				<div class="col-sm-4 col-md-4 col-xs-12 follow">
					<h5>Follow us on</h5>
					<ul class="list-inline socialicon">
						<li>
							<a href="https://www.facebook.com/" target="_blank">
								<i class="fa fa-facebook" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="https://twitter.com/" target="_blank">
								<i class="fa fa-twitter" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="https://plus.google.com/" target="_blank">
								<i class="fa fa-google-plus" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="https://www.instagram.com/" target="_blank">
								<i class="fa fa-instagram" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="https://in.linkedin.com/" target="_blank">
								<i class="fa fa-linkedin" aria-hidden="true"></i>
							</a>
						</li>	
					</ul>
				</div>
				<div class="col-sm-3 col-md-3 col-xs-12 need">
					<h5>Need Help ?</h5>
					<h6><i class="fa fa-phone" aria-hidden="true"></i> CALL US : <span>1800-0000-1234</span></h6>
				</div>	
			</div>
			<div class="row">
				<div class="col-sm-3 col-md-3 col-xs-12 matter">
					<img src="images/foot-logo.png"  class="img-responsive footerlogochange" alt="foot-logo" title="foot-logo" />
					<p>Aliquam hendrit rutrum iaculis nullam ondimentum mal uada velit beum donec sit amet tristique erosam amet risus mollis malesuada quis quis nulla. Vestibulum ante ipsum primis in faucibus orci luctus et ultr amet tristique erosam.</p>
						
				</div>
				<div class="col-sm-3 col-md-3 col-xs-12 info">
					<h5>Information</h5>
					<ul class="list-unstyled">
						<li>
							<a href="about.php"><i class="fa fa-caret-right" aria-hidden="true"></i>About Us</a>
						</li>
						<li>
							<a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Help Desk</a>
						</li>
						<li>
							<a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Support</a>
						</li>
						<li>
							<a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Privacy Policy</a>
						</li>
						<li>
							<a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Terms & Conditions</a>
						</li>
					</ul>
				</div>	
				<div class="col-sm-3 col-md-3 col-xs-12 use">
					<h5>Useful Links</h5>
					<ul class="list-unstyled">
						<li>
							<a href="index-2.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Homepage</a>
						</li>
						<li>
							<a href="submit-job.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Submit Job</a>
						</li>
						<li>
							<a href="jobs.php"><i class="fa fa-caret-right" aria-hidden="true"></i>All Candidates</a>
						</li>
						<li>
							<a href="blog.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Latest Blogs</a>
						</li>
						<li>
							<a href="jobs.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Jobs</a>
						</li>
					</ul>
				</div>	
			
				<div class="col-sm-3 col-md-3 col-xs-12 padd0">
					<h5>Get in touch</h5>
					<form class="form-horizontal form" method="post">
						<fieldset>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="input-username" placeholder="Name" value="" name="email" required="" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="col-sm-12">
									<input class="form-control" id="email" placeholder="Email Address" value="" name="email" required="" type="text">
								</div>
							</div>
							<div class="form-group">
								<div class="input-group col-sm-12">
									<input type="text" placeholder="Message" id="message" name="message" value="" class="form-control big">
									<div class="input-group-btn">
										<button class="btn btn-default btn-lg" type="submit"><i class="fa fa-paper-plane-o" aria-hidden="true"></i></button>
									</div>
								</div>
							</div>
						</fieldset>
					</form>
				</div>	
			</div>
		</div>
	</footer>
	<div class="powered">
		<div class="container">
			<p>Copyright &#169; 2017. All Rights Reserved</p>
		</div>
	</div>
<!-- Footer end here -->
<!-- jquery -->
<script src="js/jquery.2.1.1.min.js" type="text/javascript"></script>
<!-- bootstrap js -->
<script src="bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<!--bootstrap select-->
<script src="js/dist/js/bootstrap-select.js" type="text/javascript"></script>
<!-- owlcarousel js -->
<script src="js/owl-carousel/owl.carousel.min.js" type="text/javascript"></script>
<!--internal js-->
<script src="js/internal.js" type="text/javascript"></script>
<!-- color switcher-->
<script src="js/switcher.js" type="text/javascript"></script>
</body>

<!-- Mirrored from ocsolutions.co.in/html/jobportal/login.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jul 2017 20:47:43 GMT -->

