<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('common/header');
?>

<main class="site-main page-spacing booking-page">
		<div class="container-fluid no-padding popular-destination2-section" style="background: url(<?php echo base_url(); ?>assets/images/2.jpg) fixed;padding-bottom: 50px;">
			<div class="container">
				<!-- Booking Form -->
				<div class="booking-form-section">
					<div class="container">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12 bookingform-details">

								<div class="tab-content col-xs-12">
									<div role="tabpanel" class="tab-pane active fade in" id="search1">
											<div class="row">
											    <h3 class="title">PAYMENT OPTIONS</h3>
												<form action="<?php echo $action; ?>/_payment" method="post" id="payuForm" name="payuForm">
                            		                <input type="hidden" name="key" value="<?php echo $mkey; ?>" />
                            		                <input type="hidden" name="hash" value="<?php echo $hash; ?>"/>
                            		                <input type="hidden" name="txnid" value="<?php echo $tid; ?>" />
                            		                <input type="hidden" class="form-control" name="amount" value="<?php echo $amount; ?>"  readonly />
                            		                    <input type="hidden" class="form-control" name="firstname" id="firstname" value="<?php echo $name; ?>" readonly />
                            		                    <input type="hidden" class="form-control" name="email" id="email" value="<?php echo $mailid; ?>" readonly />
                            		                    <input type="hidden" class="form-control" name="phone" value="<?php echo $phoneno; ?>" readonly />
                            		                    <input type="hidden" class="form-control" name="productinfo" readonly value="<?php echo $productinfo; ?>" />
                            		                    <input type="hidden" class="form-control" name="address1" value="<?php echo $address; ?>" readonly />
                            		                    <input name="surl" value="<?php echo $sucess; ?>" size="64" type="hidden" />
                            		                    <input name="furl" value="<?php echo $failure; ?>" size="64" type="hidden" />  
                            		                    <!--for test environment comment  service provider   -->
                            		                    <input type="hidden" name="service_provider" value="payu_paisa" size="64" />
                            		                    <input name="curl" value="<?php echo $cancel; ?> " type="hidden" />
                            		                    
                            		                    <input type="hidden" name="address2" value="<?php echo $udf2; ?>" />
                            		                    <input type="hidden" name="lastname" value="<?php echo $udf1; ?>" />
                            		                    <input type="hidden" name="udf1" value="<?php echo $udf1; ?>" />
                            		                    <input type="hidden" name="udf2" value="<?php echo $udf2; ?>" />
                            		                    <input type="hidden" name="udf3" value="<?php echo $udf3; ?>" />
                            		                    <input type="hidden" name="udf4" value="<?php echo $udf4; ?>" />
                            		                    <input type="hidden" name="udf5" value="<?php echo $udf5; ?>" />
                            		                </div>
                            		                <div class="form-group float-right confirn-text">
                            		                    <label><input type="checkbox" name="conditions" required> You will be redirected to a secured payment gateway, please fill up above given fields to 
                            		                    complete the booking.</label><br /><br />
                            		                	<input type="submit" value="Make a Payment" class="btn btn-success theme-btn" />
                            		                </div>
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
<?php $this->load->view('common/footer'); ?>
</body>
</html>