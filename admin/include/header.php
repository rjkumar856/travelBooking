<?php
$logged_in_stmt = $reg_user->runQuery("SELECT * FROM tbl_admin_customers WHERE id = '".$_SESSION['userSession']."' ");
$logged_in_stmt->execute();
$logged_in_result = $logged_in_stmt->fetchObject();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta name="keywords" content="" />
<meta name="author" content="">
<meta name="robots" content="noindex, nofollow" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script src="https://use.fontawesome.com/ef3000c315.js"></script>
<style>.raisetick {position: fixed;right: 100px;top: 0px;z-index: 9999;width: 120px;}.raisetick img {width: 120px;}div#infor { position: fixed;right: 0;background: #fff;top: 60px;}</style>
<?php include 'style.php'; ?>
</head>
<body class="fixed-sidebar fixed-header skin-default content-appear">
		<div class="wrapper"> 
			<!-- Preloader -->
			<div class="preloader"></div>
			<!-- Sidebar -->
			<div class="site-overlay"></div>
			<div class="site-sidebar">
				<div class="custom-scroll custom-scroll-light">
					<ul class="sidebar-menu">
					
						<li class="menu-title">Main</li>
						<li class="with-sub">
							<a href="<?php echo DIR_SYSTEM; ?>" class="waves-effect waves-light">
								<span class="s-icon"><i class="ti-themify-favicon"></i></span>
								<span class="s-text"><?php echo ucwords($logged_in_result->cusFname); echo "(".$_SESSION['userSession'].")"; ?></span>
							</a>
						</li>
						<li class="menu-title">Account</li>
						<li class="with-sub">
							<a class="waves-effect waves-light">
								<span class="s-caret"><i class="fa fa-angle-down"></i></span>
								<span class="s-icon"><i class="fa fa-user"></i></span>
								<span class="s-text">User Details</span>
							</a>
							<ul>
							    <li><a href="<?php echo DIR_SYSTEM; ?>user-list">User List</a></li>
							</ul>
						</li>
						<li class="menu-title">Outstation Trip</li>
						<li class="with-sub">
							<a class="waves-effect  waves-light">
							    <span class="s-caret"><i class="fa fa-angle-down"></i></span>
								<span class="s-icon"><i class="ti-world"></i></span>
								<span class="s-text">Outstation Round Trip</span>
							</a>
							<ul>
							    <li><a href="<?php echo DIR_SYSTEM; ?>view-popular-vehicle-round">View Popular Vehicle</a></li>
							    <li><a href="<?php echo DIR_SYSTEM; ?>add-popular-vehicle-round">Add Popular Vehicle</a></li>
							    <li><a href="<?php echo DIR_SYSTEM; ?>view-enquiry-round">View Enquiry</a></li>
							</ul>
						</li>
						
						<li class="with-sub">
							<a class="waves-effect  waves-light">
							    <span class="s-caret"><i class="fa fa-angle-down"></i></span>
								<span class="s-icon"><i class="ti-world"></i></span>
								<span class="s-text">Outstation One Way Trip</span>
							</a>
							<ul>
							    <li><a href="<?php echo DIR_SYSTEM; ?>view-popular-vehicle-one">View Popular Vehicle</a></li>
							    <li><a href="<?php echo DIR_SYSTEM; ?>add-popular-vehicle-one">Add Popular Vehicle</a></li>
							    <li><a href="<?php echo DIR_SYSTEM; ?>view-enquiry-one">View Enquiry</a></li>
							</ul>
						</li>
						
						<li class="menu-title">Local Taxi</li>
						<li class="with-sub">
							<a class="waves-effect  waves-light">
							    <span class="s-caret"><i class="fa fa-angle-down"></i></span>
								<span class="s-icon"><i class="ti-world"></i></span>
								<span class="s-text">Local Taxi Details</span>
							</a>
							<ul>
							    <li><a href="<?php echo DIR_SYSTEM; ?>view-popular-vehicle-local">View Popular Vehicle</a></li>
							    <li><a href="<?php echo DIR_SYSTEM; ?>add-popular-vehicle-local">Add Popular Vehicle</a></li>
							    <li><a href="<?php echo DIR_SYSTEM; ?>view-enquiry-local">View Enquiry</a></li>
							</ul>
						</li>
						
						<li class="menu-title">Airport Taxi</li>
						<li class="with-sub">
							<a class="waves-effect  waves-light">
							    <span class="s-caret"><i class="fa fa-angle-down"></i></span>
								<span class="s-icon"><i class="ti-world"></i></span>
								<span class="s-text">Airport Taxi Details</span>
							</a>
							<ul>
							    <li><a href="<?php echo DIR_SYSTEM; ?>view-popular-vehicle-airport">View Popular Vehicle</a></li>
							    <li><a href="<?php echo DIR_SYSTEM; ?>add-popular-vehicle-airport">Add Popular Vehicle</a></li>
							    <li><a href="<?php echo DIR_SYSTEM; ?>view-enquiry-airport">View Enquiry</a></li>
							</ul>
						</li>
						
						<li class="menu-title">Tour Packages</li>
						<li class="with-sub">
							<a class="waves-effect  waves-light">
							    <span class="s-caret"><i class="fa fa-angle-down"></i></span>
								<span class="s-icon"><i class="ti-world"></i></span>
								<span class="s-text">Local Tour Packages Details</span>
							</a>
							<ul>
							    <li><a href="<?php echo DIR_SYSTEM; ?>view-local-tour-packages">View Popular Packages</a></li>
							    <li><a href="<?php echo DIR_SYSTEM; ?>add-local-tour-packages">Add Popular Packages</a></li>
							    <li><a href="<?php echo DIR_SYSTEM; ?>view-enquiry-local">View Enquiry</a></li>
							</ul>
						</li>
						<li class="with-sub">
							<a class="waves-effect  waves-light">
							    <span class="s-caret"><i class="fa fa-angle-down"></i></span>
								<span class="s-icon"><i class="ti-world"></i></span>
								<span class="s-text">South India Packages Details</span>
							</a>
							<ul>
							    <li><a href="<?php echo DIR_SYSTEM; ?>view-south-india-packages">View Popular Packages</a></li>
							    <li><a href="<?php echo DIR_SYSTEM; ?>add-south-india-packages">Add Popular Packages</a></li>
							    <li><a href="<?php echo DIR_SYSTEM; ?>view-enquiry-south">View Enquiry</a></li>
							</ul>
						</li>
						<li class="with-sub">
							<a class="waves-effect  waves-light">
							    <span class="s-caret"><i class="fa fa-angle-down"></i></span>
								<span class="s-icon"><i class="ti-world"></i></span>
								<span class="s-text">North India Packages Details</span>
							</a>
							<ul>
							    <li><a href="<?php echo DIR_SYSTEM; ?>view-north-india-packages">View Popular Packages</a></li>
							    <li><a href="<?php echo DIR_SYSTEM; ?>add-north-india-packages">Add Popular Packages</a></li>
							    <li><a href="<?php echo DIR_SYSTEM; ?>view-enquiry-north">View Enquiry</a></li>
							</ul>
						</li>
						<li class="with-sub">
							<a class="waves-effect  waves-light">
							    <span class="s-caret"><i class="fa fa-angle-down"></i></span>
								<span class="s-icon"><i class="ti-world"></i></span>
								<span class="s-text">Honeymoon Tour Packages Details</span>
							</a>
							<ul>
							    <li><a href="<?php echo DIR_SYSTEM; ?>view-honey-moon-packages">View Popular Packages</a></li>
							    <li><a href="<?php echo DIR_SYSTEM; ?>add-honey-moon-packages">Add Popular Packages</a></li>
							    <li><a href="<?php echo DIR_SYSTEM; ?>view-enquiry-honeymoon">View Enquiry</a></li>
							</ul>
						</li>
						<li class="with-sub">
							<a class="waves-effect  waves-light">
							    <span class="s-caret"><i class="fa fa-angle-down"></i></span>
								<span class="s-icon"><i class="ti-world"></i></span>
								<span class="s-text">Pilgrimage Tour Packages Details</span>
							</a>
							<ul>
							    <li><a href="<?php echo DIR_SYSTEM; ?>view-pilgrimage-packages">View Popular Packages</a></li>
							    <li><a href="<?php echo DIR_SYSTEM; ?>add-pilgrimage-packages">Add Popular Packages</a></li>
							    <li><a href="<?php echo DIR_SYSTEM; ?>view-enquiry-pilgrimage">View Enquiry</a></li>
							</ul>
						</li>
						
						<li class="menu-title">Admin Accounts</li>
						<li class="with-sub">
							<a class="waves-effect  waves-light">
							    <span class="s-caret"><i class="fa fa-angle-down"></i></span>
								<span class="s-icon"><i class="fa fa-user-o"></i></span>
								<span class="s-text">Admin Details</span>
							</a>
							<ul>
							    <li><a href="<?php echo DIR_SYSTEM; ?>view-admin-list">View Admin List</a></li>
							    <li><a href="<?php echo DIR_SYSTEM; ?>add-new-admin">Add New Admin A/C</a></li>
							</ul>
						</li>
						<li class="menu-title">Complaints and Request</li>
						<li class="with-sub">
							<a class="waves-effect  waves-light">
							    <span class="s-caret"><i class="fa fa-angle-down"></i></span>
								<span class="s-icon"><i class="ti-pencil-alt"></i></span>
								<span class="s-text">Request and Complaints</span>
							</a>
							<ul>
							    <li><a href="<?php echo DIR_SYSTEM; ?>view-new-admission">View New Admission Requests</a></li>
							    <li><a href="<?php echo DIR_SYSTEM; ?>view-user-enquiry-request">View Enquiry Requests</a></li>
							    <li><a href="<?php echo DIR_SYSTEM; ?>view-subscribe-list">View Subscribe List</a></li>
							</ul>
						</li>
						
						<li>
							<a href="<?php echo DIR_SYSTEM; ?>logout" class="waves-effect  waves-light">
							<span class="s-icon"><i class="ti-lock"></i></span>
							<span class="s-text">Logout</span>
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="site-header">
				<nav class="navbar navbar-light">
					<div class="navbar-left">
						<a class="navbar-brand" href="/">
							<div class="logo"><img src="images/logo-travel.png" /></div>
						</a>
						<div class="toggle-button dark sidebar-toggle-first float-xs-left hidden-md-up">
							<span class="hamburger"></span>
						</div>
						<div class="toggle-button-second dark float-xs-right hidden-md-up">
							<i class="ti-arrow-left"></i>
						</div>
						<div class="toggle-button dark float-xs-right hidden-md-up" data-toggle="collapse" data-target="#collapse-1">
							<span class="more"></span>
						</div>
					</div>
					<div class="navbar-right navbar-toggleable-sm collapse" id="collapse-1">
						<div class="toggle-button light sidebar-toggle-second float-xs-left hidden-sm-down">
							<span class="hamburger"></span>
						</div>
						<div class="toggle-button-second light float-xs-right hidden-sm-down">
							<i class="ti-arrow-left"></i>
						</div>
						<ul class="nav navbar-nav float-md-right">
							
							<li class="nav-item dropdown hidden-sm-down">
								<?php
                                $stmt = $reg_user->runQuery("SELECT * FROM tbl_admin_customers WHERE id = '".$_SESSION['userSession']."' ");
                                $stmt->execute();
                                for($i=0; $stmt1 = $stmt->fetchObject(); $i++)
                                { ?>
								<a href="#" data-toggle="dropdown" aria-expanded="false">
									<span class="avatar box-32 name">
									<?php echo $stmt1->name[0]; ?>
									</span>
								</a><?php } ?>
								<div class="dropdown-menu dropdown-menu-right animated fadeInUp">
									<div class="dropdown-divider"></div>
									<a class="dropdown-item" href="logout"><i class="ti-power-off mr-0-5"></i> Sign out</a>
								</div>
							</li>
							
						</ul>
						<ul class="nav navbar-nav">
							<li class="nav-item hidden-sm-down">
								<a class="nav-link toggle-fullscreen" href="#">
									<i class="ti-fullscreen"></i>
								</a>
							</li>
							<li class="nav-item dropdown hidden-sm-down">
								<a class="nav-link" href="#" data-toggle="dropdown" aria-expanded="false">
									<i class="ti-layout-grid3"></i>
								</a>
								<div class="dropdown-apps dropdown-menu animated fadeInUp">
									<div class="a-grid">
										<div class="row row-sm">
											<div class="col-xs-4">
												<div class="a-item">
													<a href="#">
														<div class="ai-icon"><img class="img-fluid" src="img/brands/dropbox.png" alt=""></div>
														<div class="ai-title">Dropbox</div>
													</a>
												</div>
											</div>
											<div class="col-xs-4">
												<div class="a-item">
													<a href="#">
														<div class="ai-icon"><img class="img-fluid" src="img/brands/github.png" alt=""></div>
														<div class="ai-title">Github</div>
													</a>
												</div>
											</div>
											<div class="col-xs-4">
												<div class="a-item">
													<a href="#">
														<div class="ai-icon"><img class="img-fluid" src="img/brands/wordpress.png" alt=""></div>
														<div class="ai-title">Wordpress</div>
													</a>
												</div>
											</div>
											<div class="col-xs-4">
												<div class="a-item">
													<a href="#">
														<div class="ai-icon"><img class="img-fluid" src="img/brands/gmail.png" alt=""></div>
														<div class="ai-title">Gmail</div>
													</a>
												</div>
											</div>
											<div class="col-xs-4">
												<div class="a-item">
													<a href="#">
														<div class="ai-icon"><img class="img-fluid" src="img/brands/drive.png" alt=""></div>
														<div class="ai-title">Drive</div>
													</a>
												</div>
											</div>
											<div class="col-xs-4">
												<div class="a-item">
													<a href="#">
														<div class="ai-icon"><img class="img-fluid" src="img/brands/dribbble.png" alt=""></div>
														<div class="ai-title">Dribbble</div>
													</a>
												</div>
											</div>
										</div>
									</div>
									<a class="dropdown-more" href="#">
										<strong>View all apps</strong>
									</a>
								</div>
							</li>
						</ul>
					</div>
				</nav>
			</div>