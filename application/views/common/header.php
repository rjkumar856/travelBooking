<?php
if(isset($this->session->userdata['logged_in'])){
   $user_details=$this->session->userdata['logged_in'];
}
?>
<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie6"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie7"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie8"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html dir="ltr" lang="en">
<head>
<!-- Meta Tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<base href="<?php echo base_url(); ?>" />
<!-- Page Title -->
<title>Tours and Travels Agents in HSR Layout, Tours And Travels in Bangalore</title>
<meta name="description" content="Sri Thirumala Tours And Travels, We are Decade old experienced best Tours And Travels in bangalore known for providing customized tour packages for you. Grab the best deals only with Sri Thirumala Tours and Travels, one of the best tours and travels agents in HSR Layout." />
<meta name="keywords" content="top Tours And Travels in bangalore, best Tours And Travels in bangalore, tours and travels agents in HSR Layout"/>
<meta name="author" content="Sri Thirumala Tours And Travels" />    
<!-- Favicon and Touch Icons -->
<link href="<?php echo base_url(); ?>assets/images/favicon.ico" rel="shortcut icon" type="image/png">
<link href="<?php echo base_url(); ?>assets/images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="<?php echo base_url(); ?>assets/images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="<?php echo base_url(); ?>assets/images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="<?php echo base_url(); ?>assets/images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">

<link href="<?php echo base_url(); ?>assets/css/style.css?<?php echo time(); ?>" rel="stylesheet" type="text/css">
	<!--[if lt IE 9]>
		<script src="js/html5/respond.min.js"></script>
    <![endif]-->
    
<!--start here outstation_round_trip details page-->
<!--
<link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" type="text/css">
<link href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css">
-->
<!-- end here-->

</head>
<body data-offset="200" data-spy="scroll" data-target=".ow-navigation">
	<!-- LOADER -->
	<div id="site-loader" class="load-complete">
		<div class="loader">
			<div class="loader-inner ball-triangle-path">
				<div></div>
				<div></div>
				<div></div>
			</div>
		</div>
	</div><!-- Loader /- -->
	
	<!-- Header -->	
	<header class="header-main container-fluid no-padding">
	<!-- SidePanel -->
	<div id="slidepanel">
		<!-- Top Header -->
		<div class="header-top container-fluid no-padding">	
			<div class="container">
				<div class="row">
					<div class="col-md-12">
					    
						<img src="<?php echo base_url(); ?>assets/images/headername.png" alt="head" style="margin: 0 auto;display: block;">
						<!--<span>Welcome to Sri Thirumala Tours and Travels</span>-->
					</div>
					<!--<div class="col-md-3 col-sm-6 col-xs-6">
						<ul>
							<li><a href="#" title="Facebook"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#" title="Twitter"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#" title="GooglePlus"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
							<li><a href="#" title="Linkedin"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
						</ul>
					</div>-->
				</div>
			</div>
		</div><!-- Top Header /- -->
		<!-- Middle Header /- -->
		<div class="container-fluid header-middle">
			<div class="row">
				<div class="col-md-3">
					<div class="logo-block">
						<a href="<?php echo base_url(); ?>"><img src="<?php echo base_url(); ?>assets/images/logo.png" alt="logo" style="width: 250px;"/><!--<h3>Sri Thirumala</h3><span>tours & travels</span>--></a>
					</div>
				</div>
				<div class="col-md-9 col-sm-12 col-xs-12">
					<div class="header-contactinfo-block">
						<div class="contactinfo-box">
							<span class="icon icon-Pointer"></span>
							<p>#85/1, 19th Main, 17th Cross, Sector 1,<span>HSR Layout, Bangalore-560102</span></p>
						</div>
						<div class="contactinfo-box">
							<span class="icon icon-Time"></span>
							<p>Mon-Sat : 9:00 AM to 8:00 PM<span>Sunday : Closed</span></p>
						</div>
						<div class="contactinfo-box">
							<span class="icon icon-Phone2"></span>
							<p>
								<a href="tel:09845369848" title="09845369848">(+91) 9845369848</a>
								<a href="mailto:thirumalatours@gmail.com" title="thirumalatours@gmail.com" target="_blank">thirumalatours@gmail.com</a>
							</p>
						</div>
					</div>
				</div>
			</div>
		</div><!-- Middle Header /- -->
	</div><!-- SidePanel /- -->
	
	<div class="menu-block">
		<div class="container">
			<div class="row">
				<!-- Navigation -->
				<nav class="navbar ow-navigation">
					<div id="loginpanel" class="desktop-hide">
						<div class="right" id="toggle">
							<a id="slideit" href="#slidepanel"><i class="fo-icons fa fa-inbox"></i></a>
							<a id="closeit" href="#slidepanel"><i class="fo-icons fa fa-close"></i></a>
						</div>
					</div>
					<div class="col-md-12">
						<div class="navbar-header">
							<button aria-controls="navbar" aria-expanded="false" data-target="#navbar" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
							<a title="Logo" href="" class="navbar-brand"></a>
							<a href="" class="mobile-logo"><img src="<?php echo base_url(); ?>assets/images/logo.jpg" alt="logo" height="60" width="130"/>
						</div>
						<div class="navbar-collapse collapse" id="navbar">
							<ul class="nav navbar-nav">
								<li class="<?php if($activepage == 'home'){ echo "active"; } ?>"><a title="Home" href="<?php echo base_url(); ?>">Home</a></li>
								<li class="<?php if($activepage == 'aboutus'){ echo "active"; } ?>"><a title="About Us" href="aboutus">About Us</a></li>
								<li class="dropdown <?php if($activepage == 'outstation_round_trip'){ echo "active"; } ?>">
									<a aria-expanded="false" aria-haspopup="true" role="button" class="dropdown-toggle" title="Outstation Trip" href="#">Outstation Trips</a>
									<i class="ddl-switch fa fa-angle-down"></i>
									<ul class="dropdown-menu">
										<li><a title="Outstation Round Trip" href="outstation_round_trip">Outstation Round Trip</a></li>
										<li><a title="Outstation One Way Trip" href="outstation_one_way_trip">Outstation One Way Trip</a></li>
									</ul>
								</li>
								<li class="<?php if($activepage == 'local_taxi'){ echo "active"; } ?>"><a title="Local Taxi" href="local_taxi">Local Taxi</a></li>
						        <li class="<?php if($activepage == 'airport_taxi'){ echo "active"; } ?>"><a title="Airport Taxi" href="airport_taxi">Airport Taxi</a></li>
								<li class="dropdown <?php if($activepage == 'local-details'){ echo "active"; } ?>">
									<a aria-expanded="false" aria-haspopup="true" role="button" class="dropdown-toggle" title="Tours" href="#">Tour Packages</a>
									<i class="ddl-switch fa fa-angle-down"></i>
									<ul class="dropdown-menu">
										<li><a title="Local Packages" href="local-details">Local Tour Packages</a></li>
										<li><a title="South India Packages" href="south-details">South India Packages</a></li>
										<li><a title="North India Packages" href="north-details">North India Packages</a></li>
										<li><a title="Honeymoon Packages" href="honeymoon-details">Honeymoon Packages</a></li>
										<li><a title="Pilgrimage Packages" href="pilgrimage-details">Pilgrimage Packages</a></li>
									</ul>
								</li>			
								<li class="<?php if($activepage == 'contactus'){ echo "active"; } ?>"><a title="Contact" href="contactus">Contact Us</a></li>
							</ul>
						</div>
					</div>
				</nav><!-- Navigation /- -->
			</div>
		</div>
	</div>
</header><!-- Header /- -->