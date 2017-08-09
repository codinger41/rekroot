<!DOCTYPE html>
<html lang="en" dir="ltr">

<!-- Mirrored from ocsolutions.co.in/html/jobportal/header4.php by HTTrack Website Copier/3.x [XR&CO'2014], Sat, 29 Jul 2017 20:47:53 GMT -->
<head>
<meta charset="utf-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>	RE-ROOT</title>
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
<body class="header4">
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
						<button type="button" class="btn btn-primary btn-lg" onclick="location.href='submit-job.php'">Login
						<button type="button" class="btn btn-primary btn-lg" onclick="location.href='submit-job.php'">Submit Job</button>
					</div>
					<!-- button-login end here -->
				</div>
			    <div class="col-sm-9 col-md-9 col-xs-12">
					<!-- menu start here-->
					<nav class="navbar" id="menu">
						<div class="navbar-header">
							<span class="menutext visible-xs">Menu</span>
							<button data-target=".navbar-ex1-collapse" data-toggle="collapse" class="btn btn-navbar navbar-toggle" type="button"><i class="fa fa-bars" aria-hidden="true"></i></button>
						</div>
						<div class="collapse navbar-collapse navbar-ex1-collapse padd0">
							<ul class="nav navbar-nav pull-left">
								<li class="dropdown">
									<a data-toggle="dropdown" class="dropdown-toggle" href="#">HOME</a>
									
								</li>
								<li class="dropdown">
									<a  href="jobs-list-view.php">JOBS</a>
									
								</li>
								<li class="dropdown">
									<a   href="candidate-grid-view.php">CANDIDATES</a>
									
								</li>
								<li class="dropdown">
									<a 	href="employers.php">EMPLOYERS</a>
									
								</li>
								<li class="dropdown">
									<a href="about.php">ABOUT US</a>
									
								</li>
								<li class="dropdown">
									<a  href="contact.php">CONTACT US
										<span class="fa fa-angle-down"></span>
									</a>
									
										</div>
									</div>
								</li>
							</ul>
						</div>
					</nav>
					<!-- menu end here -->
					<!-- button-login start here -->
					<div class="button-login pull-right hidden-xs">
						<button type="button" class="btn btn-default btn-lg" onclick="location.href='login.php'"><i class="fa fa-sign-in" aria-hidden="true"></i></button>
						<button type="button" class="btn btn-primary btn-lg" onclick="location.href='submit-job.php'">Submit Job</button>
					</div>
					<!-- button-login end here -->
				</div>
			    
			</div>
		</div>
		<!-- header container end here -->
	</header>
<!-- header end here -->

<!-- slider start here -->
	<div class="slideshow owl-carousel">
		<div class="item">
			<img src="images/banner4.png" alt="slider" title="slider" class="img-responsive"/>
			<div class="slide-detail">
				<div class="container">
					<div class="slider-caption">
						<div class="off"></div>
						<h1>Find Your Job</h1>
						<div class="col-md-4 col-sm-4 col-xs-12 paddleft">
							<select class="selectpicker form-control" name="allcate">
								<option value="1">Engineering</option>
								<option value="0">Nursing</option>
								<option value="0">Teaching</option>
								<option value="0">Banking/commerce</option>
								<option value="0">Web development</option>

							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<select class="selectpicker form-control" name=	"location">
								<option value="1">Lagos</option>
								<option value="0">Abuja</option>
								<option value="0">Port Hacourt</option>
								<option value="0">Osun</option>
								<option value="0">Ogun</option>
								<option value="0">Kogi</option>
								<option value="0">Kwara</option>
								<option value="0">Benue</option>
								<option value="0">Akwa Ibom</option>
								<option value="0">Anambra</option>

							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12 paddright">
							<div class="input-group">
								<input name="s" class="form-control" value="" placeholder="Search" type="text">
								<span>
									<button type="submit" class="btnsrch" onclick="location.href='jobs.php'"><i class="fa fa-search"></i></button>
								</span>
							</div>
						</div>
						<div class="center">
							<button class="btn-default">ADVANCE JOB SEARCH <i class="fa fa-plus-square-o" aria-hidden="true"></i>
							</button>
						</div>	
					</div>
				</div>
			</div>
		</div>
		<div class="item">
			<img src="images/banner4.png" alt="slider" title="slider" class="img-responsive"/>
			<div class="slide-detail">
				<div class="container">
					<div class="slider-caption">
						<div class="off"></div>
						<h1>Find Your Job</h1>
						<div class="col-md-4 col-sm-4 col-xs-12 paddleft">
							<select class="selectpicker form-control" name="allcate">
								<option value="1">Engineering</option>
								<option value="0">Nursing</option>
								<option value="0">Teaching</option>
								<option value="0">Banking/commerce</option>
								<option value="0">Web development</option>

							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<select class="selectpicker form-control" name=	"location">
								<option value="1">Lagos</option>
								<option value="0">Abuja</option>
								<option value="0">Port Hacourt</option>
								<option value="0">Osun</option>
								<option value="0">Ogun</option>
								<option value="0">Kogi</option>
								<option value="0">Kwara</option>
								<option value="0">Benue</option>
								<option value="0">Akwa Ibom</option>
								<option value="0">Anambra</option>

							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12 paddright">
							<div class="input-group">
								<input name="s" class="form-control" value="" placeholder="Search" type="text">
								<span>
									<button type="submit" class="btnsrch" onclick="location.href='jobs.php'"><i class="fa fa-search"></i></button>
								</span>
							</div>
						</div>
						<div class="center">
							<button class="btn-default">ADVANCE JOB SEARCH <i class="fa fa-plus-square-o" aria-hidden="true"></i>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>	
		<div class="item">
			<img src="images/banner4.png" alt="slider" title="slider" class="img-responsive"/>
			<div class="slide-detail">
				<div class="container">
					<div class="slider-caption">
						<div class="off"></div>
						<h1>Find Your Job</h1>
						<div class="col-md-4 col-sm-4 col-xs-12 paddleft">
							<select class="selectpicker form-control" name="allcate">
								<option value="1">Engineering</option>
								<option value="0">Nursing</option>
								<option value="0">Teaching</option>
								<option value="0">Banking/commerce</option>
								<option value="0">Web development</option>

							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<select class="selectpicker form-control" name=	"location">
								<option value="1">Lagos</option>
								<option value="0">Abuja</option>
								<option value="0">Port Hacourt</option>
								<option value="0">Osun</option>
								<option value="0">Ogun</option>
								<option value="0">Kogi</option>
								<option value="0">Kwara</option>
								<option value="0">Benue</option>
								<option value="0">Akwa Ibom</option>
								<option value="0">Anambra</option>

							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12 paddright">
							<div class="input-group">
								<input name="s" class="form-control" value="" placeholder="Search" type="text">
								<span>
									<button type="submit" class="btnsrch" onclick="location.href='jobs.php'"><i class="fa fa-search"></i></button>
								</span>
							</div>
						</div>
						<div class="center">
							<button class="btn-default">ADVANCE JOB SEARCH <i class="fa fa-plus-square-o" aria-hidden="true"></i>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>	
		<div class="item">
			<img src="images/banner4.png" alt="slider" title="slider" class="img-responsive"/>
			<div class="slide-detail">
				<div class="container">
					<div class="slider-caption">
						<div class="off"></div>
						<h1>Find Your Job</h1>
						<div class="col-md-4 col-sm-4 col-xs-12 paddleft">
							<select class="selectpicker form-control" name="allcate">
								<option value="1">Engineering</option>
								<option value="0">Nursing</option>
								<option value="0">Teaching</option>
								<option value="0">Banking/commerce</option>
								<option value="0">Web development</option>

							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12">
							<select class="selectpicker form-control" name=	"location">
								<option value="1">Lagos</option>
								<option value="0">Abuja</option>
								<option value="0">Port Hacourt</option>
								<option value="0">Osun</option>
								<option value="0">Ogun</option>
								<option value="0">Kogi</option>
								<option value="0">Kwara</option>
								<option value="0">Benue</option>
								<option value="0">Akwa Ibom</option>
								<option value="0">Anambra</option>

							</select>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12 paddright">
							<div class="input-group">
								<input name="s" class="form-control" value="" placeholder="Search" type="text">
								<span>
									<button type="submit" class="btnsrch" onclick="location.href='jobs.php'"><i class="fa fa-search"></i></button>
								</span>
							</div>
						</div>
						<div class="center">
							<button class="btn-default">ADVANCE JOB SEARCH <i class="fa fa-plus-square-o" aria-hidden="true"></i>
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>	
	</div>
<!-- slider end here -->

</div>

<!-- featured start here -->
	<div id="featured">
		<div class="container">
			<div class="row">
				<!-- featured-jobs start here -->
				<div class="featured-jobs">
					<h1>FEATURED JOBS</h1>
					<div class="border"></div>
					<div class="border1"></div>
				</div>
				<!-- featured-jobs end here -->
				
				
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="product-box">
						<div class="image">
							<a href="jobs.php">
								<img class="img-responsive" src="images/p1.jpg" alt="p1" title="p1"/>
							</a>	
								<div class="buttons">
									<div class="open-down">
										<button type="button" class="rotate1">
											<i class="fa fa-link" aria-hidden="true"></i>
										</button>
										<button type="button" class="rotate1">
											<i class="fa fa-search" aria-hidden="true"></i>
										</button>
									</div>
								</div>		
						</div>		
						<div class="matter">
							<h1>IT Department Manager</h1>
							<ul class="list-inline">
								<li>
									<a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> Full Time</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Chandigarh</a>
								</li>
							</ul>
							<p>There are many variations of passages of lorem Ipsum available [...]</p>
						</div>
						<button type="button" class="btn btn-info" onclick="location.href='jobs.php'">VIEW MORE</button>
						<button type="button" class="btn btn-info" onclick="location.href='apply-job-form.php'">APPLY NOW</button>
					</div>
				</div>
				
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="product-box">
						<div class="image">
							<a href="jobs.php">
								<img class="img-responsive" src="images/p2.jpg" alt="p2" title="p2"/>
							</a>	
								<div class="buttons">
									<div class="open-down">
										<button type="button" class="rotate1">
											<i class="fa fa-link" aria-hidden="true"></i>
										</button>
										<button type="button" class="rotate1">
											<i class="fa fa-search" aria-hidden="true"></i>
										</button>
									</div>
								</div>		
						</div>		
						<div class="matter">
							<h1>IT Department Manager</h1>
							<ul class="list-inline">
								<li>
									<a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> Full Time</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Chandigarh</a>
								</li>
							</ul>
							<p>There are many variations of passages of lorem Ipsum available [...]</p>
						</div>
						<button type="button" class="btn btn-info" onclick="location.href='jobs.php'">VIEW MORE</button>
						<button type="button" class="btn btn-info" onclick="location.href='apply-job-form.php'">APPLY NOW</button>
					</div>
				</div>
				
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="product-box">
						<div class="image">
							<a href="jobs.php">
								<img class="img-responsive" src="images/p3.jpg" alt="p3" title="p3"/>
							</a>	
								<div class="buttons">
									<div class="open-down">
										<button type="button" class="rotate1">
											<i class="fa fa-link" aria-hidden="true"></i>
										</button>
										<button type="button" class="rotate1">
											<i class="fa fa-search" aria-hidden="true"></i>
										</button>
									</div>
								</div>		
						</div>		
						<div class="matter">
							<h1>IT Department Manager</h1>
							<ul class="list-inline">
								<li>
									<a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> Full Time</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Chandigarh</a>
								</li>
							</ul>
							<p>There are many variations of passages of lorem Ipsum available [...]</p>
						</div>
						<button type="button" class="btn btn-info" onclick="location.href='jobs.php'">VIEW MORE</button>
						<button type="button" class="btn btn-info" onclick="location.href='apply-job-form.php'">APPLY NOW</button>
					</div>
				</div>
				
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="product-box">
						<div class="image">
							<a href="jobs.php">
								<img class="img-responsive" src="images/p4.jpg" alt="p4" title="p4"/>
							</a>	
								<div class="buttons">
									<div class="open-down">
										<button type="button" class="rotate1">
											<i class="fa fa-link" aria-hidden="true"></i>
										</button>
										<button type="button" class="rotate1">
											<i class="fa fa-search" aria-hidden="true"></i>
										</button>
									</div>
								</div>		
						</div>		
						<div class="matter">
							<h1>IT Department Manager</h1>
							<ul class="list-inline">
								<li>
									<a href="#"><i class="fa fa-bookmark" aria-hidden="true"></i> Full Time</a>
								</li>
								<li>
									<a href="#"><i class="fa fa-map-marker" aria-hidden="true"></i> Chandigarh</a>
								</li>
							</ul>
							<p>There are many variations of passages of lorem Ipsum available [...]</p>
						</div>
						<button type="button" class="btn btn-info" onclick="location.href='jobs.php'">VIEW MORE</button>
						<button type="button" class="btn btn-info" onclick="location.href='apply-job-form.php'">APPLY NOW</button>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- featured end here -->

<!-- browse start here -->
	<div class="browse">
		<div class="container">
			<div class="row">
				<!-- featured-jobs start here -->
				<div class="browse-jobs">
					<h1>BROWSE JOBS</h1>
					<div class="border"></div>
					<div class="border1"></div>
				</div>
				<!-- featured-jobs end here -->
				
				
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="matter">
						<a href="jobs.php">
							<div class="boxbor">
								<i class="fa fa-desktop" aria-hidden="true"></i>
								<span>Information Technology</span>
							</div>
						</a>
					</div>	
				</div>
				
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="matter">
						<a href="jobs.php">
							<div class="boxbor">
								<i class="fa fa-university" aria-hidden="true"></i>
								<span>Banking</span>
							</div>
						</a>
					</div>
				</div>
				
			    <div class="col-md-3 col-sm-3 col-xs-12">
					<div class="matter">
						<a href="jobs.php">
							<div class="boxbor">
							<i class="fa fa-money" aria-hidden="true"></i>
								<span>Accounting</span>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="matter">
						<a href="jobs.php">
							<div class="boxbor">
								<i class="fa fa-bar-chart" aria-hidden="true"></i>
									<span>Sales & marketing</span>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="matter">
						<a href="jobs.php">
							<div class="boxbor">
								<i class="fa fa-tachometer" aria-hidden="true"></i>
								<span>Digital & Creative</span>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="matter">
						<a href="jobs.php">
							<div class="boxbor">
							<i class="fa fa-suitcase" aria-hidden="true"></i>
								<span>Management</span>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="matter">
						<a href="jobs.php">
							<div class="boxbor">
								<i class="fa fa-gavel" aria-hidden="true"></i>
									<span>Legal Jobs</span>
							</div>
						</a>
					</div>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">
					<div class="matter">
						<a href="jobs.php">
							<div class="boxbor">
							<i class="fa fa-tags" aria-hidden="true"></i>
								<span>Retail</span>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- browse end here -->

<!-- testimonial start here -->
	<div id="testimonial">
		<div class="container">
			<div class="row">
				<!-- testimonial-jobs start here -->
				<div class="testimonial-jobs">
					<h1>TESTIMONIAL</h1>
					<div class="border"></div>
					<div class="border1"></div>
				</div>
				<!-- testimonial-jobs end here -->
				
				<div id="testimonials" class="col-md-12 col-sm-12 col-xs-12 owl-carousel">
					<div class="item">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="photo">
								<img src="images/pic-1.png" class="img-responsive" alt="pic-1" title="pic-1" />
								<i class="fa fa-quote-left" aria-hidden="true"></i>
								<p>There are many variations of passages of Lorem Ipsum available, temporary  type  words </p>
								<span class="fa fa-quote-right" aria-hidden="true"></span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="photo">
								<img src="images/pic-2.png" class="img-responsive" alt="pic-2" title="pic-2" />
								<i class="fa fa-quote-left" aria-hidden="true"></i>
								<p>There are many variations of passages of Lorem Ipsum available, temporary  type  words </p>
								<span class="fa fa-quote-right" aria-hidden="true"></span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="photo">
								<img src="images/pic-3.png" class="img-responsive" alt="pic-3" title="pic-3" />
								<i class="fa fa-quote-left" aria-hidden="true"></i>
								<p>There are many variations of passages of Lorem Ipsum available, temporary  type  words </p>
								<span class="fa fa-quote-right" aria-hidden="true"></span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="photo">
								<img src="images/pic-1.png" class="img-responsive" alt="pic-1" title="pic-1" />
								<i class="fa fa-quote-left" aria-hidden="true"></i>
								<p>There are many variations of passages of Lorem Ipsum available, temporary  type  words </p>
								<span class="fa fa-quote-right" aria-hidden="true"></span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="photo">
								<img src="images/pic-2.png" class="img-responsive" alt="pic-2" title="pic-2" />
								<i class="fa fa-quote-left" aria-hidden="true"></i>
								<p>There are many variations of passages of Lorem Ipsum available, temporary  type  words </p>
								<span class="fa fa-quote-right" aria-hidden="true"></span>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="photo">
								<img src="images/pic-3.png" class="img-responsive" alt="pic-3" title="pic-3" />
								<i class="fa fa-quote-left" aria-hidden="true"></i>
								<p>There are many variations of passages of Lorem Ipsum available, temporary  type  words </p>
								<span class="fa fa-quote-right" aria-hidden="true"></span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- testimonial end here -->



<!-- latest start here -->
	<div id="latest">
		<div class="container">
			<div class="row">
				<!-- latest-candidate start here -->
				<div class="latest-candidate">
					<h1>OUR LATEST CANDIDATES</h1>
					<div class="border"></div>
					<div class="border1"></div>
				</div>
				<!-- latest-candidate end here -->
				
				
				<div id="latests" class="owl-carousel">
					<div class="item">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
							<div class="candidate">
								<img src="images/cand-1.png" class="img-responsive" alt="cand-1" title="cand-1" />
								<h1>John Doe</h1>
								<p>Web Designer </p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
							<div class="candidate">
								<img src="images/cand-2.png" class="img-responsive" alt="cand-2" title="cand-2" />
								<h1>John Doe</h1>
								<p>Web Designer </p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
							<div class="candidate">
								<img src="images/cand-3.png" class="img-responsive" alt="cand-3" title="cand-3" />
								<h1>John Doe</h1>
								<p>Web Designer </p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
							<div class="candidate">
								<img src="images/cand-4.png" class="img-responsive" alt="cand-4" title="cand-4" />
								<h1>John Doe</h1>
								<p>Web Designer </p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
							<div class="candidate">
								<img src="images/cand-5.png" class="img-responsive" alt="cand-5" title="cand-5" />
								<h1>John Doe</h1>
								<p>Web Designer </p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
							<div class="candidate">
								<img src="images/cand-6.png" class="img-responsive" alt="cand-6" title="cand-6" />
								<h1>John Doe</h1>
								<p>Web Designer </p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
							<div class="candidate">
								<img src="images/cand-1.png" class="img-responsive" alt="cand-1" title="cand-1" />
								<h1>John Doe</h1>
								<p>Web Designer </p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
							<div class="candidate">
								<img src="images/cand-2.png" class="img-responsive" alt="cand-2" title="cand-2" />
								<h1>John Doe</h1>
								<p>Web Designer </p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
							<div class="candidate">
								<img src="images/cand-3.png" class="img-responsive" alt="cand-3" title="cand-3" />
								<h1>John Doe</h1>
								<p>Web Designer </p>
							</div>
						</div>
					</div>
					<div class="item">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12">
							<div class="candidate">
								<img src="images/cand-4.png" class="img-responsive" alt="cand-4" title="cand-4" />
								<h1>John Doe</h1>
								<p>Web Designer </p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- latest end here -->


<!-- partner start here -->
	<div id="partner">
		<div class="container">
			<div class="row">
				<!-- our-partner start here -->
				<div class="our-partner">
					<h1>OUR PARTNERS</h1>
					<div class="border"></div>
					<div class="border1"></div>
				</div>
				<!-- our-partner end here -->
				
				<div id="partners" class="owl-carousel">
					<div class="item">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 image">
							<img src="images/l1.jpg" class="img-responsive" alt="l1" title="l1" />
						</div>
					</div>
					<div class="item">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 image">
							<img src="images/l2.jpg" class="img-responsive" alt="l2" title="l2" />
						</div>
					</div>
					<div class="item">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 image">
							<img src="images/l3.jpg" class="img-responsive" alt="l3" title="l3" />
						</div>
					</div>
					<div class="item">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 image">
							<img src="images/l4.jpg" class="img-responsive" alt="l4" title="l4" />
						</div>
					</div>
					<div class="item">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 image">
							<img src="images/l5.jpg" class="img-responsive" alt="l5" title="l5" />
						</div>
					</div>
					<div class="item">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 image">
							<img src="images/l1.jpg" class="img-responsive" alt="l1" title="l1" />
						</div>
					</div>
					<div class="item">
						<div class="col-sm-12 col-md-12 col-lg-12 col-xs-12 image">
							<img src="images/l2.jpg" class="img-responsive" alt="l2" title="l2" />
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
<!-- partner end here -->

<!-- Footer start here -->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-sm-3 col-md-3 col-xs-12 info">
					<h5>Information</h5>
					<ul class="list-unstyled">
						<li>
							<a href="about.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i>About Us</a>
						</li>
						<li>
							<a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Help Desk</a>
						</li>
						<li>
							<a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Support</a>
						</li>
						<li>
							<a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Privacy Policy</a>
						</li>
						<li>
							<a href="#"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Terms & Conditions</a>
						</li>
					</ul>
				</div>	
				<div class="col-sm-2 col-md-2 col-xs-12 use">
					<h5>Useful Links</h5>
					<ul class="list-unstyled">
						<li>
							<a href="index-2.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Homepage</a>
						</li>
						<li>
							<a href="submit-job.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Submit Job</a>
						</li>
						<li>
							<a href="jobs.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i>All Candidates</a>
						</li>
						<li>
							<a href="blog.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Latest Blogs</a>
						</li>
						<li>
							<a href="jobs.php"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Jobs</a>
						</li>
					</ul>
				</div>	
				
				<div class="col-sm-3 col-md-3 col-xs-12 contact">
					<h5>Contact Us</h5>				
					<ul class="list-unstyled">
						<li>
							<a href="contact.php"><i class="fa fa-map-marker" aria-hidden="true"></i>
							REKROOT ADDRESS</a>
						</li>
						<li>
							<a href="contact.php"><i class="fa fa-phone" aria-hidden="true"></i>+1800-123-1234</a>
						</li>
						<li>
							<a href="contact.php"><i class="fa fa-envelope" aria-hidden="true"></i>Support@rekroot.com</a>
						</li>
						<li>
							<a href="contact.php"><i class="fa fa-skype" aria-hidden="true"></i>rekroot.2017</a>
						</li>
					</ul>	
				</div>	
			
				<div class="col-sm-4 col-md-4 col-xs-12">
					<h5>Subscribe Our Newsletter</h5>
					<p>Stay connected with us for our latest news and updates</p>
					<form name="subscribe" class="subscribe">
						<div class="form-group">
							<div class="input-group">
								<input placeholder="Enter your Email Address" id="subscribe_email1" name="subscribe_email" value="" class="form-control" type="text">
								<div class="input-group-btn">
									<button class="btn btn-default btn-lg" type="submit"><i class="fa fa-paper-plane" aria-hidden="true"></i> </button>
								</div>
							</div>
						</div>
					</form>
					<ul class="list-inline socialicon">
						<li>
							<a href="https://www.facebook.com/" target="_blank" class="fb round">
								<i class="fa fa-facebook" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="https://twitter.com/" target="_blank" class="twitter round">
								<i class="fa fa-twitter" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="https://plus.google.com/" target="_blank" class="google round">
								<i class="fa fa-google-plus" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="https://www.instagram.com/" target="_blank" class="insta round">
								<i class="fa fa-instagram" aria-hidden="true"></i>
							</a>
						</li>
						<li>
							<a href="https://in.linkedin.com/" target="_blank" class="linkedin round">
								<i class="fa fa-linkedin" aria-hidden="true"></i>
							</a>
						</li>	
					</ul>
				</div>	
			</div>
		</div>
	</footer>
	<div class="powered">
		<div class="container">
			<img src="images/foot-logo.png"  alt="foot-logo" title="foot-logo" />
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

</body>


</html>