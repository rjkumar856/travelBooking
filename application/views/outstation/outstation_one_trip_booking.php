<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('common/header');
?>
<main class="site-main page-spacing booking-page">
		<div class="container-fluid no-padding popular-destination2-section" style="background: url(<?php echo base_url(); ?>assets/images/2.jpg) fixed;padding-bottom: 50px;">
			<div class="container">
				<!-- Booking Form -->
				<div class="booking-form-section">
										<div class="row">
										    <div class="col-xs-12 col-sm-5 col-md-4 pull-right booking-sub">
										        <div class="inner">
										        <h3 class="title">TRIP DETAILS</h3>
										        <div class="trip-details">
										            <b><?php if(isset($this->session->userdata['one_booking'])){ echo $this->session->userdata['booking']['vehicle_name'];}else{ echo "No vehicle Selected"; } ?></b>
										            <span class="details">Outstation (Oneway trip)</span>
										            <span class="details">Pickup Date : <?php if(isset($this->session->userdata['one_booking'])){ echo date("d M Y", strtotime($this->session->userdata['one_booking']['one_start_date']));} ?></span>
                                                    <span class="details">Pickup Time : <?php if(isset($this->session->userdata['booking'])){ echo $this->session->userdata['one_booking']['one_pickup_time'];} ?></span>
                                                    <span class="details">No Of Days : <?php if(isset($this->session->userdata['booking'])){ echo $this->session->userdata['one_booking']['one_no_of_days'];} ?> Days</span>
                                                    <span class="details">No Of Cars : <?php if(isset($this->session->userdata['booking'])){ echo $this->session->userdata['one_booking']['enquiry_cars'];} ?></span>
                                                    <hr>
                                                    <span class="details">Basic Amount : <?php if(isset($this->session->userdata['booking'])){ echo $this->session->userdata['one_booking']['amount_to_pay'];} ?></span>
                                                    <span class="details">Total Amount : <?php if(isset($this->session->userdata['booking'])){ echo $this->session->userdata['one_booking']['total_amount'];} ?></span>
                                                    <span class="details">You Are Paying : <?php if(isset($this->session->userdata['booking'])){ echo $this->session->userdata['one_booking']['amount_to_pay'];} ?></span>
										        </div>
										        </div>
										    </div>
										 <div class="col-xs-12 col-sm-7 col-md-8 pull-left booking-sub">
										     <div class="inner">
										     <h3 class="title">TRAVELLERS DETAILS</h3>
								                        <?php echo form_open('outstation_round_trip/payment', 'class="booking-form" id="booking-form-round"'); ?>
								                        <input type="hidden"  name="payble_amount" id="payble_amount" class="form-control" value="<?php if(isset($this->session->userdata['booking'])){ echo $this->session->userdata['booking']['amount_to_pay'];} ?>" required />
								                        
                                        <input type="hidden" name="product_info" id="product_info" class="form-control"  Placeholder="Product info name" value="<?php if(isset($this->session->userdata['booking'])){ echo $this->session->userdata['booking']['vehicle_name']."Outstation (Roundtrip)";}else{ echo "Outstation (Roundtrip)"; } ?>" required />
								                       
                                        <input type="hidden" name="vehicle_id" id="vehicle_id" class="form-control"  Placeholder="vehicle_id" value="<?php if(isset($this->session->userdata['booking'])) { echo $this->session->userdata['booking']['vehicle_id'];
                                      }

                                        else { echo "1"; } ?>" required />
								                    
                                        <div class="col-sm-6 col-xs-12">
                                                        <div class="form-group mb-20 mt-20">
                                                        <label>First Name*</label>
                                                         <input type="text" class="form-control" name="customer_name" placeholder="First Name" required>
                                                        </div>
                                                      </div>
                                                      <div class="col-sm-6 col-xs-12">
                                                        <div class="form-group mb-20 mt-20">
                                                        <label>Last Name</label>
                                                         <input type="text" class="form-control" name="last_name" placeholder="Last Name" >
                                                        </div>
                                                      </div>
                                                      <div class="col-sm-6 col-xs-12">
                                                        <div class="form-group mb-20 mt-20">
                                                        <label>Email ID*</label>
                                                         <input type="email" class="form-control " name="customer_email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" required>
                                                        </div>
                                                      </div>
                                                      <div class="col-sm-6 col-xs-12">
                                                        <div class="form-group mb-20 mt-20">
                                                        <label>Mobile*</label>
                                                        <span class="mobile-code">+91</span>
                                                         <input type="number" class="form-control mobile" name="mobile_number" placeholder="Mobile" pattern="/(6|7|8|9)\d{9}/" maxlength="10" required>
                                                        </div>
                                                      </div>
                                                      <div class="col-sm-12">
                                                        <div class="form-group mb-20 mt-20">
                                                        <label>Select Area*</label>
                                                        <select name="areas" id="enquiry_cars" class="form-control" required>
                                                        <option value="">Select an Area</option>
                                                        <?php
                                                        if($bangalore_area and is_array($bangalore_area)){
                                                        foreach($bangalore_area as $value){ ?>
                                                        <option value="<?php echo $value['areasName']; ?>"><?php echo $value['areasName']; ?></option>
                                                        <?php } } ?>
                                                        </select>
                                                         </div>
                                                      </div>
                                                      <div class="col-sm-12">
                                                        <div class="form-group mb-20 mt-20">
                                                        <label>Full Address*</label>
                                                        <textarea class="form-control" name="customer_address" placeholder="Full Address" required></textarea>
                                                        </div>
                                                      </div>
                                                      <div class="col-sm-12 col-xs-12">
                                                        <div class="form-group mb-20 mt-20">
                                                        <label>Payment Type*</label>
                                                         <select name="payment_type" id="payment_type" class="form-control" required>
                                                        <option value="Online Payment">Online Payment</option>
                                                        </select>
                                                        </div>
                                                      </div>
                                                      <div class="col-sm-12">
                                                        <div class="form-group mb-20 mt-10">
                                                          <input name="form_botcheck" class="form-control" type="hidden" value="">
                                                          <button type="submit" name="btn2" id="enquiry_submit_btn" class="btn btn-colored btn-theme-color-2 text-white btn-lg btn-block">Book Now</button>
                                                        </div>
                                                      </div>
                                                      <div class="alert alert-danger error" id="send_enquiry_error" style="display: none;"></div>
                                                </form>
                                            </div>
                                    </div>
                                </div>
						    </div>
						</div>
					</div>
	</main>
<?php $this->load->view('common/footer'); ?>
</body>
</html>