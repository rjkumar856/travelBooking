<?php
defined('BASEPATH') OR exit('No direct script access allowed');
require_once('common/header.php');
?>

<main class="site-main page-spacing">
		
		
		<div class="container contactus-section">
			<div class="section-padding"></div>
			<div class="row">
				<div class="col-md-6 contactus-left">
					<!-- Map -->
					<div class="map">
						<div class="map-canvas">
							<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2312.365551292785!2d77.64343388145898!3d12.912875662337248!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bae149ad3e43a57%3A0x62678765574a2a0f!2sSri+Thirumala+Tours+%26+Travels!5e0!3m2!1sen!2sin!4v1517636610514" width="570" height="429" frameborder="0" style="border:0" allowfullscreen></iframe>
						</div>
					</div><!-- Map /- -->
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-6 office-add">
							<h3 class="block-title">Office Address</h3>
							<p><span>Sri Thirumala Tours and Travels</span> #85/1, 19th Main, 17th Cross, Sector 1, HSR Layout, Bangalore-560102</p>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-6 contact-info">
							<h3 class="block-title">Contact Info</h3>
							<p><span>Call Us :</span><a href="tel:09845369848" title="09845369848"> 09845369848/09845761402</a></p>
							<p><span>Mail Us :</span><a href="mailto:thirumalatours@gmail.com" title="thirumalatours@gmail.com"> info@ourdomain.com</a></p>
							<p><span>Phone No :</span><a href="tel:080 2258 8871" title="080 2258 8871"> 080 2258 8871</a></p>
						</div>
					</div>
				</div>
				<div class="col-md-6 contactus-right">
					<form method="post" action="contact.php" id="contact-form" class="contactus-form">
						<div class="row">
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="form-group">
									<input type="text" name="contact-name" required="" class="form-control" id="input_name" placeholder="Your Name*"/>
								</div>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="form-group">
									<input type="email" name="contact-email" required="" class="form-control" id="input_email" placeholder="Email Address*"/>
								</div>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="form-group">
									<input type="text" name="contact-phone" required="" class="form-control" id="input_phone" placeholder="Phone"/>
								</div>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="form-group">
									<textarea rows="5" name="contact-message" required="" class="form-control" id="textarea_message" placeholder="Your Comment"></textarea>
								</div>
							</div>	
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="form-group">
									<input type="submit" value="Send a Message" id="btn_submit" title="Send" name="post">
								</div>
							</div>
							<div id="alert-msg" class="alert-msg"></div>
						</div>
					</form>	
				</div>
			</div>
		<div class="section-padding"></div>
	</div>

	</main>

<?php include("common/footer.php"); ?>
</body>
</html>