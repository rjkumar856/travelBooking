<?php
if(isset($_GET['id'])){
$internet_pack_id=$_GET['id'];
}else{
    header("Location: /view-new-connection");
}

if(isset($_POST['cus_update_internet_pack'])){
		$name = htmlentities(trim($_POST['name']));
		$phone = htmlentities(trim($_POST['phone']));
		$user_complaintNature = htmlentities(trim($_POST['user_complaintNature']));
		$description = htmlentities(trim($_POST['description']));
		$complaint_status = htmlentities(trim($_POST['complaint_status']));
		$email = htmlentities(trim($_POST['email']));
		$user_id = htmlentities(trim($_POST['user_id']));
		$technician = htmlentities(trim($_POST['technician']));
		$comments = htmlentities(trim($_POST['comments']));
		
		try{
		
		if(empty($name) || empty($phone) || empty($email) || empty($user_complaintNature) || empty($description) || empty($user_id)){
		    $_SESSION['add_user_error_msg'] = "<div class='alert alert-danger'><button class='close' data-dismiss='alert'>&times;</button>Please Fill all the Fileds!</div>";
		}else{
    			    $stmt = $reg_user->runQuery("UPDATE complaint SET user_id='$user_id',name='$name',email='$email',phone='$phone',nature_of_complaint='$user_complaintNature',technician='$technician',description='$description',complaint_status='$complaint_status',comments='$comments' WHERE id='$internet_pack_id'");
                    $stmt->execute();
            		$_SESSION['add_user_error_msg'] = "<div class='alert alert-success'><button class='close' data-dismiss='alert'>&times;</button><strong>User Complaint!</strong> Updated Successfully.</div>";
            		header("Location: /edit-user-complaint?id=".$internet_pack_id);
            		exit();
		}
		
		}catch(PDOException $ex){
			$_SESSION['add_user_error_msg'] = "<div class='alert alert-danger'><button class='close' data-dismiss='alert'>&times;</button>".$ex->getMessage()."</div>";
		}
}
include 'include/header.php';

$stmt = $reg_user->runQuery("SELECT * FROM complaint WHERE id='$internet_pack_id'");
$stmt->execute();
$internet_pack_details = $stmt->fetchObject();
?>
<div class="site-content">
				<div class="content-area py-1">
					<div class="container-fluid">
						<h4>Edit User Complaints</h4>
						<ol class="breadcrumb no-bg mb-1">
							<li class="breadcrumb-item"><a href="/view-user-complaints">View User Complaints</a></li>
							<li class="breadcrumb-item active"><a href="#">Edit User Complaints</a></li>
						</ol>
						<div class="box box-block bg-white">
						    
						    <div class="error-div"><?php if(isset($_SESSION['add_user_error_msg'])){ echo $_SESSION['add_user_error_msg']; unset($_SESSION['add_user_error_msg']); } ?></div>

							<form class="form-horizontal" method="post" name="edit_ad" enctype="multipart/form-data">
								<div class="row">
									<div class="col-md-6">
									<div class="form-group">
										<label><b>Name*</b></label>
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Name" name="name" value="<?php echo $internet_pack_details->name; ?>">
										</div>
									</div>
									<div class="form-group">
										<label><b>Mobile*</b></label>
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Mobile" name="phone" value="<?php echo $internet_pack_details->phone; ?>" required>
										</div>
									</div>
									<div class="form-group">
										<label><b>Nature Of Complaint*</b></label>
										<div class="input-group">
											<select id="user_complaintNature" name="user_complaintNature" class="form-control" required>
                                                  <option value="">Choose Nature type</option>
                                                  <option <?php if($internet_pack_details->nature_of_complaint=='Payment Issue'){ echo "selected"; } ?> value="Payment Issue">Payment Issue</option>
                                                  <option <?php if($internet_pack_details->nature_of_complaint=='Technical Issue'){ echo "selected"; } ?> value="Technical Issue">Technical Issue</option>
                                                  <option <?php if($internet_pack_details->nature_of_complaint=='Account Issue'){ echo "selected"; } ?> value="Account Issue">Account Issue</option>
                                                  <option <?php if($internet_pack_details->nature_of_complaint=='Sales Issue'){ echo "selected"; } ?> value="Sales Issue">Sales Issue</option>
                                                  <option <?php if($internet_pack_details->nature_of_complaint=='Not able to use internet'){ echo "selected"; } ?> value="Not able to use internet">Not able to use internet</option>
                                                  <option <?php if($internet_pack_details->nature_of_complaint=='Slow internet speed'){ echo "selected"; } ?> value="Slow internet speed">Slow internet speed</option>
                                                  <option <?php if($internet_pack_details->nature_of_complaint=='Router configuration'){ echo "selected"; } ?> value="Router configuration">Router configuration</option>
                                                  <option <?php if($internet_pack_details->nature_of_complaint=='Online Payment error'){ echo "selected"; } ?> value="Online Payment error">Online Payment error</option>
                                                  <option <?php if($internet_pack_details->nature_of_complaint=='Shifting Request'){ echo "selected"; } ?> value="Shifting Request">Shifting Request</option>
                                                  <option <?php if($internet_pack_details->nature_of_complaint=='Others'){ echo "selected"; } ?> value="Others">Others</option>
                                                </select>
										</div>
									</div>	
									<div class="form-group">
									    <label><b>Description*</b></label>
										<textarea name="description" placeholder="Description" class="form-control" required><?php echo $internet_pack_details->description; ?></textarea>
									</div>
		
									<div class="form-group">
									    <label><b>Complaint Status*</b></label>
										<select name="complaint_status" class="form-control" required>
										    <option value="">Select Request Status</option>
										    <option <?php if($internet_pack_details->complaint_status=='Pending'){ echo "selected"; } ?> value="Pending">Pending</option>
										    <option <?php if($internet_pack_details->complaint_status=='On Progress<'){ echo "selected"; } ?> value="On Progress<">On Progress</option>
										    <option <?php if($internet_pack_details->complaint_status=='Completed'){ echo "selected"; } ?> value="Completed">Completed</option>
										    <option <?php if($internet_pack_details->complaint_status=='Rejected'){ echo "selected"; } ?> value="Rejected">Rejected</option>
										    <option <?php if($internet_pack_details->complaint_status=='On Hold'){ echo "selected"; } ?> value="On Hold">On Hold</option>
										</select>
									</div>
								</div>
								
								<div class="col-md-6">
								    <div class="form-group">
										<label><b>User ID*</b></label>
										<div class="input-group">
											<input type="text" class="form-control" placeholder="User ID" name="user_id" value="<?php echo $internet_pack_details->user_id; ?>" required>
										</div>
									</div>	
								    <div class="form-group">
									    <label><b>Email*</b></label>
									<input type="text" class="form-control" placeholder="Email" name="email" value="<?php echo $internet_pack_details->email; ?>" required>
									</div>
									<div class="form-group">
									    <label><b>Technician</b></label>
									<input type="text" class="form-control" placeholder="Technician" name="technician" value="<?php echo $internet_pack_details->technician; ?>">
									</div>
									<div class="form-group">
									    <label><b>Comments</b></label>
										<textarea name="comments" placeholder="Comments" class="form-control"><?php echo $internet_pack_details->comments; ?></textarea>
									</div>
								</div>
								
								<div class="col-md-12">
									<div class="pull-left">
									<input type="submit" class="btn btn-primary" value="Update Request" name="cus_update_internet_pack">
									</div>
									</div>
						
							</form>
							</div>
						</div>
					</div>
				</div>
		<script type="text/javascript" src="vendor/jquery/jquery-1.12.3.min.js"></script>
		<script type="text/javascript" src="vendor/tether/js/tether.min.js"></script>
		<script type="text/javascript" src="vendor/bootstrap4/js/bootstrap.min.js"></script>
		<script type="text/javascript" src="vendor/detectmobilebrowser/detectmobilebrowser.js"></script>
		<script type="text/javascript" src="vendor/jscrollpane/jquery.mousewheel.js"></script>
		<script type="text/javascript" src="vendor/jscrollpane/mwheelIntent.js"></script>
		<script type="text/javascript" src="vendor/jscrollpane/jquery.jscrollpane.min.js"></script>
		<script type="text/javascript" src="vendor/jquery-fullscreen-plugin/jquery.fullscreen-min.js"></script>
		<script type="text/javascript" src="vendor/waves/waves.min.js"></script>
		<script type="text/javascript" src="vendor/switchery/dist/switchery.min.js"></script>
		<script type="text/javascript" src="vendor/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>
		<script type="text/javascript" src="vendor/autoNumeric/autoNumeric-min.js"></script>
		<script type="text/javascript" src="vendor/dropify/dist/js/dropify.min.js"></script>
		<script type="text/javascript" src="vendor/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js"></script>
		<script type="text/javascript" src="vendor/clockpicker/dist/jquery-clockpicker.min.js"></script>
		<script type="text/javascript" src="vendor/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
		<!-- Neptune JS -->
		<script type="text/javascript" src="js/app.js"></script>
		<script type="text/javascript" src="js/demo.js"></script>
		<script type="text/javascript" src="js/forms-masks.js"></script>
		<script type="text/javascript" src="js/forms-upload.js"></script>
		<script type="text/javascript" src="js/forms-pickers.js"></script>
		</body>
		</html>