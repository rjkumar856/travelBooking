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
									<li role="presentation" class="active"><a href="#search1" aria-controls="search1" role="tab" data-toggle="tab"><img src="<?php echo base_url(); ?>assets/images/photoslider2-ic3.png" alt="photoslider2-ic3" width="22" height="23">Airport Taxi</a></li>
								</ul>
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active fade in" id="search1">
										<?php echo form_open('rental-cars-airport-taxi-submit', 'class="booking-form" id="booking-form-airport"'); ?>
										<div class="alert alert-danger" style="<?php if(validation_errors()){ echo 'display: block;'; }else{ echo 'display: none;'; } ?>"><?php if(validation_errors()){echo validation_errors();} ?></div>
                                        <div class="alert alert-success" style="<?php if(isset($message)){ echo 'display: block;'; }else{ echo 'display: none;'; } ?>"><?php if(isset($message)){ echo $message;} ?></div>
                                        <div class="alert alert-success" style="<?php if($this->session->flashdata('message')){ echo 'display: block;'; }else{ echo 'display: none;'; } ?>"><?php if($this->session->flashdata('message')){ echo $this->session->flashdata('message'); } ?></div>
											<div class="row">
												<div class="form-group col-md-12 no-padding">
													<div class="row">
														<div class="form-group col-md-6 booking_location">
															<label>Pickup Location</label>
															<input class="form-control" required placeholder="Location" type="text" name="airport_pickup_location">
														</div>
														<div class="form-group col-md-6 booking_location select-options">
															<label>Where do you want to go?</label>
															<div class="select_options">
																<select class="form-control" name="airport_drop_location" required>
																	<option value="City to Airport">City to Airport</option>
																	   <option value="Airport to City">Airport to City</option>
																	   <option value="2 Way">2 Way</option>
																</select>
															</div>
														</div>
													</div>
												</div>
												
												<div class="form-group col-md-12 no-padding">
													<div class="row">
														<div class="col-md-3 col-sm-6 col-xs-12">
															<label>Pickup Date</label>
															<div class="input-group datepicker" id="datepicker">
																<input type='text' class="form-control" name="airport_start_date" required/>
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
														<div class="col-md-3 col-sm-6 col-xs-12">
															
														</div>
														<div class="col-md-3 col-sm-2 col-xs-4 booking_rooms select-options">
															
														</div>
													</div>
												</div>
												<div class="form-group col-md-12 no-padding">
													<label>OTHER INFORMATION</label>
													<div class="row">
														<div class="col-md-3 col-sm-2 col-xs-4">
															
															<input class="form-control" required placeholder="Name" name="airport_name" type="text">
														</div>
														<div class="col-md-3 col-sm-5 col-xs-4">
															<input class="form-control" required placeholder="Mobile" name="airport_mobile" type="text">
														</div>
														<div class="col-md-3 col-sm-5 col-xs-4">
															<input class="form-control" required placeholder="Email ID" name="airport_email" type="text">
														</div>
														<div class="col-md-3 col-sm-5 col-xs-4 select-options">
															<select class="form-control" name="airport_car" required>
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
													<input type="submit" value="Book Now" class="booknowbtn">
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
						
						<li data-thumb="<?php echo base_url(); ?>assets/images/tata_ac.jpg" class="lslide" style="width: 1263px; margin-right: 0px;">
							<div class="container">
								<div class="row">
									<div class="col-md-5 col-sm-12 no-padding">
										<div class="popular_des2_content-block" style="padding: 20px 30px 4px;">
											<h3>Tata Indica Ac</h3>
											<p>City Pickup: Km and time will starts and ends at customer pickup point.</br>Airport Pickup: Km and time will starts and ends at our office (Hsr Layout).</br>Driver batta will be charged extra if the driver on duty before 6 am or after 10 pm.</br>Parking, Tolls, and state entry tax will be charged extra as per actual.
Minimum Passengers are allowed as per Government rule.</p>
											<ul>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic3.png" alt="popular-destination2-ic3" width="28" height="27">2 Way: Rs.1,400</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic4.png" alt="popular-destination2-ic4" width="28" height="28">Seating: 4+1</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic1.png" alt="popular-destination2-ic1" width="24" height="24">City to Airport: Rs.1,000</li>
											</ul>
											
										</div>
									</div>
									<div class="col-md-7 col-sm-12 no-padding">
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
									<div class="col-md-5 col-sm-12 no-padding">
										<div class="popular_des2_content-block" style="padding: 20px 30px 4px;">
											<h3>Sedan</h3>
											<p>City Pickup: Km and time will starts and ends at customer pickup point.</br>Airport Pickup: Km and time will starts and ends at our office (Hsr Layout).</br>Driver batta will be charged extra if the driver on duty before 6 am or after 10 pm.</br>Parking, Tolls, and state entry tax will be charged extra as per actual.
Minimum Passengers are allowed as per Government rule.</p>
											<ul>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic3.png" alt="popular-destination2-ic3" width="28" height="27">2 Way: Rs.1,600</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic4.png" alt="popular-destination2-ic4" width="28" height="28">Seating: 4+1</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic1.png" alt="popular-destination2-ic1" width="24" height="24">City to Airport: Rs.1,200</li>
											</ul>
											
										</div>
									</div>
									<div class="col-md-7 col-sm-12 no-padding">
										<div class="popular_des2_content-img">
											<img src="<?php echo base_url(); ?>assets/images/etios.jpg" alt="popular-destination2_thumb_main-1" width="672" height="454">
										</div>
									</div>
								</div>	
							</div>
						</li>
						
						<li data-thumb="<?php echo base_url(); ?>assets/images/innovaac.jpg" class="lslide" style="width: 1263px; margin-right: 0px;">
							<div class="container">
								<div class="row">
									<div class="col-md-5 col-sm-12 no-padding">
										<div class="popular_des2_content-block" style="padding: 20px 30px 4px;">
											<h3>Toyota Innova Ac</h3>
											<p>City Pickup: Km and time will starts and ends at customer pickup point.</br>Airport Pickup: Km and time will starts and ends at our office (Hsr Layout).</br>Driver batta will be charged extra if the driver on duty before 6 am or after 10 pm.</br>Parking, Tolls, and state entry tax will be charged extra as per actual.
Minimum Passengers are allowed as per Government rule.</p>
											<ul>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic3.png" alt="popular-destination2-ic3" width="28" height="27">2 Way: Rs.2,200</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic4.png" alt="popular-destination2-ic4" width="28" height="28">Seating: 7+1</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic1.png" alt="popular-destination2-ic1" width="24" height="24">City to Airport: Rs.1,800</li>
											</ul>
											
										</div>
									</div>
									<div class="col-md-7 col-sm-12 no-padding">
										<div class="popular_des2_content-img">
											<img src="<?php echo base_url(); ?>assets/images/innovaac.jpg" alt="popular-destination2_thumb_main-1" width="672" height="454">
										</div>
									</div>
								</div>	
							</div>
						</li>
						<li data-thumb="<?php echo base_url(); ?>assets/images/TemopoTraveller.jpg" class="lslide" style="width: 1263px; margin-right: 0px;">
							<div class="container">
								<div class="row">
									<div class="col-md-5 col-sm-12 no-padding">
										<div class="popular_des2_content-block" style="padding: 20px 30px 4px;">
											<h3>Tempo Traveller</h3>
											<p>City Pickup: Km and time will starts and ends at customer pickup point.</br>Airport Pickup: Km and time will starts and ends at our office (Hsr Layout).</br>Driver batta will be charged extra if the driver on duty before 6 am or after 10 pm.</br>Parking, Tolls, and state entry tax will be charged extra as per actual.
Minimum Passengers are allowed as per Government rule.</p>
											<ul>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic3.png" alt="popular-destination2-ic3" width="28" height="27">2 Way: Rs.3,200</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic4.png" alt="popular-destination2-ic4" width="28" height="28">Seating: 12+1</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic1.png" alt="popular-destination2-ic1" width="24" height="24">City to Airport: Rs.2,600</li>
											</ul>
											
										</div>
									</div>
									<div class="col-md-7 col-sm-12 no-padding">
										<div class="popular_des2_content-img">
											<img src="<?php echo base_url(); ?>assets/images/TemopoTraveller.jpg" alt="popular-destination2_thumb_main-1" width="672" height="454">
										</div>
									</div>
								</div>	
							</div>
						</li>
						<li data-thumb="<?php echo base_url(); ?>assets/images/mini_bus.jpg" class="lslide" style="width: 1263px; margin-right: 0px;">
							<div class="container">
								<div class="row">
									<div class="col-md-5 col-sm-12 no-padding">
										<div class="popular_des2_content-block" style="padding: 20px 30px 4px;">
											<h3>Mini Bus</h3>
											<p>City Pickup: Km and time will starts and ends at customer pickup point.</br>Airport Pickup: Km and time will starts and ends at our office (Hsr Layout).</br>Driver batta will be charged extra if the driver on duty before 6 am or after 10 pm.</br>Parking, Tolls, and state entry tax will be charged extra as per actual.
Minimum Passengers are allowed as per Government rule.</p>
											<ul>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic3.png" alt="popular-destination2-ic3" width="28" height="27">2 Way: Rs.5,500</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic4.png" alt="popular-destination2-ic4" width="28" height="28">Seating: 21+1</li>
												<li><img src="<?php echo base_url(); ?>assets/images/popular-destination2-ic1.png" alt="popular-destination2-ic1" width="24" height="24">City to Airport: Rs.4,500</li>
											</ul>
											
										</div>
									</div>
									<div class="col-md-7 col-sm-12 no-padding">
										<div class="popular_des2_content-img">
											<img src="<?php echo base_url(); ?>assets/images/mini_bus.jpg" alt="popular-destination2_thumb_main-1" width="672" height="454">
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