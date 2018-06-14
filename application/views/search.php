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
									<li role="presentation" class="active"><a href="#search1" aria-controls="search1" role="tab" data-toggle="tab"><img src="<?php echo base_url(); ?>assets/images/photoslider2-ic3.png" alt="photoslider2-ic3" width="22" height="23">Outstation Round Trip</a></li>
								</ul>
								<div class="tab-content">
									<div role="tabpanel" class="tab-pane active fade in" id="search1">
									<?php echo form_open('outstation-round-trip-submit', 'class="booking-form" id="booking-form-round"'); ?>
										<div class="alert alert-danger" style="<?php if(validation_errors()){ echo 'display: block;'; }else{ echo 'display: none;'; } ?>"><?php if(validation_errors()){echo validation_errors();} ?></div>
                                        <div class="alert alert-success" style="<?php if(isset($message)){ echo 'display: block;'; }else{ echo 'display: none;'; } ?>"><?php if(isset($message)){ echo $message;} ?></div>
                                        <div class="alert alert-success" style="<?php if($this->session->flashdata('message')){ echo 'display: block;'; }else{ echo 'display: none;'; } ?>"><?php if($this->session->flashdata('message')){ echo $this->session->flashdata('message'); } ?></div>
										  
											<div class="row">
											<!--	<div class="form-group col-md-12 no-padding">
													<div class="row">
														<div class="form-group col-md-6 booking_location">
															<label>Pick up Location</label>
															<input class="form-control" required="" placeholder="Location" name="round_pickup_location" type="text">
															
														</div>
														<div class="form-group col-md-6 booking_location">
															<label>Where do you want to go?</label>
															<input class="form-control" required="" placeholder="Location" name="round_drop_location" type="text">
															
														</div>
													</div>
												</div> -->
												
												
												<table id="example" class="table table-striped table-bordered" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>CAB/TAXI NAME</th>
                                                        <th>SEAT</th>
                                                        <th>PER KM</th>
                                                        <th>FARE ? </th>
                                                        <th>ADVANCE ?</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                <?php  //print_r($h); ?>
                                                
                                                <?php  
                                                      foreach ($h as $row)  
                                                         {  
                                                            ?><tr>  
                                                            <td><img src="<?php echo base_url(); ?>assets/images/<?php echo $row['image'];?>" alt="" style="width:39%;"><?php echo $row["title"]; ?></td>  
                                                            <td><?php echo $row["seating"]; ?></td> 
                                                            <td><?php echo $row["min_km_per_day"]; ?></td> 
                                                            <td><?php echo $row["rate"]; ?></td> 
                                                            <td><?php echo $row["driver_allowance"]; ?></td> 
                                                            <td><button type="button" class="btn btn-success">SELECT</button></td>
                                                            </tr>  
                                                         <?php }  
                                                ?>
                                                 
                                                </tbody>
                                            </table>
												
												
												
										</form>
								</div>
							</div>
						</div>
					</div>
				</div><!-- Booking Form /- -->
			</div>
		</div>
	
	
		<div class="section-padding"></div>
	</main>

<?php include("common/footer.php"); ?>
</body>
</html>