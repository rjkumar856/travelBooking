<?php
defined('BASEPATH') OR exit('No direct script access allowed');
$this->load->view('common/header');
?>
<main class="site-main page-spacing booking-page payment">
		<div class="container-fluid no-padding popular-destination2-section" style="background: url(<?php echo base_url(); ?>assets/images/2.jpg) fixed;padding-bottom: 50px;">
			<div class="container">
				<!-- Booking Form -->
				<div class="booking-form-section">
										<div class="row">
										    <h3 class="title">Payment Success</h3>
										    <div class="col-xs-12 col-sm-12">
										        <table class="payment-success">
										            <tr><th colspan="2">Payment Success</th></tr>
										            <tr><th>Amount :</th><td><?php if(isset($_POST['amount'])){echo $_POST['amount'];} ?></td></tr>
										            <tr><th>txnid :</th><td><?php if(isset($_POST['txnid'])){echo $_POST['txnid'];} ?></td></tr>
										            <tr><th>Booked for: </th><td><?php if(isset($_POST['productinfo'])){echo $_POST['productinfo'];} ?></td></tr>
										            <tr><th>Firstname :</th><td><?php if(isset($_POST['firstname'])){echo $_POST['firstname'];} ?></td></tr>
										            <tr><th>Lastname :</th><td><?php if(isset($_POST['lastname'])){echo $_POST['lastname'];} ?></td></tr>
										            <tr><th>Email :</th><td><?php if(isset($_POST['email'])){echo $_POST['email'];} ?></td></tr>
										            <tr><th>Phone :</th><td><?php if(isset($_POST['phone'])){echo $_POST['phone'];} ?></td></tr>
										            <tr><th>Status :</th><td><?php if(isset($_POST['status'])){echo $_POST['status'];} ?></td></tr>
										            <tr><th>Date :</th><td><?php if(isset($_POST['addedon'])){echo $_POST['addedon'];} ?></td></tr>
										        </table>
										    </div>
                                </div>
						    </div>
						</div>
					</div>
	</main>
<?php $this->load->view('common/footer'); ?>
</body>
</html>