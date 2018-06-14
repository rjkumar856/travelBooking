<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('common/header.php');
?>

<main class="site-main page-spacing">
		
		<div class="container-fluid no-padding popular-destination2-section" style="background: url(<?php echo base_url(); ?>assets/images/2.jpg) fixed;    padding-bottom: 50px;">
			<div class="container">
				<!-- Booking Form -->
				<div class="booking-form-section">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12 bookingform-details">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active"><a href="#search1" aria-controls="search1" role="tab" data-toggle="tab"><img src="<?php echo base_url(); ?>assets/images/photoslider2-ic3.png" alt="photoslider2-ic3" width="22" height="23">Local Packages</a></li>
								</ul>
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active fade in" id="search1">
										<?php echo form_open('local-tour-package-submit', 'class="booking-form" id="booking-form-local-tour-package"'); ?>
										<div class="alert alert-danger" style="<?php if(validation_errors()){ echo 'display: block;'; }else{ echo 'display: none;'; } ?>"><?php if(validation_errors()){echo validation_errors();} ?></div>
                                        <div class="alert alert-success" style="<?php if(isset($message)){ echo 'display: block;'; }else{ echo 'display: none;'; } ?>"><?php if(isset($message)){ echo $message;} ?></div>
                                        <div class="alert alert-success" style="<?php if($this->session->flashdata('message')){ echo 'display: block;'; }else{ echo 'display: none;'; } ?>"><?php if($this->session->flashdata('message')){ echo $this->session->flashdata('message'); } ?></div>
											<div class="row">
												<div class="form-group col-md-12 no-padding">
													<div class="row">
														<div class="form-group col-md-6 booking_location">
															<label>Pickup Location</label>
															<input class="form-control" required placeholder="Location" name="tour_pickup_location" type="text">
														</div>
														<div class="form-group col-md-6 booking_location select-options">
															<label>Total Members</label>
															<div class="select_options">
																<select class="form-control" name="tour_total_member" required>
																	<option value="1">1</option>
																	<option value="2">2</option>
																	<option value="3">3</option>
																	<option value="4">4</option>
																	<option value="5">5</option>
																	<option value="6">6</option>
																	<option value="7">7</option>
																	<option value="8">8</option>
																	<option value="9">9</option>
																	<option value="10">10</option>
																	<option value="11">11</option>
																	<option value="12">12</option>
																</select>
															</div>
														</div>
													</div>
												</div>
												
												<div class="form-group col-md-12 no-padding">
													<div class="row">
														<div class="col-md-3 col-sm-6 col-xs-12">
															<label>Travel Start Date</label>
															<div class="input-group datepicker" id="datepicker">
																<input type='text' class="form-control" name="tour_start_date" required/>
																<span class="input-group-addon add-on">
																	<img src="<?php echo base_url(); ?>assets/images/clander.png" alt="clander" width="18" height="19"/>
																</span>
															</div>
														</div>
														<div class="col-md-3 col-sm-2 col-xs-4 booking_rooms select-options">
															<label>Pickup Time</label>
															<select class="form-control" name="tour_pickup_time" required>
																<option value="12:00:00 am">12:00 am</option>
                                                                               <option value="12:30:00 am">12:30 am</option>
                                                                               <option value="01:00:00 am">1:00 am</option>
                                                                               <option value="01:30:00 am">1:30 am</option>
                                                                               <option value="02:00:00 am">2:00 am</option>
                                                                               <option value="02:30:00 am">2:30 am</option>
                                                                               <option value="03:00:00 am">3:00 am</option>
                                                                               <option value="03:30:00 am">3:30 am</option>
                                                                               <option value="04:00:00 am">4:00 am</option>
                                                                               <option value="04:30:00 am">4:30 am</option>
                                                                               <option value="05:00:00 am">5:00 am</option>
                                                                               <option value="05:30:00 am">5:30 am</option>
                                                                               <option value="06:00:00 am">6:00 am</option>
                                                                               <option value="06:30:00 am">6:30 am</option>
                                                                               <option value="07:00:00 am">7:00 am</option>
                                                                               <option value="07:30:00 am">7:30 am</option>
                                                                               <option value="08:00:00 am">8:00 am</option>
                                                                               <option value="08:30:00 am">8:30 am</option>
                                                                               <option value="09:00:00 am" selected="selected">9:00 am</option>
                                                                               <option value="09:30:00 am">9:30 am</option>
                                                                               <option value="10:00:00 am">10:00 am</option>
                                                                               <option value="10:30:00 am">10:30 am</option>
                                                                               <option value="11:00:00 am">11:00 am</option>
                                                                               <option value="11:30:00 am">11:30 am</option>
                                                                               <option value="12:00:00 pm">12:00 pm</option>
                                                                               <option value="12:30:00 pm">12:30 pm</option>
                                                                               <option value="01:00:00 pm">1:00 pm</option>
                                                                               <option value="01:30:00 pm">1:30 pm</option>
                                                                               <option value="02:00:00 pm">2:00 pm</option>
                                                                               <option value="02:30:00 pm">2:30 pm</option>
                                                                               <option value="03:00:00 pm">3:00 pm</option>
                                                                               <option value="03:30:00 pm">3:30 pm</option>
                                                                               <option value="04:00:00 pm">4:00 pm</option>
                                                                               <option value="04:30:00 pm">4:30 pm</option>
                                                                               <option value="05:00:00 pm">5:00 pm</option>
                                                                               <option value="05:30:00 pm">5:30 pm</option>
                                                                               <option value="06:00:00 pm">6:00 pm</option>
                                                                               <option value="06:30:00 pm">6:30 pm</option>
                                                                               <option value="07:00:00 pm">7:00 pm</option>
                                                                               <option value="07:30:00 pm">7:30 pm</option>
                                                                               <option value="08:00:00 pm">8:00 pm</option>
                                                                               <option value="08:30:00 pm">8:30 pm</option>
                                                                               <option value="09:00:00 pm">9:00 pm</option>
                                                                               <option value="09:30:00 pm">9:30 pm</option>
                                                                               <option value="10:00:00 pm">10:00 pm</option>
                                                                               <option value="10:30:00 pm">10:30 pm</option>
                                                                               <option value="11:00:00 pm">11:00 pm</option>
                                                                               <option value="11:30:00 pm">11:30 pm</option>
															</select>
														</div>
														<div class="col-md-6 col-sm-5 col-xs-4 select-options">
															<label>TOUR PACKAGES FROM BANGALORE</label>
															<select class="form-control" name="tour_package" required>
															    <option value="">Select package</option>
															    <option value="Bangalore Sightseeing">Bangalore Sightseeing</option>
                                                                <option value="Nandi Hills">Nandi Hills</option>
                                                                <option value="Mysore - Srirangapatna">Mysore - Srirangapatna</option>
																<option value="Kolar - Antharagange - Bangaru Tirupati">Kolar - Antharagange - Bangaru Tirupati</option>
																<option value="Vellore">Vellore</option>
																<option value="Shivanasamudra - Talakadu - Somanathapura">Shivanasamudra - Talakadu - Somanathapura</option>
																<option value="Shravanabelagola - Belur - Halebid">Shravanabelagola - Belur - Halebid</option>
																<option value="Hogenakkal Falls">Hogenakkal Falls</option>
																<option value="Puttaparthi">Puttaparthi</option>
																<option value="Ghati Subramanya - Lepakshi">Ghati Subramanya - Lepakshi</option>
																<option value="Big Banyan Tree - Savandutga">Big Banyan Tree - Savandutga</option>
																<option value="Horsley Hills">Horsley Hills</option>
																<option value="Other">Other</option>
															</select>
														</div>
														
													</div>
												</div>
												<div class="form-group col-md-12 no-padding">
													<label>OTHER INFORMATION</label>
													<div class="row">
														<div class="col-md-3 col-sm-2 col-xs-4">
															
															<input class="form-control" required placeholder="Name" name="tour_name" type="text">
														</div>
														<div class="col-md-3 col-sm-5 col-xs-4">
															<input class="form-control" required placeholder="Mobile" name="tour_mobile" type="text">
														</div>
														<div class="col-md-3 col-sm-5 col-xs-4">
															<input class="form-control" required placeholder="Email ID" name="tour_email" type="text">
														</div>
														<div class="col-md-3 col-sm-5 col-xs-4 select-options">
															<select class="form-control" name="tour_car" required>
															   <option value="">Select Car</option>
															   <option value="Tata Indica">Tata Indica</option>
															   <option value="Sedan">Sedan</option>
															   <option value="Toyota Innova">Toyota Innova</option>
															   <option value="Tempo Traveller Non Ac">Tempo Traveller Non Ac</option>
															   <option value="Tempo Traveller Ac">Tempo Traveller Ac</option>
															   <option value="Mini Bus">Mini Bus 21+1</option>
															</select>
														</div>
													</div>
												</div>
												<div class="form-group col-md-12 no-padding">
													<input type="submit" name="Submit" value="Book Now" class="booknowbtn">
												</div>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div><!-- Booking Form /- -->
			</div>
		</div>
		<div class="container-fluid no-padding popular-destination2-section">
				<div class="container">
					<div class="section-header" style="margin-top: 50px;">
						<h3>popular Destination</h3>
						<span>TOUR PACKAGES FROM BANGALORE</span>
					</div>
				</div>
				
				<div class="container-fluid no-padding popular-destination2-block">
					<div class="lSSlideOuter"><div class="lSSlideWrapper usingCss" style="transition-duration: 20000ms; transition-timing-function: ease;">
					    <ul id="popular-destination2-carousel" class="lightSlider lSSlide" style="width: 15156px; height: 454px; padding-bottom: 0%; transform: translate3d(-7578px, 0px, 0px);">
						<li data-thumb="<?php echo base_url(); ?>assets/images/blr.jpg" class="lslide" style="width: 1263px; margin-right: 0px;">
							<div class="container">
								<div class="row">
									<div class="col-md-5 col-sm-12 no-padding">
										<div class="popular_des2_content-block">
											<h3>Bangalore Sightseeing</h3>
											<p><b>Inclusions:</b> Travel in private selected cab, Driver allowance (6.00 AM to 10.00 PM), Parking and tolls, Fuel.</br><b>Exclusions:</b> Entry Tickets at sightseeing, Food, Guide.</br><b>Booking:</b> 10% booking advance</br><b>Pickup & Drop:</b> Office to office</p>
											<ul>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic1.png" alt="popular-destination2-ic1" width="24" height="24">4 People</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic2.png" alt="popular-destination2-ic2" width="24" height="24">Rs 500/Person</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic3.png" alt="popular-destination2-ic3" width="28" height="27">Kms Limit: 80</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic4.png" alt="popular-destination2-ic4" width="28" height="28">Days: 1 Day</li>
											</ul>
											
										</div>
									</div>
									<div class="col-md-7 col-sm-12 no-padding">
										<div class="popular_des2_content-img">
											<img src="<?php echo base_url(); ?>assets/images/blr.jpg" alt="popular-destination2_thumb_main-1" width="672" height="454">
										</div>
									</div>
								</div>	
							</div>
						</li>
						<li data-thumb="<?php echo base_url(); ?>assets/images/nandi.jpg" class="lslide" style="width: 1263px; margin-right: 0px;">
							<div class="container">
								<div class="row">
									<div class="col-md-5 col-sm-12 no-padding">
										<div class="popular_des2_content-block">
											<h3>Nandi Hills</h3>
										<p><b>Inclusions:</b> Travel in private selected cab, Driver allowance (6.00 AM to 10.00 PM), Parking and tolls, Fuel.</br><b>Exclusions:</b> Entry Tickets at sightseeing, Food, Guide.</br><b>Booking:</b> 10% booking advance</br><b>Pickup & Drop:</b> Office to office</p><ul>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic1.png" alt="popular-destination2-ic1" width="24" height="24">4 People</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic2.png" alt="popular-destination2-ic2" width="24" height="24">Rs 625/Person</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic3.png" alt="popular-destination2-ic3" width="28" height="27">Kms Limit: 160</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic4.png" alt="popular-destination2-ic4" width="28" height="28">Days: 1 Day</li>
											</ul>
											
										</div>
									</div>
									<div class="col-md-7 col-sm-12 no-padding">
										<div class="popular_des2_content-img">
											<img src="<?php echo base_url(); ?>assets/images/nandi.jpg" alt="popular-destination2_thumb_main-1" width="672" height="454">
										</div>
									</div>
								</div>	
							</div>
						</li>
						<li data-thumb="<?php echo base_url(); ?>assets/images/mysore.jpg" class="lslide" style="width: 1263px; margin-right: 0px;">
							<div class="container">
								<div class="row">
									<div class="col-md-5 col-sm-12 no-padding">
										<div class="popular_des2_content-block">
											<h3>Mysore - Srirangapatna</h3>
											<p><b>Inclusions:</b> Travel in private selected cab, Driver allowance (6.00 AM to 10.00 PM), Parking and tolls, Fuel.</br><b>Exclusions:</b> Entry Tickets at sightseeing, Food, Guide.</br><b>Booking:</b> 10% booking advance</br><b>Pickup & Drop:</b> Office to office</p><ul>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic1.png" alt="popular-destination2-ic1" width="24" height="24">4 People</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic2.png" alt="popular-destination2-ic2" width="24" height="24">Rs 1,100/Person</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic3.png" alt="popular-destination2-ic3" width="28" height="27">Kms Limit: 380</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic4.png" alt="popular-destination2-ic4" width="28" height="28">Days: 1 Day</li>
											</ul>
											
										</div>
									</div>
									<div class="col-md-7 col-sm-12 no-padding">
										<div class="popular_des2_content-img">
											<img src="<?php echo base_url(); ?>assets/images/mysore.jpg" alt="popular-destination2_thumb_main-1" width="672" height="454">
										</div>
									</div>
								</div>	
							</div>
						</li>
						<li data-thumb="<?php echo base_url(); ?>assets/images/bangaru.jpg" class="lslide" style="width: 1263px; margin-right: 0px;">
							<div class="container">
								<div class="row">
									<div class="col-md-5 col-sm-12 no-padding">
										<div class="popular_des2_content-block">
											<h3>Antharagange - Bangaru Tirupati</h3>
										<p><b>Inclusions:</b> Travel in private selected cab, Driver allowance (6.00 AM to 10.00 PM), Parking and tolls, Fuel.</br><b>Exclusions:</b> Entry Tickets at sightseeing, Food, Guide.</br><b>Booking:</b> 10% booking advance</br><b>Pickup & Drop:</b> Office to office</p>	<ul>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic1.png" alt="popular-destination2-ic1" width="24" height="24">4 People</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic2.png" alt="popular-destination2-ic2" width="24" height="24">Rs 800/Person</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic3.png" alt="popular-destination2-ic3" width="28" height="27">Kms Limit: 300</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic4.png" alt="popular-destination2-ic4" width="28" height="28">Days: 1 Day</li>
											</ul>
											
										</div>
									</div>
									<div class="col-md-7 col-sm-12 no-padding">
										<div class="popular_des2_content-img">
											<img src="<?php echo base_url(); ?>assets/images/bangaru.jpg" alt="popular-destination2_thumb_main-1" width="672" height="454">
										</div>
									</div>
								</div>	
							</div>
						</li>
						<li data-thumb="<?php echo base_url(); ?>assets/images/vellore.jpg" class="lslide" style="width: 1263px; margin-right: 0px;">
							<div class="container">
								<div class="row">
									<div class="col-md-5 col-sm-12 no-padding">
										<div class="popular_des2_content-block">
											<h3>Vellore</h3>
											<p><b>Inclusions:</b> Travel in private selected cab, Driver allowance (6.00 AM to 10.00 PM), Parking and tolls, Fuel.</br><b>Exclusions:</b> Entry Tickets at sightseeing, Food, Guide.</br><b>Booking:</b> 10% booking advance</br><b>Pickup & Drop:</b> Office to office</p>	<ul>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic1.png" alt="popular-destination2-ic1" width="24" height="24">4 People</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic2.png" alt="popular-destination2-ic2" width="24" height="24">Rs 1,500/Person</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic3.png" alt="popular-destination2-ic3" width="28" height="27">Kms Limit: 500</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic4.png" alt="popular-destination2-ic4" width="28" height="28">Days: 1 Day</li>
											</ul>
											
										</div>
									</div>
									<div class="col-md-7 col-sm-12 no-padding">
										<div class="popular_des2_content-img">
											<img src="<?php echo base_url(); ?>assets/images/vellore.jpg" alt="popular-destination2_thumb_main-1" width="672" height="454">
										</div>
									</div>
								</div>	
							</div>
						</li>
						<li data-thumb="<?php echo base_url(); ?>assets/images/shivanasamudra.jpg" class="lslide" style="width: 1263px; margin-right: 0px;">
							<div class="container">
								<div class="row">
									<div class="col-md-5 col-sm-12 no-padding">
										<div class="popular_des2_content-block">
											<h3>Shivanasamudra - Talakadu - Somanathapura</h3>
											<p><b>Inclusions:</b> Travel in private selected cab, Driver allowance (6.00 AM to 10.00 PM), Parking and tolls, Fuel.</br><b>Exclusions:</b> Entry Tickets at sightseeing, Food, Guide.</br><b>Booking:</b> 10% booking advance</br><b>Pickup & Drop:</b> Office to office</p>	<ul>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic1.png" alt="popular-destination2-ic1" width="24" height="24">4 People</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic2.png" alt="popular-destination2-ic2" width="24" height="24">Rs 1,000/Person</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic3.png" alt="popular-destination2-ic3" width="28" height="27">Kms Limit: 350</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic4.png" alt="popular-destination2-ic4" width="28" height="28">Days: 1 Day</li>
											</ul>
											
										</div>
									</div>
									<div class="col-md-7 col-sm-12 no-padding">
										<div class="popular_des2_content-img">
											<img src="<?php echo base_url(); ?>assets/images/shivanasamudra.jpg" alt="popular-destination2_thumb_main-1" width="672" height="454">
										</div>
									</div>
								</div>	
							</div>
						</li>
						<li data-thumb="<?php echo base_url(); ?>assets/images/beluru.jpg" class="lslide active" style="width: 1263px; margin-right: 0px;">
							<div class="container">
								<div class="row">
									<div class="col-md-5 col-sm-12 no-padding">
										<div class="popular_des2_content-block">
											<h3>Shravanabelagola - Belur - Halebid</h3>
										<p><b>Inclusions:</b> Travel in private selected cab, Driver allowance (6.00 AM to 10.00 PM), Parking and tolls, Fuel.</br><b>Exclusions:</b> Entry Tickets at sightseeing, Food, Guide.</br><b>Booking:</b> 10% booking advance</br><b>Pickup & Drop:</b> Office to office</p>	<ul>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic1.png" alt="popular-destination2-ic1" width="24" height="24">4 People</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic2.png" alt="popular-destination2-ic2" width="24" height="24">Rs 1,750/Person</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic3.png" alt="popular-destination2-ic3" width="28" height="27">Kms Limit: 600</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic4.png" alt="popular-destination2-ic4" width="28" height="28">Days: 1 Day</li>
											</ul>
										
										</div>
									</div>
									<div class="col-md-7 col-sm-12 no-padding">
										<div class="popular_des2_content-img">
											<img src="<?php echo base_url(); ?>assets/images/beluru.jpg" alt="popular-destination2_thumb_main-1" width="672" height="454">
										</div>
									</div>
								</div>	
							</div>
						</li>
						<li data-thumb="<?php echo base_url(); ?>assets/images/hogenikkal.jpg" class="lslide" style="width: 1263px; margin-right: 0px;">
							<div class="container">
								<div class="row">
									<div class="col-md-5 col-sm-12 no-padding">
										<div class="popular_des2_content-block">
											<h3>Hogenakkal Falls</h3>
											<p><b>Inclusions:</b> Travel in private selected cab, Driver allowance (6.00 AM to 10.00 PM), Parking and tolls, Fuel.</br><b>Exclusions:</b> Entry Tickets at sightseeing, Food, Guide.</br><b>Booking:</b> 10% booking advance</br><b>Pickup & Drop:</b> Office to office</p>	<ul>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic1.png" alt="popular-destination2-ic1" width="24" height="24">4 People</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic2.png" alt="popular-destination2-ic2" width="24" height="24">Rs 1,125/Person</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic3.png" alt="popular-destination2-ic3" width="28" height="27">Kms Limit: 350</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic4.png" alt="popular-destination2-ic4" width="28" height="28">Days: 1 Day</li>
											</ul>
											
										</div>
									</div>
									<div class="col-md-7 col-sm-12 no-padding">
										<div class="popular_des2_content-img">
											<img src="<?php echo base_url(); ?>assets/images/hogenikkal.jpg" alt="popular-destination2_thumb_main-1" width="672" height="454">
										</div>
									</div>
								</div>	
							</div>
						</li>
						<li data-thumb="<?php echo base_url(); ?>assets/images/Puttaparthi.jpg" class="lslide" style="width: 1263px; margin-right: 0px;">
							<div class="container">
								<div class="row">
									<div class="col-md-5 col-sm-12 no-padding">
										<div class="popular_des2_content-block">
											<h3>Puttaparthi</h3>
    										<p><b>Inclusions:</b> Travel in private selected cab, Driver allowance (6.00 AM to 10.00 PM), Parking and tolls, Fuel.</br><b>Exclusions:</b> Entry Tickets at sightseeing, Food, Guide.</br><b>Booking:</b> 10% booking advance</br><b>Pickup & Drop:</b> Office to office</p>	<ul>
    												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic1.png" alt="popular-destination2-ic1" width="24" height="24">4 People</li>
    												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic2.png" alt="popular-destination2-ic2" width="24" height="24">Rs 1,500/Person</li>
    												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic3.png" alt="popular-destination2-ic3" width="28" height="27">Kms Limit: 500</li>
    												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic4.png" alt="popular-destination2-ic4" width="28" height="28">Days: 1 Day</li>
    											</ul>
											
										</div>
									</div>
									<div class="col-md-7 col-sm-12 no-padding">
										<div class="popular_des2_content-img">
											<img src="<?php echo base_url(); ?>assets/images/Puttaparthi.jpg" alt="popular-destination2_thumb_main-1" width="672" height="454">
										</div>
									</div>
								</div>	
							</div>
						</li>
						<li data-thumb="<?php echo base_url(); ?>assets/images/ghati.jpg" class="lslide" style="width: 1263px; margin-right: 0px;">
							<div class="container">
								<div class="row">
									<div class="col-md-5 col-sm-12 no-padding">
										<div class="popular_des2_content-block">
											<h3>Ghati Subramanya - Lepakshi</h3>
											<p><b>Inclusions:</b> Travel in private selected cab, Driver allowance (6.00 AM to 10.00 PM), Parking and tolls, Fuel.</br><b>Exclusions:</b> Entry Tickets at sightseeing, Food, Guide.</br><b>Booking:</b> 10% booking advance</br><b>Pickup & Drop:</b> Office to office</p>	<ul>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic1.png" alt="popular-destination2-ic1" width="24" height="24">4 People</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic2.png" alt="popular-destination2-ic2" width="24" height="24">Rs 1,500/Person</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic3.png" alt="popular-destination2-ic3" width="28" height="27">Kms Limit: 500</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic4.png" alt="popular-destination2-ic4" width="28" height="28">Days: 1 Day</li>
											</ul>
											
										</div>
									</div>
									<div class="col-md-7 col-sm-12 no-padding">
										<div class="popular_des2_content-img">
											<img src="images/ghati.jpg" alt="popular-destination2_thumb_main-1" width="672" height="454">
										</div>
									</div>
								</div>	
							</div>
						</li>
						<li data-thumb="<?php echo base_url(); ?>assets/images/big_banyan.jpg" class="lslide" style="width: 1263px; margin-right: 0px;">
							<div class="container">
								<div class="row">
									<div class="col-md-5 col-sm-12 no-padding">
										<div class="popular_des2_content-block">
											<h3>Big Banyan Tree - Savandutga</h3>
											<p><b>Inclusions:</b> Travel in private selected cab, Driver allowance (6.00 AM to 10.00 PM), Parking and tolls, Fuel.</br><b>Exclusions:</b> Entry Tickets at sightseeing, Food, Guide.</br><b>Booking:</b> 10% booking advance</br><b>Pickup & Drop:</b> Office to office</p>	<ul>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic1.png" alt="popular-destination2-ic1" width="24" height="24">4 People</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic2.png" alt="popular-destination2-ic2" width="24" height="24">Rs 1,500/Person</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic3.png" alt="popular-destination2-ic3" width="28" height="27">Kms Limit: 500</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic4.png" alt="popular-destination2-ic4" width="28" height="28">Days: 1 Day</li>
											</ul>
											
										</div>
									</div>
									<div class="col-md-7 col-sm-12 no-padding">
										<div class="popular_des2_content-img">
											<img src="<?php echo base_url(); ?>assets/images/big_banyan.jpg" alt="popular-destination2_thumb_main-1" width="672" height="454">
										</div>
									</div>
								</div>	
							</div>
						</li>
						<li data-thumb="<?php echo base_url(); ?>assets/images/horsely.jpg" class="lslide" style="width: 1263px; margin-right: 0px;">
							<div class="container">
								<div class="row">
									<div class="col-md-5 col-sm-12 no-padding">
										<div class="popular_des2_content-block">
											<h3>Horsley Hills</h3>
										<p><b>Inclusions:</b> Travel in private selected cab, Driver allowance (6.00 AM to 10.00 PM), Parking and tolls, Fuel.</br><b>Exclusions:</b> Entry Tickets at sightseeing, Food, Guide.</br><b>Booking:</b> 10% booking advance</br><b>Pickup & Drop:</b> Office to office</p>		<ul>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic1.png" alt="popular-destination2-ic1" width="24" height="24">4 People</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic2.png" alt="popular-destination2-ic2" width="24" height="24">Rs 1,500/Person</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic3.png" alt="popular-destination2-ic3" width="28" height="27">Kms Limit: 500</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic4.png" alt="popular-destination2-ic4" width="28" height="28">Days: 1 Day</li>
											</ul>
										
										</div>
									</div>
									<div class="col-md-7 col-sm-12 no-padding">
										<div class="popular_des2_content-img">
											<img src="<?php echo base_url(); ?>assets/images/horsely.jpg" alt="popular-destination2_thumb_main-1" width="672" height="454">
										</div>
									</div>
								</div>	
							</div>
						</li>
					</ul></div></div>
				</div>
		</div>
		<div class="section-padding"></div>
	</main>

<?php include("common/footer.php"); ?>
</body>
</html>