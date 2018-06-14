<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('common/header');
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
									<li role="presentation" class="active"><a href="#search1" aria-controls="search1" role="tab" data-toggle="tab"><img src="<?php echo base_url(); ?>assets/images/photoslider2-ic3.png" alt="photoslider2-ic3" width="22" height="23">Outstation Round Trip</a></li>
								</ul>
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active fade in" id="search1">
									<?php echo form_open('outstation_round_trip/search', 'class="booking-form" id="booking-form-round"'); ?>
										<div class="alert alert-danger" style="<?php if(validation_errors()){ echo 'display: block;'; }else{ echo 'display: none;'; } ?>"><?php if(validation_errors()){echo validation_errors();} ?></div>
                                        <div class="alert alert-success" style="<?php if(isset($message)){ echo 'display: block;'; }else{ echo 'display: none;'; } ?>"><?php if(isset($message)){ echo $message;} ?></div>
                                        <div class="alert alert-success" style="<?php if($this->session->flashdata('message')){ echo 'display: block;'; }else{ echo 'display: none;'; } ?>"><?php if($this->session->flashdata('message')){ echo $this->session->flashdata('message'); } ?></div>
										  
											<div class="row">
												<div class="form-group col-md-12 no-padding">
													<div class="row">
														<div class="form-group col-md-6 booking_location select-options">
															<label>Pick up Location</label>
															<select class="form-control" name="round_pickup_location" required>
															   <option value="">Select the Pickup Location</option>
															   <option value="Bangalore">Bangalore/Bengaluru</option>
															</select>
														</div>
														<div class="form-group col-md-6 booking_location">
															<label>Where do you want to go?</label>
															<input class="form-control google_location" required="" id="round_drop_location" placeholder="Location" name="round_drop_location" type="text">
															<input type="hidden" name="round_total_distance" id="round_total_distance" />
														</div>
													</div>
												</div>
												
												<div class="form-group col-md-12 no-padding">
													<div class="row">
														<div class="col-md-3 col-sm-6 col-xs-12">
															<label>Travel Start Date</label>
															<div class="input-group datepicker" id="datepicker">
																<input type='text' class="form-control add-on" name="round_start_date" required/>
																<span class="input-group-addon add-on">
																	<img src="<?php echo base_url(); ?>assets/images/clander.png" alt="clander" width="18" height="19"/>
																</span>
															</div>
														</div>
														<div class="col-md-3 col-sm-2 col-xs-4 booking_rooms select-options">
															<label>Pickup Time</label>
															<select class="form-control" name="round_pickup_time" required>
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
														<div class="col-md-3 col-sm-6 col-xs-12">
															<label>Return Date</label>
															<div class="input-group datepicker" id="datepicker2">
																<input type='text' class="form-control add-on" name="round_return_date" required/>
																<span class="input-group-addon add-on">
																	<img src="<?php echo base_url(); ?>assets/images/clander.png" alt="clander" width="18" height="19"/>
																</span>
															</div>
														</div>
														<div class="col-md-3 col-sm-2 col-xs-4 booking_rooms select-options">
															<label>Return Time</label>
															<select class="form-control" name="round_return_time" required>
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
													</div>
												</div>
												<div class="form-group col-md-12 no-padding">
													<input type="submit" value="Search" class="booknowbtn">
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
						<h3>popular Cars</h3>
						<span>The cars we drive say a lot about us</span>
					</div>
				</div>
				
				<div class="container-fluid no-padding popular-destination2-block">
					<div class="lSSlideOuter"><div class="lSSlideWrapper usingCss" style="transition-duration: 20000ms; transition-timing-function: ease;"><ul id="popular-destination2-carousel" class="lightSlider lSSlide" style="width: 15156px; height: 454px; padding-bottom: 0%; transform: translate3d(-7578px, 0px, 0px);">
						<li data-thumb="<?php echo base_url(); ?>assets/images/tata.jpg" class="lslide" style="width: 1263px; margin-right: 0px;">
							<div class="container">
								<div class="row">
									<div class="col-md-5 col-sm-12 no-padding">
										<div class="popular_des2_content-block">
											<h3>Tata Indica Non Ac</h3>
											<p>Distance and time will start at customer pickup point and end at the drop point.</br>Driver Charges will be extra if the driver on duty before 6 am or after 10 pm.</br>Day means Calender day.</br>State entry tax, Parking, and tolls will be charged extra.<br><b>Booking:</b> 10% booking advance</br><b>Pickup & Drop:</b> Office to office</p>
											<ul>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic1.png" alt="popular-destination2-ic1" width="24" height="24">Seating: 4+Driver</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic2.png" alt="popular-destination2-ic2" width="24" height="24">Rate: Rs 7.50/km</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic3.png" alt="popular-destination2-ic3" width="28" height="27">Driver Allowance: Rs.300</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic4.png" alt="popular-destination2-ic4" width="28" height="28">Min Km Per Day: 300Kms</li>
											</ul>
											
										</div>
									</div>
									<div class="col-md-6 col-sm-12 no-padding">
										<div class="popular_des2_content-img">
											<img src="<?php echo base_url(); ?>assets/images/tata.jpg" alt="popular-destination2_thumb_main-1" width="672" height="454">
										</div>
									</div>
								</div>	
							</div>
						</li>
						<li data-thumb="<?php echo base_url(); ?>assets/images/tata_ac.jpg" class="lslide" style="width: 1263px; margin-right: 0px;">
							<div class="container">
								<div class="row">
									<div class="col-md-6 col-sm-12 no-padding">
										<div class="popular_des2_content-block">
											<h3>Tata Indica Ac</h3>
											<p>Distance and time will start at customer pickup point and end at the drop point.</br>Driver Charges will be extra if the driver on duty before 6 am or after 10 pm.</br>Day means Calender day.</br>State entry tax, Parking, and tolls will be charged extra.<br><b>Booking:</b> 10% booking advance</br><b>Pickup & Drop:</b> Office to office</p>
											<ul>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic1.png" alt="popular-destination2-ic1" width="24" height="24">Seating: 4+Driver</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic2.png" alt="popular-destination2-ic2" width="24" height="24">Rate: Rs 8.50/km</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic3.png" alt="popular-destination2-ic3" width="28" height="27">Driver Allowance: Rs.300</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic4.png" alt="popular-destination2-ic4" width="28" height="28">Min Km Per Day: 300Kms</li>
											</ul>
											
										</div>
									</div>
									<div class="col-md-6 col-sm-12 no-padding">
										<div class="popular_des2_content-img">
											<img src="<?php echo base_url(); ?>assets/images/tata_ac.jpg" alt="popular-destination2_thumb_main-1" width="672" height="454">
										</div>
									</div>
								</div>	
							</div>
						</li>
						<li data-thumb="<?php echo base_url(); ?>assets/images/etios.jpg" class="lslide" style="width: 1263px; margin-right: 0px;">
							<div class="container">
								<div class="row">
									<div class="col-md-6 col-sm-12 no-padding">
										<div class="popular_des2_content-block">
											<h3>Toyota Etios</h3>
											<p>Distance and time will start at customer pickup point and end at the drop point.</br>Driver Charges will be extra if the driver on duty before 6 am or after 10 pm.</br>Day means Calender day.</br>State entry tax, Parking, and tolls will be charged extra.<br><b>Booking:</b> 10% booking advance</br><b>Pickup & Drop:</b> Office to office</p>
											<ul>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic1.png" alt="popular-destination2-ic1" width="24" height="24">Seating: 4+Driver</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic2.png" alt="popular-destination2-ic2" width="24" height="24">Rate: Rs 9.50/km</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic3.png" alt="popular-destination2-ic3" width="28" height="27">Driver Allowance: Rs.300</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic4.png" alt="popular-destination2-ic4" width="28" height="28">Min Km Per Day: 300Kms</li>
											</ul>
											
										</div>
									</div>
									<div class="col-md-6 col-sm-12 no-padding">
										<div class="popular_des2_content-img">
											<img src="<?php echo base_url(); ?>assets/images/etios.jpg" alt="popular-destination2_thumb_main-1" width="672" height="454">
										</div>
									</div>
								</div>	
							</div>
						</li>
						<li data-thumb="<?php echo base_url(); ?>assets/images/dzire.jpg" class="lslide" style="width: 1263px; margin-right: 0px;">
							<div class="container">
								<div class="row">
									<div class="col-md-6 col-sm-12 no-padding">
										<div class="popular_des2_content-block">
											<h3>Swift Dzire</h3>
											<p>Distance and time will start at customer pickup point and end at the drop point.</br>Driver Charges will be extra if the driver on duty before 6 am or after 10 pm.</br>Day means Calender day.</br>State entry tax, Parking, and tolls will be charged extra.<br><b>Booking:</b> 10% booking advance</br><b>Pickup & Drop:</b> Office to office</p>
											<ul>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic1.png" alt="popular-destination2-ic1" width="24" height="24">Seating: 4+Driver</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic2.png" alt="popular-destination2-ic2" width="24" height="24">Rate: Rs 9.50/km</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic3.png" alt="popular-destination2-ic3" width="28" height="27">Driver Allowance: Rs.300</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic4.png" alt="popular-destination2-ic4" width="28" height="28">Min Km Per Day: 300Kms</li>
											</ul>
											
										</div>
									</div>
									<div class="col-md-6 col-sm-12 no-padding">
										<div class="popular_des2_content-img">
											<img src="<?php echo base_url(); ?>assets/images/dzire.jpg" alt="popular-destination2_thumb_main-1" width="672" height="454">
										</div>
									</div>
								</div>	
							</div>
						</li>
						<li data-thumb="<?php echo base_url(); ?>assets/images/xcent.jpg" class="lslide" style="width: 1263px; margin-right: 0px;">
							<div class="container">
								<div class="row">
									<div class="col-md-6 col-sm-12 no-padding">
										<div class="popular_des2_content-block">
											<h3>Xcent Ac</h3>
											<p>Distance and time will start at customer pickup point and end at the drop point.</br>Driver Charges will be extra if the driver on duty before 6 am or after 10 pm.</br>Day means Calender day.</br>State entry tax, Parking, and tolls will be charged extra.<br><b>Booking:</b> 10% booking advance</br><b>Pickup & Drop:</b> Office to office</p>
											<ul>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic1.png" alt="popular-destination2-ic1" width="24" height="24">Seating: 4+Driver</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic2.png" alt="popular-destination2-ic2" width="24" height="24">Rate: Rs 10.00/km</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic3.png" alt="popular-destination2-ic3" width="28" height="27">Driver Allowance: Rs.300</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic4.png" alt="popular-destination2-ic4" width="28" height="28">Min Km Per Day: 300Kms</li>
											</ul>
											
										</div>
									</div>
									<div class="col-md-6 col-sm-12 no-padding">
										<div class="popular_des2_content-img">
											<img src="<?php echo base_url(); ?>assets/images/xcent.jpg" alt="popular-destination2_thumb_main-1" width="672" height="454">
										</div>
									</div>
								</div>	
							</div>
						</li>
						<li data-thumb="<?php echo base_url(); ?>assets/images/innovaac.jpg" class="lslide" style="width: 1263px; margin-right: 0px;">
							<div class="container">
								<div class="row">
									<div class="col-md-6 col-sm-12 no-padding">
										<div class="popular_des2_content-block">
											<h3>Toyota Innova Ac</h3>
											<p>Distance and time will start at customer pickup point and end at the drop point.</br>Driver Charges will be extra if the driver on duty before 6 am or after 10 pm.</br>Day means Calender day.</br>State entry tax, Parking, and tolls will be charged extra.<br><b>Booking:</b> 10% booking advance</br><b>Pickup & Drop:</b> Office to office</p>
											<ul>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic1.png" alt="popular-destination2-ic1" width="24" height="24">Seating: 7+Driver</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic2.png" alt="popular-destination2-ic2" width="24" height="24">Rate: Rs 12.00/km</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic3.png" alt="popular-destination2-ic3" width="28" height="27">Driver Allowance: Rs.300</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic4.png" alt="popular-destination2-ic4" width="28" height="28">Min Km Per Day: 300kms</li>
											</ul>
											
										</div>
									</div>
									<div class="col-md-6 col-sm-12 no-padding">
										<div class="popular_des2_content-img">
											<img src="<?php echo base_url(); ?>assets/images/innovaac.jpg" alt="popular-destination2_thumb_main-1" width="672" height="454">
										</div>
									</div>
								</div>	
							</div>
						</li>
						<li data-thumb="<?php echo base_url(); ?>assets/images/crysta.jpg" class="lslide active" style="width: 1263px; margin-right: 0px;">
							<div class="container">
								<div class="row">
									<div class="col-md-6 col-sm-12 no-padding">
										<div class="popular_des2_content-block">
											<h3>Toyota Innova Crysta Ac</h3>
											<p>Distance and time will start at customer pickup point and end at the drop point.</br>Driver Charges will be extra if the driver on duty before 6 am or after 10 pm.</br>Day means Calender day.</br>State entry tax, Parking, and tolls will be charged extra.<br><b>Booking:</b> 10% booking advance</br><b>Pickup & Drop:</b> Office to office</p>
											<ul>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic1.png" alt="popular-destination2-ic1" width="24" height="24">Seating: 7+Driver</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic2.png" alt="popular-destination2-ic2" width="24" height="24">Rate: Rs 13.00/km</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic3.png" alt="popular-destination2-ic3" width="28" height="27">Driver Allowance: Rs.300</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic4.png" alt="popular-destination2-ic4" width="28" height="28">Min Km Per Day: 300kms</li>
											</ul>
											
										</div>
									</div>
									<div class="col-md-6 col-sm-12 no-padding">
										<div class="popular_des2_content-img">
											<img src="<?php echo base_url(); ?>assets/images/crysta.jpg" alt="popular-destination2_thumb_main-1" width="672" height="454">
										</div>
									</div>
								</div>	
							</div>
						</li>
						<li data-thumb="<?php echo base_url(); ?>assets/images/TemopoTraveller.jpg" class="lslide" style="width: 1263px; margin-right: 0px;">
							<div class="container">
								<div class="row">
									<div class="col-md-6 col-sm-12 no-padding">
										<div class="popular_des2_content-block">
											<h3>Tempo Traveller Non Ac</h3>
											<p>Distance and time will start at customer pickup point and end at the drop point.</br>Driver Charges will be extra if the driver on duty before 6 am or after 10 pm.</br>Day means Calender day.</br>State entry tax, Parking, and tolls will be charged extra.<br><b>Booking:</b> 10% booking advance</br><b>Pickup & Drop:</b> Office to office</p>
											<ul>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic1.png" alt="popular-destination2-ic1" width="24" height="24">Seating: 12+Driver</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic2.png" alt="popular-destination2-ic2" width="24" height="24">Rate: Rs 13.00/km</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic3.png" alt="popular-destination2-ic3" width="28" height="27">Driver Allowance: Rs.300</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic4.png" alt="popular-destination2-ic4" width="28" height="28">Min Km Per Day: 300kms</li>
											</ul>
											
										</div>
									</div>
									<div class="col-md-6 col-sm-12 no-padding">
										<div class="popular_des2_content-img">
											<img src="<?php echo base_url(); ?>assets/images/TemopoTraveller.jpg" alt="popular-destination2_thumb_main-1" width="672" height="454">
										</div>
									</div>
								</div>	
							</div>
						</li>
						<li data-thumb="<?php echo base_url(); ?>assets/images/tempo_traveler_ac.jpg" class="lslide" style="width: 1263px; margin-right: 0px;">
							<div class="container">
								<div class="row">
									<div class="col-md-6 col-sm-12 no-padding">
										<div class="popular_des2_content-block">
											<h3>Tempo Traveller Ac</h3>
											<p>Distance and time will start at customer pickup point and end at the drop point.</br>Driver Charges will be extra if the driver on duty before 6 am or after 10 pm.</br>Day means Calender day.</br>State entry tax, Parking, and tolls will be charged extra.<br><b>Booking:</b> 10% booking advance</br><b>Pickup & Drop:</b> Office to office</p>
											<ul>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic1.png" alt="popular-destination2-ic1" width="24" height="24">Seating: 12+Driver</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic2.png" alt="popular-destination2-ic2" width="24" height="24">Rate: Rs 15.00/km</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic3.png" alt="popular-destination2-ic3" width="28" height="27">Driver Allowance: Rs.300</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic4.png" alt="popular-destination2-ic4" width="28" height="28">Min Km Per Day: 300kms</li>
											</ul>
											
										</div>
									</div>
									<div class="col-md-6 col-sm-12 no-padding">
										<div class="popular_des2_content-img">
											<img src="<?php echo base_url(); ?>assets/images/tempo_traveler_ac.jpg" alt="popular-destination2_thumb_main-1" width="672" height="454">
										</div>
									</div>
								</div>	
							</div>
						</li>
						<li data-thumb="<?php echo base_url(); ?>assets/images/mini_bus.jpg" class="lslide" style="width: 1263px; margin-right: 0px;">
							<div class="container">
								<div class="row">
									<div class="col-md-6 col-sm-12 no-padding">
										<div class="popular_des2_content-block" style="padding: 40px 30px 10px;">
											<h3>Mini Bus (21 + 1) Non-AC</h3>
											<p>Distance and time will start at customer pickup point and end at the drop point.</br>Driver Charges will be extra if the driver on duty before 6 am or after 10 pm.</br>Day means Calender day.</br>State entry tax, Parking, and tolls will be charged extra.<br><b>Booking:</b> 10% booking advance</br><b>Pickup & Drop:</b> Office to office</p>
											<ul>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic1.png" alt="popular-destination2-ic1" width="24" height="24">Seating: 21+Driver</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic2.png" alt="popular-destination2-ic2" width="24" height="24">Rate: Rs 20.00/km</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic3.png" alt="popular-destination2-ic3" width="28" height="27">Driver Allowance: Rs.450</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic4.png" alt="popular-destination2-ic4" width="28" height="28">Min Km Per Day: 300kms</li>
											</ul>
											
										</div>
									</div>
									<div class="col-md-6 col-sm-12 no-padding">
										<div class="popular_des2_content-img">
											<img src="<?php echo base_url(); ?>assets/images/mini_bus.jpg" alt="popular-destination2_thumb_main-1" width="672" height="454">
										</div>
									</div>
								</div>	
							</div>
						</li>
						<li data-thumb="<?php echo base_url(); ?>assets/images/mini_bus.jpg" class="lslide" style="width: 1263px; margin-right: 0px;">
							<div class="container">
								<div class="row">
									<div class="col-md-6 col-sm-12 no-padding">
										<div class="popular_des2_content-block" style="padding: 40px 30px 10px;">
											<h3>Mini Bus (21 + 1) AC</h3>
											<p>Distance and time will start at customer pickup point and end at the drop point.</br>Driver Charges will be extra if the driver on duty before 6 am or after 10 pm.</br>Day means Calender day.</br>State entry tax, Parking, and tolls will be charged extra.<br><b>Booking:</b> 10% booking advance</br><b>Pickup & Drop:</b> Office to office</p>
											<ul>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic1.png" alt="popular-destination2-ic1" width="24" height="24">Seating: 21+Driver</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic2.png" alt="popular-destination2-ic2" width="24" height="24">Rate: Rs 25.00/km</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic3.png" alt="popular-destination2-ic3" width="28" height="27">Driver Allowance: Rs.450</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic4.png" alt="popular-destination2-ic4" width="28" height="28">Min Km Per Day: 300kms</li>
											</ul>
											
										</div>
									</div>
									<div class="col-md-6 col-sm-12 no-padding">
										<div class="popular_des2_content-img">
											<img src="<?php echo base_url(); ?>assets/images/mini_bus.jpg" alt="popular-destination2_thumb_main-1" width="672" height="454">
										</div>
									</div>
								</div>	
							</div>
						</li>
						
						
						<li data-thumb="<?php echo base_url(); ?>assets/images/30-seater-rental.jpg" class="lslide" style="width: 1263px; margin-right: 0px;">
							<div class="container">
								<div class="row">
									<div class="col-md-6 col-sm-12 no-padding">
										<div class="popular_des2_content-block" style="padding: 40px 30px 10px;">
											<h3>Mini Bus (30 + 1) Non-AC</h3>
											<p>Distance and time will start at customer pickup point and end at the drop point.</br>Driver Charges will be extra if the driver on duty before 6 am or after 10 pm.</br>Day means Calender day.</br>State entry tax, Parking, and tolls will be charged extra.<br><b>Booking:</b> 10% booking advance</br><b>Pickup & Drop:</b> Office to office</p>
											<ul>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic1.png" alt="popular-destination2-ic1" width="24" height="24">Seating: 30+Driver</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic2.png" alt="popular-destination2-ic2" width="24" height="24">Rate: Rs 24.00/km</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic3.png" alt="popular-destination2-ic3" width="28" height="27">Driver Allowance: Rs.500</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic4.png" alt="popular-destination2-ic4" width="28" height="28">Min Km Per Day: 300kms</li>
											</ul>
											
										</div>
									</div>
									<div class="col-md-6 col-sm-12 no-padding">
										<div class="popular_des2_content-img">
											<img src="<?php echo base_url(); ?>assets/images/30-seater-rental.jpg" alt="popular-destination2_thumb_main-1" width="672" height="454">
										</div>
									</div>
								</div>	
							</div>
						</li>
						<li data-thumb="<?php echo base_url(); ?>assets/images/30-seater-rental.jpg" class="lslide" style="width: 1263px; margin-right: 0px;">
							<div class="container">
								<div class="row">
									<div class="col-md-6 col-sm-12 no-padding">
										<div class="popular_des2_content-block" style="padding: 40px 30px 10px;">
											<h3>Mini Bus (30 + 1) AC</h3>
											<p>Distance and time will start at customer pickup point and end at the drop point.</br>Driver Charges will be extra if the driver on duty before 6 am or after 10 pm.</br>Day means Calender day.</br>State entry tax, Parking, and tolls will be charged extra.<br><b>Booking:</b> 10% booking advance</br><b>Pickup & Drop:</b> Office to office</p>
											<ul>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic1.png" alt="popular-destination2-ic1" width="24" height="24">Seating: 30+Driver</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic2.png" alt="popular-destination2-ic2" width="24" height="24">Rate: Rs 28.00/km</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic3.png" alt="popular-destination2-ic3" width="28" height="27">Driver Allowance: Rs.500</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic4.png" alt="popular-destination2-ic4" width="28" height="28">Min Km Per Day: 300kms</li>
											</ul>
											
										</div>
									</div>
									<div class="col-md-6 col-sm-12 no-padding">
										<div class="popular_des2_content-img">
											<img src="<?php echo base_url(); ?>assets/images/30-seater-rental.jpg" alt="popular-destination2_thumb_main-1" width="672" height="454">
										</div>
									</div>
								</div>	
							</div>
						</li>
						
						<li data-thumb="<?php echo base_url(); ?>assets/images/audi.jpg" class="lslide" style="width: 1263px; margin-right: 0px;">
							<div class="container">
								<div class="row">
									<div class="col-md-6 col-sm-12 no-padding">
										<div class="popular_des2_content-block">
											<h3>Audi</h3>
											<p>Distance and time will start at customer pickup point and end at the drop point.</br>Driver Charges will be extra if the driver on duty before 6 am or after 10 pm.</br>Day means Calender day.</br>State entry tax, Parking, and tolls will be charged extra.<br><b>Booking:</b> 10% booking advance</br><b>Pickup & Drop:</b> Office to office</p>
											<ul>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic1.png" alt="popular-destination2-ic1" width="24" height="24">Seating: 4+Driver</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic2.png" alt="popular-destination2-ic2" width="24" height="24">Rate: Rs 85.00/km</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic3.png" alt="popular-destination2-ic3" width="28" height="27">Driver Allowance: Rs.300</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic4.png" alt="popular-destination2-ic4" width="28" height="28">Min Km Per Day: 300Kms</li>
											</ul>
											
										</div>
									</div>
									<div class="col-md-6 col-sm-12 no-padding">
										<div class="popular_des2_content-img">
											<img src="<?php echo base_url(); ?>assets/images/audi.jpg" alt="popular-destination2_thumb_main-1" width="672" height="454">
										</div>
									</div>
								</div>	
							</div>
						</li>
						<li data-thumb="<?php echo base_url(); ?>assets/images/benz.jpg" class="lslide" style="width: 1263px; margin-right: 0px;">
							<div class="container">
								<div class="row">
									<div class="col-md-6 col-sm-12 no-padding">
										<div class="popular_des2_content-block">
											<h3>Mercedes-Benz</h3>
											<p>Distance and time will start at customer pickup point and end at the drop point.</br>Driver Charges will be extra if the driver on duty before 6 am or after 10 pm.</br>Day means Calender day.</br>State entry tax, Parking, and tolls will be charged extra.<br><b>Booking:</b> 10% booking advance</br><b>Pickup & Drop:</b> Office to office</p>
											<ul>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic1.png" alt="popular-destination2-ic1" width="24" height="24">Seating: 4+Driver</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic2.png" alt="popular-destination2-ic2" width="24" height="24">Rate: Rs 75.00/km</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic3.png" alt="popular-destination2-ic3" width="28" height="27">Driver Allowance: Rs.300</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic4.png" alt="popular-destination2-ic4" width="28" height="28">Min Km Per Day: 300Kms</li>
											</ul>
											
										</div>
									</div>
									<div class="col-md-6 col-sm-12 no-padding">
										<div class="popular_des2_content-img">
											<img src="<?php echo base_url(); ?>assets/images/benz.jpg" alt="popular-destination2_thumb_main-1" width="672" height="454">
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
<?php $this->load->view('common/footer'); ?>
<script>
      function initAutocomplete() {
        var options = {
            types: ['(cities)'],
            componentRestrictions: {country: "in"}
        };
        var options_bangalore = {
            types: ['(regions)'],
            componentRestrictions: {country: "in"}
        };
        
        var round_drop_location = document.getElementById('round_drop_location');
        var round_drop_location_searchBox = new google.maps.places.Autocomplete(round_drop_location, options);
        //var searchBox = new google.maps.places.SearchBox(round_drop_location,options);
        
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer();
        var distance;
        var markers = [];
        round_drop_location_searchBox.addListener('place_changed', function() {
          var places = round_drop_location_searchBox.getPlace();
          if (places.length == 0) {
            return;
          }
          
          directionsService.route({
                  origin: "Sri Thirumala Tours & Travels, shop number 85/1, 19th Main,17th cross 1 th sector, HSR Layout, Bengaluru, Karnataka 560102",
                  destination: document.getElementById('round_drop_location').value,
                  travelMode: 'DRIVING'
                }, function(response, status) {
                  if (status === 'OK') {
                    distance = response.routes[0].legs[0].distance.value;
                    document.getElementById('round_total_distance').value = Math.ceil(distance / 1000,1);
                    console.log("distance in KM:"+Math.ceil(distance / 1000,1));
                  }else{
                      distance = 1;
                        document.getElementById('round_total_distance').value = Math.ceil(distance / 1000,1);
                        console.log("distance in KM:"+Math.ceil(distance / 1000,1));
                  }
                });
                
          markers = [];
          var bounds = new google.maps.LatLngBounds();
        });
        
        var input = document.getElementById('one_drop_location');
        var searchBox = new google.maps.places.Autocomplete(input, options);
        var markers = [];
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
          });
        });
        
        var input = document.getElementById('eight_drop_location');
        var searchBox = new google.maps.places.Autocomplete(input, options_bangalore);
        var markers = [];
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
          });
        });
        
        var input = document.getElementById('four_drop_location');
        var searchBox = new google.maps.places.Autocomplete(input, options_bangalore);
        var markers = [];
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
          });
        });
        
        var input = document.getElementById('airport_pickup_location');
        var searchBox = new google.maps.places.Autocomplete(input, options_bangalore);
        var markers = [];
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
          });
        });
        
        var input = document.getElementById('tour_pickup_location');
        var searchBox = new google.maps.places.Autocomplete(input, options_bangalore);
        var markers = [];
        searchBox.addListener('places_changed', function() {
          var places = searchBox.getPlaces();

          if (places.length == 0) {
            return;
          }
          markers.forEach(function(marker) {
            marker.setMap(null);
          });
          markers = [];
          var bounds = new google.maps.LatLngBounds();
          places.forEach(function(place) {
            if (!place.geometry) {
              console.log("Returned place contains no geometry");
              return;
            }
          });
        });
      }
      
      function calculateAndDisplayRoute(directionsService, directionsDisplay) {
        directionsService.route({
          origin: "Sri Thirumala Tours & Travels, shop number 85/1, 19th Main,17th cross 1 th sector, HSR Layout, Bengaluru, Karnataka 560102",
          destination: document.getElementById('round_drop_location').value,
          travelMode: 'DRIVING'
        }, function(response, status) {
          if (status === 'OK') {
             return response.routes[0].legs[0].distance.value;
          }else{
              return 0;
          }
        });
      }
	  </script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAja4Yvq3RB3GV0gp3vvHPKk18u3MJ7e8&libraries=geometry,places&callback=initAutocomplete" async defer></script>
</body>
</html>