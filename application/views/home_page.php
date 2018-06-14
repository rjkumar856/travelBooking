<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('common/header');
?>
<main class="site-main page-spacing">
		<!-- PhotoSlider2 -->
		<div id="myCarousel" class="carousel slide" data-ride="carousel">
                    <!-- Indicators -->
                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
					  <div class="item active">
                        <img src="<?php echo base_url(); ?>assets/images/homeslide1.jpg" alt="New york" style="width:100%;">
                      </div>
					  <div class="item">
                        <img src="<?php echo base_url(); ?>assets/images/homeslide2.jpg" alt="New york" style="width:100%;">
                      </div>
                      <div class="item">
                        <img src="<?php echo base_url(); ?>assets/images/homeslide3.jpg" alt="Chicago" style="width:100%;">
                      </div>
                      <div class="item">
                        <img src="<?php echo base_url(); ?>assets/images/homeslide4.jpg" alt="New york" style="width:100%;">
                      </div>
                    </div>
                    <!-- Left and right controls -->
                    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                      <span class="glyphicon glyphicon-chevron-left"></span>
                      <span class="sr-only">Previous</span>
                    </a>
                    <a class="right carousel-control" href="#myCarousel" data-slide="next">
                      <span class="glyphicon glyphicon-chevron-right"></span>
                      <span class="sr-only">Next</span>
                    </a>
                
                  </div>
		<div class="container-fluid no-padding popular-destination2-section" style="background: url(<?php echo base_url(); ?>assets/images/2.jpg) fixed; padding-bottom: 50px;">
			<div class="container">
				<!-- Booking Form -->
				<div class="booking-form-section">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12 bookingform-details">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active"><a href="#search1" aria-controls="search1" role="tab" data-toggle="tab"><img src="<?php echo base_url(); ?>assets/images/photoslider2-ic3.png" alt="photoslider2-ic3" width="22" height="23"/>Outstation Trips</a></li>
									<li role="presentation"><a href="#search2" aria-controls="search2" role="tab" data-toggle="tab"><img src="<?php echo base_url(); ?>assets/images/photoslider2-ic3.png" alt="photoslider2-ic1" width="24" height="23"/>Local Taxi</a></li>
									<li role="presentation"><a href="#search3" aria-controls="search3" role="tab" data-toggle="tab"><img src="<?php echo base_url(); ?>assets/images/photoslider2-ic3.png" alt="photoslider2-ic3" width="22" height="23"/>Airport Taxi</a></li>
									<li role="presentation"><a href="#search4" aria-controls="search4" role="tab" data-toggle="tab"><img src="<?php echo base_url(); ?>assets/images/photoslider2-ic3.png" alt="photoslider2-ic2" width="18" height="23"/>Local Tour Packages</a></li>
								</ul>
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active fade in" id="search1">
										<ul class="nav nav-tabs" role="tablist">
											<li role="presentation" class="active"><a href="#search21" aria-controls="search21" role="tab" data-toggle="tab">Outstation Round Trip</a></li>
											<li role="presentation"><a href="#search22" aria-controls="search22" role="tab" data-toggle="tab">Outstation One Way Trip</a></li>
										</ul>
										<div class="tab-content">
										<div role="tabpanel" class="tab-pane active fade in" id="search21">
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
										<div role="tabpanel" class="tab-pane fade" id="search22">
										<?php echo form_open('outstation-one-way-trip/search', 'class="booking-form" id="booking-form-one-way"'); ?>
										<div class="alert alert-danger" style="<?php if(validation_errors()){ echo 'display: block;'; }else{ echo 'display: none;'; } ?>"><?php if(validation_errors()){echo validation_errors();} ?></div>
                                        <div class="alert alert-success" style="<?php if(isset($message)){ echo 'display: block;'; }else{ echo 'display: none;'; } ?>"><?php if(isset($message)){ echo $message;} ?></div>
                                        <div class="alert alert-success" style="<?php if($this->session->flashdata('message')){ echo 'display: block;'; }else{ echo 'display: none;'; } ?>"><?php if($this->session->flashdata('message')){ echo $this->session->flashdata('message'); } ?></div>
											<div class="row">
												<div class="form-group col-md-12 no-padding">
													<div class="row">
														<div class="form-group col-md-6 booking_location">
															<label>Pick up Location</label>
															<select class="form-control" name="one_pickup_location" required>
															   <option value="">Select the Pickup Location</option>
															   <option value="Bangalore">Bangalore/Bengaluru</option>
															</select>
														</div>
														<div class="form-group col-md-6 booking_location">
															<label>Where do you want to go?</label>
															<input class="form-control " required="" id="one_drop_location" placeholder="Location" name="one_drop_location" type="text">
															<input type="hidden" name="one_total_distance" id="one_total_distance" />
														</div>
													</div>
												</div>
												
												<div class="form-group col-md-12 no-padding">
													<div class="row">
														<div class="col-md-3 col-sm-6 col-xs-12">
															<label>Travel Start Date</label>
															<div class="input-group datepicker" id="datepicker">
																<input type='text' class="form-control add-on" name="one_start_date" required/>
																<span class="input-group-addon add-on">
																	<img src="<?php echo base_url(); ?>assets/images/clander.png" alt="clander" width="18" height="19"/>
																</span>
															</div>
														</div>
														<div class="col-md-3 col-sm-2 col-xs-4 booking_rooms ">
															<label>Pickup Time</label>
															<select class="form-control" name="one_pickup_time" required>
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
													<input type="submit" value="Book Now" class="booknowbtn">
												</div>
											</div>
										</form>
									</div>
									</div>
									</div>
									<div role="tabpanel" class="tab-pane fade" id="search2">
										<ul class="nav nav-tabs" role="tablist">
											<li role="presentation" class="active"><a href="#search31" aria-controls="search31" role="tab" data-toggle="tab">Local Taxi(4 Hrs x 40 Kms)</a></li>
											<li role="presentation"><a href="#search32" aria-controls="search32" role="tab" data-toggle="tab">Local Taxi(8 Hrs x 80 Kms)</a></li>
										</ul>
										<div class="tab-content">
										<div role="tabpanel" class="tab-pane active fade in" id="search31">
										<?php echo form_open('rental-cars-local-taxi-four-submit', 'class="booking-form" id="booking-form-four"'); ?>
										<div class="alert alert-danger" style="<?php if(validation_errors()){ echo 'display: block;'; }else{ echo 'display: none;'; } ?>"><?php if(validation_errors()){echo validation_errors();} ?></div>
                                        <div class="alert alert-success" style="<?php if(isset($message)){ echo 'display: block;'; }else{ echo 'display: none;'; } ?>"><?php if(isset($message)){ echo $message;} ?></div>
                                        <div class="alert alert-success" style="<?php if($this->session->flashdata('message')){ echo 'display: block;'; }else{ echo 'display: none;'; } ?>"><?php if($this->session->flashdata('message')){ echo $this->session->flashdata('message'); } ?></div>
											<div class="row">
												<div class="form-group col-md-12 no-padding">
													<div class="row">
														<div class="form-group col-md-6 booking_location select-options">
															<label>Pickup Location</label>
															<select class="form-control" name="four_pickup_location" required>
															   <option value="">Select the Pickup Location</option>
															   <option value="Bangalore">Bangalore/Bengaluru</option>
															</select>
														</div>
														<div class="form-group col-md-6 booking_location">
															<label>Where do you want to go?</label>
															<input class="form-control google_location" required placeholder="Location" id="four_drop_location" type="text" name="four_drop_location">
														</div>
													</div>
												</div>
												<div class="form-group col-md-12 no-padding">
													<div class="row">
														<div class="col-md-3 col-sm-6 col-xs-12">
															<label>Pickup Date</label>
															<div class="input-group datepicker" id="datepicker">
																<input type='text' class="form-control add-on" name="four_start_date" required/>
																<span class="input-group-addon add-on">
																	<img src="<?php echo base_url(); ?>assets/images/clander.png" alt="clander" width="18" height="19"/>
																</span>
															</div>
														</div>
														<div class="col-md-3 col-sm-2 col-xs-4 booking_rooms select-options">
															<label>Pickup Time</label>
															<select class="form-control" name="four_pickup_time" required>
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
														<div class="col-md-6 col-sm-6 col-xs-6 booking_rooms select-options">
															<label>Packages</label>
															<select class="form-control" name="four_package" required>
																<option value="select">Select Package</option>
																<option value="4 Hrs x 40 Kms">4 Hrs x 40 Kms</option>
															</select>
														</div>
													</div>
												</div>
												<div class="form-group col-md-12 no-padding">
													<input type="submit" value="Book Now" class="booknowbtn">
												</div>
											</div>
										</form>
										</div>
										
										<div role="tabpanel" class="tab-pane fade" id="search32">
										<?php echo form_open('rental-cars-local-taxi-eight-submit', 'class="booking-form" id="booking-form-eight"'); ?>
										<div class="alert alert-danger" style="<?php if(validation_errors()){ echo 'display: block;'; }else{ echo 'display: none;'; } ?>"><?php if(validation_errors()){echo validation_errors();} ?></div>
                                        <div class="alert alert-success" style="<?php if(isset($message)){ echo 'display: block;'; }else{ echo 'display: none;'; } ?>"><?php if(isset($message)){ echo $message;} ?></div>
                                        <div class="alert alert-success" style="<?php if($this->session->flashdata('message')){ echo 'display: block;'; }else{ echo 'display: none;'; } ?>"><?php if($this->session->flashdata('message')){ echo $this->session->flashdata('message'); } ?></div>
											<div class="row">
												<div class="form-group col-md-12 no-padding">
													<div class="row">
														<div class="form-group col-md-6 booking_location select-options">
															<label>Pickup Location</label>
															<select class="form-control" name="eight_pickup_location" required>
															   <option value="">Select the Pickup Location</option>
															   <option value="Bangalore">Bangalore/Bengaluru</option>
															</select>
														</div>
														<div class="form-group col-md-6 booking_location">
															<label>Where do you want to go?</label>
															<input class="form-control google_location" required placeholder="Location" id="eight_drop_location" type="text" name="eight_drop_location">
														</div>
													</div>
												</div>
												
												<div class="form-group col-md-12 no-padding">
													<div class="row">
														<div class="col-md-3 col-sm-6 col-xs-12">
															<label>Pickup Date</label>
															<div class="input-group datepicker" id="datepicker">
																<input type='text' class="form-control add-on" name="eight_start_date" required/>
																<span class="input-group-addon add-on">
																	<img src="<?php echo base_url(); ?>assets/images/clander.png" alt="clander" width="18" height="19"/>
																</span>
															</div>
														</div>
														<div class="col-md-3 col-sm-2 col-xs-4 booking_rooms select-options">
															<label>Pickup Time</label>
															<select class="form-control" name="eight_pickup_time" required>
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
														
														<div class="col-md-6 col-sm-6 col-xs-6 booking_rooms select-options">
															<label>Packages</label>
															<select class="form-control" name="eight_package" required>
																<option value="select">Select Package</option>
																
																<option value="8 Hrs x 80 Kms">8 Hrs x 80 Kms</option>
															</select>
														</div>
													</div>
												</div>
												<div class="form-group col-md-12 no-padding">
													<input type="submit" value="Book Now" class="booknowbtn">
												</div>
											</div>
										</form>
									</div>
									</div>
									</div>
									
									<div role="tabpanel" class="tab-pane fade" id="search3">
										<?php echo form_open('rental-cars-airport-taxi-submit', 'class="booking-form" id="booking-form-airport"'); ?>
										<div class="alert alert-danger" style="<?php if(validation_errors()){ echo 'display: block;'; }else{ echo 'display: none;'; } ?>"><?php if(validation_errors()){echo validation_errors();} ?></div>
                                        <div class="alert alert-success" style="<?php if(isset($message)){ echo 'display: block;'; }else{ echo 'display: none;'; } ?>"><?php if(isset($message)){ echo $message;} ?></div>
                                        <div class="alert alert-success" style="<?php if($this->session->flashdata('message')){ echo 'display: block;'; }else{ echo 'display: none;'; } ?>"><?php if($this->session->flashdata('message')){ echo $this->session->flashdata('message'); } ?></div>
											<div class="row">
												<div class="form-group col-md-12 no-padding">
													<div class="row">
														<div class="form-group col-md-6 booking_location">
															<label>Pickup Location</label>
															<input class="form-control" required placeholder="Location" type="text" id="airport_pickup_location" name="airport_pickup_location">
														</div>
														<div class="form-group col-md-6 booking_location select_options">
															<label>Where do you want to go?</label>
																<select class="form-control" name="airport_drop_location" required>
																	<option value="City to Airport">City to Airport</option>
																	   <option value="Airport to City">Airport to City</option>
																	   <option value="2 Way">2 Way</option>
																</select>
														</div>
													</div>
												</div>
												
												<div class="form-group col-md-12 no-padding">
													<div class="row">
														<div class="col-md-3 col-sm-6 col-xs-12">
															<label>Pickup Date</label>
															<div class="input-group datepicker" id="datepicker">
																<input type='text' class="form-control add-on" name="airport_start_date" required />
																<span class="input-group-addon add-on">
																	<img src="<?php echo base_url(); ?>assets/images/clander.png" alt="clander" width="18" height="19"/>
																</span>
															</div>
														</div>
														<div class="col-md-3 col-sm-2 col-xs-4 booking_rooms select-options">
															<label>Pickup Time</label>
															<select class="form-control" name="airport_pickup_time" required>
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
														<div class="col-md-6 col-sm-6 col-xs-12">
															
														</div>
													</div>
												</div>
												<div class="form-group col-md-12 no-padding">
													<input type="submit" value="Book Now" class="booknowbtn">
												</div>
											</div>
										</form>
									</div>
									<div role="tabpanel" class="tab-pane fade" id="search4">
										<?php echo form_open('local-tour-package-submit', 'class="booking-form" id="booking-form-local-tour-package"'); ?>
										<div class="alert alert-danger" style="<?php if(validation_errors()){ echo 'display: block;'; }else{ echo 'display: none;'; } ?>"><?php if(validation_errors()){echo validation_errors();} ?></div>
                                        <div class="alert alert-success" style="<?php if(isset($message)){ echo 'display: block;'; }else{ echo 'display: none;'; } ?>"><?php if(isset($message)){ echo $message;} ?></div>
                                        <div class="alert alert-success" style="<?php if($this->session->flashdata('message')){ echo 'display: block;'; }else{ echo 'display: none;'; } ?>"><?php if($this->session->flashdata('message')){ echo $this->session->flashdata('message'); } ?></div>
											<div class="row">
												<div class="form-group col-md-12 no-padding">
													<div class="row">
														<div class="form-group col-md-6 booking_location">
															<label>Pickup Location</label>
															<input class="form-control google_location" id="tour_pickup_location" required placeholder="Location" name="tour_pickup_location" type="text">
														</div>
														<div class="form-group col-md-6 booking_location select_options">
															<label>Total Members</label>
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
												
												<div class="form-group col-md-12 no-padding">
													<div class="row">
														<div class="col-md-3 col-sm-6 col-xs-12">
															<label>Travel Start Date</label>
															<div class="input-group datepicker" id="datepicker">
																<input type='text' class="form-control add-on" name="tour_start_date" required/>
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
		<!-- Popular Destination 2 -->
		<div class="container-fluid no-padding popular-destination2-section">
				<div class="container">
					<div class="section-header" style="margin-top: 50px;">
						<h3>Local Tour Packages</h3>
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
		
		<!-- Best Destination 2 -->
		<div class="container-fluid no-padding bestdestination2">
			<div class="section-padding"></div>
				<div class="container">
					<div class="section-header">
						<h3>"Let's find some beautiful place to get lost"</h3>
					</div>
					<div class="best-destination-block">
						<div class="col-md-3 col-sm-3 col-xs-6 best-destination-box">
							<div class="best-destination-thumb">
								<img src="<?php echo base_url(); ?>assets/images/bestdestination-ic1.png" alt="bestdestination-ic1" width="28" height="27"/>
							</div>
							<h3>Search For Destination</h3>
							<span>Over 20 Destinations</span>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 best-destination-box">
							<div class="best-destination-thumb">
								<img src="<?php echo base_url(); ?>assets/images/bestdestination-ic2.png" alt="bestdestination-ic2" width="28" height="27"/>
							</div>
							<h3>Book Your Tour</h3>
							<span>Book Online</span>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 best-destination-box">
							<div class="best-destination-thumb">
								<img src="<?php echo base_url(); ?>assets/images/bestdestination-ic3.png" alt="bestdestination-ic3" width="28" height="27"/>
							</div>
							<h3>Pay For Your Tour</h3>
							<span>Payment Is Secure</span>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 best-destination-box">
							<div class="best-destination-thumb">
								<img src="<?php echo base_url(); ?>assets/images/bestdestination-ic4.png" alt="bestdestination-ic4" width="28" height="27"/>
							</div>
							<h3>Ready For Tour</h3>
							<span>Enjoy The Trip</span>
						</div>
					</div>
					<div class="view-destination">
						<a href="local-details" title="Book a tour">Book a tour</a>
						<a href="local-details" title="view all destination">view all destination</a>
					</div>
				</div>
			<div class="section-padding"></div>
		</div><!-- Best Destination 2 /- -->
		
		<!-- Popular Destination -->
		<div class="container popular-destination popular-destination_v2">
			<div class="section-padding"></div>
			<div class="section-header">
				<h3>Best Holiday Destination</h3>
				<span>Our meticulously handpicked places for your holiday</span>
			</div>
			<div class="popular-destination-block">
				<div class="row">
					<div class="col-md-6 popular-destination-left">
						<div class="popular-destinatonbox">
							<img src="<?php echo base_url(); ?>assets/images/ooty.jpg" alt="populardestinaion1-wide" width="580" height="530"/>
							<div class="popular-destination-info">
								<h3>MYSORE-OOTY</h3>
								<span>Harbor</span>
								
							</div>
						</div>
					</div>
					<div class="col-md-6 popular-destination-right">
						<div class="col-md-6 col-sm-6 col-xs-6 no-padding">
							<div class="popular-destinatonbox">
								<img src="<?php echo base_url(); ?>assets/images/pondi_beach.jpg" alt="populardestinaion2" width="285" height="260"/>
								<div class="popular-destination-info">
									<span>PONDICHERY</span>
									<h3>Mahe Beach</h3>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6 no-padding">
							<div class="popular-destinatonbox">
								<img src="<?php echo base_url(); ?>assets/images/candolim-beach.jpg" alt="populardestinaion3" width="285" height="260"/>
								<div class="popular-destination-info">
									<span>Goa</span>
									<h3>Candolim Beach</h3>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6 no-padding">
							<div class="popular-destinatonbox">
								<img src="<?php echo base_url(); ?>assets/images/thekady.jpg" alt="populardestinaion4" width="285" height="260"/>
								<div class="popular-destination-info">
									<span>MUNNAR</span>
									<h3>Thekkady</h3>
								</div>
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6 no-padding">
							<div class="popular-destinatonbox">
								<img src="<?php echo base_url(); ?>assets/images/coorg.jpg" alt="populardestinaion5" width="285" height="260"/>
								<div class="popular-destination-info">
									<span>COORG</span>
									<h3>Falls</h3>
								</div>
							</div>
						</div>
					</div>
				</div>			
			</div>	
			<div class="section-padding"></div>
		</div><!-- Popular Destination /- -->
		
		<!-- Slider Section -->
		<div class="container-fluid no-padding slider-section">
			<div class="carousel slide" data-ride="carousel">
				<div class="carousel-inner" role="listbox">
					<div class="item active">
						<img src="<?php echo base_url(); ?>assets/images/amrith.jpg" alt="photoslider1" width="1920" height="540"/>
						<div class="container">
							<div class="row">
								<div class="col-md-7 col-sm-9">
									<div class="slider-content">
										<h3>Tirupati</h3>
										<p>Balaji temple, Tirupati is the most important pilgrimage place and holiest Tirumala of Andra Pradesh. The vital aspect of Golden Temple is everybody irrespective of their religion, caste, race, and creed are allowed to pray or seek religious fulfilment and spiritual solace. A trip full of bliss and peace that will enrich your soul.</p>
										<span>Rs 1,800</span>
										<a href="pilgrimage-details" title="Book a Tour">Book a Tour</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="item">
						<img src="<?php echo base_url(); ?>assets/images/shiridi.jpg" alt="photoslider1" width="1920" height="540"/>
						<div class="container">
							<div class="row">
								<div class="col-md-7">
									<div class="slider-content">
										<h3>Shirdi</h3>
										<p>A perfect religious tour can act as a reliever of the boredom of the daily life. Shirdi Temple is the temple of the famous Indian Spiritual master Shirdi Sai Baba. We are offering extensive tour packages for the visit of Shirdi. You will have a hassle free comfortable trip to the pilgrimage to Shirdi Sai Baba Shrine.</p>
										<span>Rs 4,999</span>
										<a href="pilgrimage-details" title="Book a Tour">Book a Tour</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div><!-- Slider Section /- -->	
		
		<!-- Testimonial2 Section -->
		<div class="container-fluid no-padding testimonial2-section">
			<div class="testimonial2-shape"></div>
			<div class="section-padding"></div>
			<div class="container">
				<div class="section-header">
					<h3>What our client's say?</h3>
				</div>
				<div class="row">
					<div class="col-md-8 col-sm-9 col-xs-12">
						<div id="slider" class="flexslider testimonial2-content">
							<ul class="slides">
								<li>
									<p>We are happy to say that we have received excellent services from Sri Thirumala Tours and Travels. We will definitely be going to recommend you to our friends.<p>
								</li>
								<li>
									<p>We are happy to say that we have received excellent services from Sri Thirumala Tours and Travels. We will definitely be going to recommend you to our friends.<p>
								</li>
								<li>
									<p>We are happy to say that we have received excellent services from Sri Thirumala Tours and Travels. We will definitely be going to recommend you to our friends.<p>
								</li>
								<li>
									<p>We are happy to say that we have received excellent services from Sri Thirumala Tours and Travels. We will definitely be going to recommend you to our friends.<p>
								</li>
							</ul>
						</div>
						<div id="carousel" class="flexslider testimonial2-thumbs">
							<ul class="slides">
								<li>
									<div class="testimonial-author">
										<h3>Mayank</h3>
										<span>Happy Customer</span>
										<div class="testimonial-thumbbox">
											<img src="<?php echo base_url(); ?>assets/images/boy.jpg" alt="testimonial2.1" width="70" height="70"/>
										</div>
									</div>
								</li>
								<li>
									<div class="testimonial-author">
										<h3>Raj Kumar</h3>
										<span>Happy Customer</span>
										<div class="testimonial-thumbbox">
											<img src="<?php echo base_url(); ?>assets/images/boy.jpg" alt="testimonial2.2" width="70" height="70"/>
										</div>
									</div>
								</li>
								<li>
									<div class="testimonial-author">
										<h3>Navin</h3>
										<span>Happy Customer</span>
										<div class="testimonial-thumbbox">
											<img src="<?php echo base_url(); ?>assets/images/boy.jpg" alt="testimonial2.3" width="70" height="70"/>
										</div>
									</div>
								</li>
								<li>
									<div class="testimonial-author">
										<h3>Suresh</h3>
										<span>Happy Customer</span>
										<div class="testimonial-thumbbox">
											<img src="<?php echo base_url(); ?>assets/images/boy.jpg" alt="testimonial2.1" width="70" height="70"/>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>
					<div class="col-md-4 col-sm-3 col-xs-12">
						<img src="<?php echo base_url(); ?>assets/images/testimonial2-main1.png" alt="testimonial2-main1" width="323" height="504"/>
					</div>
				</div>
			</div>
		</div><!-- Testimonial2 Section /- -->

		<!-- Gallery Section -->
		<div class="container gallery-section">
			<div class="section-padding"></div>
				<div class="section-header">
					<h3>our holiday gallery</h3>
					
				</div>			
				<ul class="portfolio-list">
					<li class="col-md-3 col-sm-4 col-xs-4">
						<div class="content-image-block">
							<a href="destination"><img src="<?php echo base_url(); ?>assets/images/vellore1.jpg" alt="gallery" width="270" height="280"/></a>
							<div class="content-block-icon">
								<a href="<?php echo base_url(); ?>assets/images/vellore1.jpg" class="gallery-popup"><i class="fa fa-search"></i></a>
							</div>
						</div>
					</li>
					<li class="col-md-3 col-sm-4 col-xs-4">
						<div class="content-image-block">
							<a href="destination"><img src="<?php echo base_url(); ?>assets/images/beluru1.jpg" alt="gallery" width="270" height="410"/></a>
							<div class="content-block-icon">
								<a href="<?php echo base_url(); ?>assets/images/beluru1.jpg" class="gallery-popup"><i class="fa fa-search"></i></a>
							</div>
						</div>
					</li>
					<li class="col-md-3 col-sm-4 col-xs-4">
						<div class="content-image-block">
							<a href="destination"><img src="<?php echo base_url(); ?>assets/images/pondi_beach1.jpg" alt="gallery" width="270" height="280"/></a>
							<div class="content-block-icon">
								<a href="<?php echo base_url(); ?>assets/images/pondi_beach1.jpg" class="gallery-popup"><i class="fa fa-search"></i></a>
							</div>
						</div>
					</li>
					<li class="col-md-3 col-sm-4 col-xs-4">
						<div class="content-image-block">
							<a href="destination"><img src="<?php echo base_url(); ?>assets/images/thekady1.jpg" alt="gallery" width="270" height="410"/></a>
							<div class="content-block-icon">
								<a href="<?php echo base_url(); ?>assets/images/thekady1.jpg" class="gallery-popup"><i class="fa fa-search"></i></a>
							</div>
						</div>
					</li>
					<li class="col-md-3 col-sm-4 col-xs-4">
						<div class="content-image-block">
							<a href="destination"><img src="<?php echo base_url(); ?>assets/images/ooty1.jpg" alt="gallery" width="270" height="410"/></a>
							<div class="content-block-icon">
								<a href="<?php echo base_url(); ?>assets/images/ooty1.jpg" class="gallery-popup"><i class="fa fa-search"></i></a>
							</div>
						</div>
					</li>
					<li class="col-md-3 col-sm-4 col-xs-4">
						<div class="content-image-block">
							<a href="destination"><img src="<?php echo base_url(); ?>assets/images/big_banyan1.jpg" alt="gallery" width="270" height="410"/></a>
							<div class="content-block-icon">
								<a href="<?php echo base_url(); ?>assets/images/big_banyan1.jpg" class="gallery-popup"><i class="fa fa-search"></i></a>
							</div>
						</div>
					</li>
					<li class="col-md-3 col-sm-4 col-xs-4">
						<div class="content-image-block">
							<a href="destination"><img src="<?php echo base_url(); ?>assets/images/blr1.jpg" alt="gallery" width="270" height="280"/></a>
							<div class="content-block-icon">
								<a href="<?php echo base_url(); ?>assets/images/blr1.jpg" class="gallery-popup"><i class="fa fa-search"></i></a>
							</div>
						</div>
					</li>
					<li class="col-md-3 col-sm-4 col-xs-4">
						<div class="content-image-block">
							<a href="destination"><img src="<?php echo base_url(); ?>assets/images/mysore1.jpg" alt="gallery" width="270" height="280"/></a>
							<div class="content-block-icon">
								<a href="<?php echo base_url(); ?>assets/images/mysore1.jpg" class="gallery-popup"><i class="fa fa-search"></i></a>
							</div>
						</div>
					</li>
				</ul>
			<div class="section-padding"></div>
		</div><!-- Gallery Section /- -->
		
		<!-- Partner Section -->
		<div class="container-fluid no-padding partner2-section">
			<div class="container">
				<div class="partner2-carousel">
					<div class="partner-box2">
						<a href="#" title="partner"><img src="<?php echo base_url(); ?>assets/images/partner2.1.png" alt="partner" width="96" height="76"/></a>
					</div>
					<div class="partner-box2">
						<a href="#" title="partner"><img src="<?php echo base_url(); ?>assets/images/partner2.2.png" alt="partner" width="96" height="76"/></a>
					</div>
					<div class="partner-box2">
						<a href="#" title="partner"><img src="<?php echo base_url(); ?>assets/images/partner2.3.png" alt="partner" width="96" height="76"/></a>
					</div>
					<div class="partner-box2">
						<a href="#" title="partner"><img src="<?php echo base_url(); ?>assets/images/partner2.4.png" alt="partner" width="96" height="76"/></a>
					</div>
					<div class="partner-box2">
						<a href="#" title="partner"><img src="<?php echo base_url(); ?>assets/images/partner2.5.png" alt="partner" width="96" height="76"/></a>
					</div>
					<div class="partner-box2">
						<a href="#" title="partner"><img src="<?php echo base_url(); ?>assets/images/partner2.6.png" alt="partner" width="96" height="76"/></a>
					</div>
					<div class="partner-box2">
						<a href="#" title="partner"><img src="<?php echo base_url(); ?>assets/images/partner2.7.png" alt="partner" width="96" height="76"/></a>
					</div>
				</div>
			</div>
		</div><!-- Partner Section /- -->
		
		<!-- Latest News -->
		<div class="container">
			<div class="section-padding"></div>
			<div class="section-header">
				<h3>Latest news</h3>
			</div>
			<div class="latestblock-section">
				<div class="row">
					<div class="col-md-4 col-sm-12 col-xs-12">
						<article class="type-post">
							<div class="entry-cover col-sm-6 col-md-12 col-xs-6 no-padding">
								<a href="blogpost" title="Latest News Cover"><img src="<?php echo base_url(); ?>assets/images/blog1.jpg" alt="latestblog4" width="370" height="380"/></a>
							</div>
							<div class="entrycontent-block col-sm-6 col-md-12 col-xs-6">
								<div class="entry-meta">
									<div class="post-by"> By <a href="#" title="Admin"> Admin</a></div>
									<div class="post-date"><a href="#" title="May 10, 2016"> May 10, 2016</a></div>
								</div>
								<div class="entry-title">
									<h3><a href="blogpost" title="That his group would somehow form a family great">Best things to do in a Weekend trip to Goa</a></h3>
								</div>
								<div class="entry-content">
									<p>The paradise for the youth i.e. Goa is loved by all. From the electrifying nightlife of Baga Beach to the glorious sands of Colva Beach, there are a lot of places to visit in Goa. A perfect gateway destination for relaxing.</p>
								</div>
								<a href="blogpost" title="Read More"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
							</div>
						</article>
					</div>
					<div class="col-md-8 col-sm-12 col-xs-12">
						<div class="row">
							<article class="col-md-12 col-sm-12 type-post sm-fluid">
								<div class="row">
									<div class="col-md-6 col-sm-6 col-xs-6">
										<div class="entrycontent-block">
											<div class="entry-meta">
												<div class="post-by"> By <a href="#" title="Admin"> Admin</a></div>
												<div class="post-date"><a href="#" title="May 10, 2016"> May 10, 2016</a></div>
											</div>
											<div class="entry-title">
												<h3><a href="blogpost" title="The ship set ground on shore of this uncharted">Hampi Attractions from the historical perspectives</a></h3>
											</div>
											<div class="entry-content">
												<p>Located in the heart of Karnataka, Hampi is the rich source of monuments, architecture, surreal landscapes, excavations which will lead to the reminiscence of the historical past.</p>
											</div>
											<a href="blogpost" title="Read More"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
										</div>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-6">
										<div class="entry-cover">
											<a href="blogpost" title="Latest News Cover"><img src="<?php echo base_url(); ?>assets/images/blog2.jpg" alt="latestblog5" width="370" height="380"/></a>
										</div>
									</div>
								</div>
							</article>
							<article class="col-md-12 col-sm-12 type-post md-fluid">
								<div class="row">
									<div class="col-md-6 col-sm-6 col-xs-6 no-right-padding">
										<div class="entry-cover">
											<a href="blogpost" title="Latest News Cover"><img src="<?php echo base_url(); ?>assets/images/blog3.jpg" alt="latestblog6" width="385" height="350"/></a>
										</div>
									</div>
									<div class="col-md-6 col-sm-6 col-xs-6 no-padding">
										<div class="entrycontent-block">
											<div class="entry-meta">
												<div class="post-by"> By <a href="#" title="Admin"> Admin</a></div>
												<div class="post-date"><a href="#" title="May 10, 2016"> May 09, 2016</a></div>
											</div>
											<div class="entry-title">
												<h3><a href="blogpost" title="The first mate and his Skipper too will do their very">Get the best out of the temple city of South i.e. Mahabalipuram</a></h3>
											</div>
											<div class="entry-content">
												<p>In the historic city of Mahabalipuram, you will find many temples especially the famous Shore Temples. A perfect holiday destination that helps you indulging the flavour of architecture, art, and literature.</p>
											</div>
											<a href="blogpost" title="Read More"><i class="fa fa-angle-right" aria-hidden="true"></i></a>
										</div>
									</div>
								</div>
							</article>
						</div>
					</div>
				</div>
			</div>		
		</div><!-- Latest News /- -->
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

        
        
        
        var one_drop_location = document.getElementById('one_drop_location');
        var one_drop_location_searchBox = new google.maps.places.Autocomplete(one_drop_location, options);
        var markers = [];
        var directionsService = new google.maps.DirectionsService;
        var directionsDisplay = new google.maps.DirectionsRenderer();
        var distance;
        var markers = [];
        one_drop_location_searchBox.addListener('place_changed', function() {
          var places = one_drop_location_searchBox.getPlace();
          if (places.length == 0) {
            return;
          }
          
          directionsService.route({
                  origin: "Sri Thirumala Tours & Travels, shop number 85/1, 19th Main,17th cross 1 th sector, HSR Layout, Bengaluru, Karnataka 560102",
                  destination: document.getElementById('one_drop_location').value,
                  travelMode: 'DRIVING'
                }, function(response, status) {
                  if (status === 'OK') {
                    distance = response.routes[0].legs[0].distance.value;
                    document.getElementById('one_total_distance').value = Math.ceil(distance / 1000,1);
                    console.log("distance in KM:"+Math.ceil(distance / 1000,1));
                  }else{
                      distance = 1;
                        document.getElementById('one_total_distance').value = Math.ceil(distance / 1000,1);
                        console.log("distance in KM:"+Math.ceil(distance / 1000,1));
                  }
                });
                
          markers = [];
          var bounds = new google.maps.LatLngBounds();
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
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAja4Yvq3RB3GV0gp3vvHPKk18u3MJ7e8&libraries=geometry,places&callback=initAutocomplete"
         async defer></script>
</body>
</html>