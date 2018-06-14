<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('common/header.php');
?>

<main class="site-main page-spacing search-page">
		<div class="container-fluid no-padding popular-destination2-section" style="background: url(<?php echo base_url(); ?>assets/images/2.jpg) fixed;padding-bottom: 50px;">
			<div class="container">
				<!-- Booking Form -->
				<div class="booking-form-section">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12 bookingform-details">
							    <div class="search-filters">
								<!-- Nav tabs -->
								<ul class="nav nav-tabs" role="tablist">
									<li role="presentation" class="active"><a href="#search1" aria-controls="search1" role="tab" data-toggle="tab"><img src="<?php echo base_url(); ?>assets/images/photoslider2-ic3.png" alt="photoslider2-ic3" width="22" height="23">Outstation Round Trip</a></li>
								</ul>
								
								<div class="post-content"><?php echo $_POST['round_pickup_location'] ." to ".$_POST['round_drop_location']; ?> | Pickup Date: <?php echo $_POST['round_start_date']; ?>
								| Pickup Time: <?php echo $_POST['round_pickup_time']; ?> | Return Date: <?php echo $_POST['round_return_date']; ?> | Return Time: <?php echo $_POST['round_return_time']; ?> 
								| Total KM (Apprx): <?php echo 2 * $_POST['round_total_distance']; ?> Kms | <?php $diff=date_diff(date_create($_POST['round_start_date']), date_create($_POST['round_return_date']));
								$days = $diff->format("%a") + 1; echo "No. of Day(s): ". $days ." Days"; ?></div>
								</div>
								<div class="tab-content col-xs-12">
									<div role="tabpanel" class="tab-pane active fade in" id="search1">
											<div class="row">
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
                                                <?php
                                                      $count=1;
                                                      foreach ($outstation_round_trip as $row){
                                                            $total_fare = $row["rate"] * 2 * $_POST['round_total_distance'] + $row["driver_allowance"] * $days;
                                                            ?><tr>  
                                                            <td><img src="<?php echo base_url(); ?>assets/images/<?php echo $row['image'];?>" alt="" style="width:100px;"> <b><?php echo $row["title"]; ?></b></td>  
                                                            <td><?php echo $row["seating"]; ?></td> 
                                                            <td>Rs. <?php echo $row["rate"]; ?></td> 
                                                            <td>Rs. <?php echo $total_fare; ?>
                                                            <span class="help">Fare Details?
                                                            <div class="help-details">
                                                                  <b>Fare Details</b><br>  
                                                                  Approx. Roundtrip distance : <?php echo 2 * $_POST['round_total_distance']; ?> Kms.  Minimum charged distance : <?php echo $row['min_km_per_day'];?><br>
                                                                  <table style="margin:5px 0;">
                                                                     <tbody><tr><td>Basic :   <?php echo 2 * $_POST['round_total_distance']; ?> Kms x Rs. <?php echo $row["rate"]; ?></td>
                                                                     <td>=Rs. <?php echo $row["rate"] * 2 * $_POST['round_total_distance']; ?></td></tr>
                                                                        <tr><td>Driver : Rs. <?php echo $row["driver_allowance"]; ?> x <?php echo $days; ?> Day/s</td><td>=  Rs. <?php echo $row["driver_allowance"] * $days; ?></td></tr>
                                                                        <tr><td>Night Halt :</td><td>=  Rs. 0</td></tr>
                                                                        <tr><td>Total :</td><td>=  Rs. <?php echo $total_fare; ?></td></tr>
                                                                     </tbody>
                                                                  </table>
                                                                  <br>
                                                                  <b>If you will use car/cab more than 1 day(s) and</b> <?php echo 2 * $_POST['round_total_distance']; ?><b>Kms , extra charges as follows:</b><br>    
                                                                  After  <?php echo 2 * $_POST['round_total_distance']; ?>  Kms &amp; 1day(s) :<br>
                                                                  Rs. <?php echo $row["rate"]; ?> per Km.<br>  
                                                                  Rs.  <?php echo $row["driver_allowance"]; ?> per day  driver charges.<br><br>   
                                                                  <b>Terms &amp; Conditions:</b><br>
                                                                  <ul style="margin-left:0px; margin-right:0px">
                                                                     <li>Distance and Time are calculated from your pickup location (except for pickup from KIAL Airport).</li>
                                                                     <li>Parking and Toll charges will be extra.</li>
                                                                     <li>State entry will be extra.</li>
                                                                     <li>Rs.100 will be charged extra for Placard.</li>
                                                                     <li>Driver allowance will be extra if the driver drives between 10 PM and 6 AM.</li>
                                                                     <li>One day means a one calendar day (from midnight 12 to midnight 12).</li>
                                                                     <li>Cabs that are booked for outstation should not be used for local usage.</li>
                                                                     <li>The final amount will depend on actual travelled distance and days.</li>
                                                                  </ul>
                                                               </div>
                                                            </span>
                                                            
                                                            </td> 
                                                            <td>Rs. <?php echo round(($total_fare / 100 ) * 10 ); ?></td> 
                                                            <td><button type="button" class="btn btn-success theme-btn" data-toggle="modal" data-target="#view_Send_enquiry<?php echo $count; ?>">SELECT</button></td>
                                                            </tr>  
                                                         <?php $count++; }  
                                                ?>
                                                </tbody>
                                            </table>
                                    </div>
							</div>
						</div>
					</div>
				</div><!-- Booking Form /- -->
			</div>
		</div>
		<div class="section-padding"></div>
	</main>
<?php
    $count=1;
      foreach ($outstation_round_trip as $row){
      $total_fare = $row["rate"] * 2 * $_POST['round_total_distance'] + $row["driver_allowance"] * $days;
      ?>
<section id="view_Send_enquiry<?php echo $count; ?>" class="modal fade view_enquiry_popup" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h3 class="title-pattern mt-0 modal-title"><span class="text-Blue">Booking: <span class="text-theme-color-2"><?php echo $row["title"]; ?></span></span></h3>
      </div>
      <div class="modal-body">
          <?php echo form_open('outstation_round_trip/booking', 'class="booking-form" id="booking-form-round'.$count.'"'); ?>
                  <div class="col-sm-12">
                      <input type="hidden" name="round_pickup_location" value="<?php echo $_POST['round_pickup_location']; ?>">
                      <input type="hidden" name="round_drop_location" value="<?php echo $_POST['round_drop_location']; ?>">
                      <input type="hidden" name="round_start_date" value="<?php echo $_POST['round_start_date']; ?>">
                      <input type="hidden" name="round_pickup_time" value="<?php echo $_POST['round_pickup_time']; ?>">
                      <input type="hidden" name="round_return_date" value="<?php echo $_POST['round_return_date']; ?>">
                      <input type="hidden" name="round_return_time" value="<?php echo $_POST['round_return_time']; ?>">
                      <input type="hidden" name="round_total_distance" value="<?php echo $_POST['round_total_distance']; ?>">
                      <input type="hidden" name="round_no_of_days" value="<?php echo $days; ?>">
                      
                      
                      <input type="hidden" name="vehicle_id" value="<?php echo $row['id']; ?>">
                      <input type="hidden" name="vehicle_name" value="<?php echo $row["title"]; ?>">
                      <input type="hidden" name="total_amount" value="<?php echo $total_fare; ?>" id="enquiry_total_amount<?php echo $count ?>">
                      <input type="hidden" name="amount_to_pay" value="<?php echo $total_fare; ?>" id="enquiry_amount_to_pay<?php echo $count ?>">
                    <div class="form-group mb-20 mt-20">
                    <label>How Many Cars?</label>
                      <select name="enquiry_cars" id="enquiry_cars<?php echo $count ?>" class="form-control" required onchange="calculateAmount(<?php echo $count ?>);">
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                            <option value="7">7</option>
                                            <option value="8">8</option>
                                            <option value="9">9</option>
                        </select>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group mb-20 mt-20">
                        <label>You Are Paying?</label>
                      <select name="enquiry_paying_type" id="enquiry_paying_type<?php echo $count ?>" class="form-control" required onchange="calculateAmount(<?php echo $count ?>);">
                        <option value="Full">Full</option>
                        <option value="Advance">Advance</option>
                        </select>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group mb-20 mt-20">
                        <label >Amount You need to pay:</label><br>
                      <span class="amount-box">Rs. <span id="enquiry_amount_pay<?php echo $count ?>"><?php echo $total_fare; ?></span></span>
                      <br>
                    </div>
                  </div>
                  <div class="col-sm-12">
                    <div class="form-group mb-20 mt-10">
                      <input name="form_botcheck" class="form-control" type="hidden" value="">
                      <button type="submit" name="btn2" id="enquiry_submit_btn<?php echo $count ?>" class="btn btn-colored btn-theme-color-2 text-white btn-lg btn-block" data-loading-text="Please wait...">Book Now</button>
                    </div>
                  </div>
                  <div class="alert alert-danger error" id="send_enquiry_error<?php echo $count ?>" style="display: none;"></div>
                </form>
            </div>
      <div class="modal-footer">
        <button type="reset" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</section>
<?php $count++; } ?>
<?php include("common/footer.php"); ?>
<script>
function calculateAmount(str){
    var total_amount = document.getElementById('enquiry_total_amount'+str).value;
    var total_cars = document.getElementById('enquiry_cars'+str).value;
    var paying_type = document.getElementById('enquiry_paying_type'+str).value;
    total_cars = parseInt(total_cars);
    total_amount = parseInt(total_amount);
    if(paying_type == 'Advance'){
    var enquiry_amount_to_pay = Math.round((total_amount * total_cars) / 10);
    document.getElementById('enquiry_amount_pay'+str).innerHTML = enquiry_amount_to_pay;
    document.getElementById('enquiry_amount_to_pay'+str).value = enquiry_amount_to_pay;
    }else{
      var enquiry_amount_to_pay = Math.round(total_amount * total_cars);
      document.getElementById('enquiry_amount_pay'+str).innerHTML = enquiry_amount_to_pay;
    document.getElementById('enquiry_amount_to_pay'+str).value = enquiry_amount_to_pay;
    }
    }
</script>
</body>
</html>