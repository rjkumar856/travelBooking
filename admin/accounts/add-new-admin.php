<?php
if(isset($_POST['cus_add_new_user'])){
    try{
		$full_name = htmlentities(trim($_POST['full_name']));
		$password = md5(trim($_POST['password']));
		$email = addslashes(trim($_POST['email']));
		$phone = htmlentities(trim($_POST['phone']));
		$country = htmlentities(trim($_POST['country']));
		$city = htmlentities(trim($_POST['city']));
		$state = htmlentities(trim($_POST['state']));
		$address_1 = htmlentities(trim($_POST['address_1']));
		$pincode = htmlentities(trim($_POST['pincode']));
		$cuscode = time().rand(1,99);
		
		if(empty($password) || empty($full_name) || empty($email) || empty($phone) || empty($country) || empty($city) || empty($state) || empty($address_1)){
		    $_SESSION['add_user_error_msg'] = "<div class='alert alert-danger'><button class='close' data-dismiss='alert'>&times;</button>Please Fill all the Fileds!</div>";
		}else{
		  
    		    $stmt = $reg_user->runQuery("SELECT * FROM tbl_admin_customers WHERE cusEmail='$email'");
    			$stmt->execute();
    			if($stmt->rowCount()){
    			    $_SESSION['add_user_error_msg'] = "<div class='alert alert-danger'><button class='close' data-dismiss='alert'>&times;</button>User Name alredy exist. Please use different User ID!</div>";
    			}else{
    			    $stmt = $reg_user->runQuery("INSERT INTO tbl_admin_customers(cusFname,cusLname,cusPassword,cusEmail,cusPhone,cusDob,cusAddress1,cusCity,cusState,cusCountry,cusPincode,cusCode,role,cusStatus) 
                    VALUES('$full_name','','$password','$email','$phone','','$address_1','$city','$state','$country','$pincode','$cuscode','1','1')");
                    $stmt->execute();
                    $new_user_id = $reg_user->lasdID();
                    
            		$_SESSION['add_user_error_msg'] = "<div class='alert alert-success'><button class='close' data-dismiss='alert'>&times;</button><strong>New Admin User!</strong> Added Successfully.</div>";
            		header("Location: add-new-admin");
            		exit();
    			}
		}
		
		}catch(PDOException $ex){
			$_SESSION['add_user_error_msg'] = "<div class='alert alert-danger'><button class='close' data-dismiss='alert'>&times;</button>".$ex->getMessage()."</div>";
		}
}
include 'include/header.php';
?>
<div class="site-content">
				<div class="content-area py-1">
					<div class="container-fluid">
						<h4>Create New Admin User</h4>
						<ol class="breadcrumb no-bg mb-1">
							<li class="breadcrumb-item"><a href="/view-admin-list">Admin User List</a></li>
							<li class="breadcrumb-item active"><a href="#">Add Admin User</a></li>
						</ol>
						<div class="box box-block bg-white">
						    
						    <div class="error-div"><?php if(isset($_SESSION['add_user_error_msg'])){ echo $_SESSION['add_user_error_msg']; unset($_SESSION['add_user_error_msg']); } ?></div>

							<form class="form-horizontal" method="post" name="edit_ad" enctype="multipart/form-data">
								<div class="row">
									<div class="col-md-6">
									<div class="form-group">
										<label>Full Name*</label>
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Full Name" name="full_name" value="<?php if(isset($_POST['full_name'])){ echo $_POST['full_name']; } ?>" required>
										</div>
									</div>
									<div class="form-group">
										<label>Password*</label>
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Password" name="password" value="<?php if(isset($_POST['password'])){ echo $_POST['password']; } ?>" required>
										</div>
									</div>
									<div class="form-group">
									    <label>Address*</label>
									    <textarea name="address_1" rows="4" class="form-control" placeholder="Address" required><?php if(isset($_POST['address_1'])){ echo $_POST['address_1']; } ?></textarea>
									</div>
									<div class="form-group">
									    <label>Country*</label>
										<select name="country" class="form-control" required>
										<?php
                                				$stmt = $reg_user->runQuery("SELECT * FROM country");
                                				$stmt->execute();
                                				for($i=0; $stmt1 = $stmt->fetchObject(); $i++){ ?>
                                				<option <?php if(isset($_POST['country']) && $_POST['country']==$stmt1->name){ echo "selected"; }else{ echo ""; } ?> value="<?php echo $stmt1->name; ?>"><?php echo $stmt1->name; ?></option>
                                	    <?php } ?>
                                			</select>
									</div>
								</div>
								
								<div class="col-md-6">
									<div class="form-group">
										<label>Email ID*</label>
										<input type="text" placeholder="Email" name="email" class="form-control" value="<?php if(isset($_POST['email'])){ echo $_POST['email']; } ?>" required>
									</div>
									<div class="form-group">
									    <label>Mobile Number*</label>
										<input type="text" placeholder="Mobile" name="phone" class="form-control" value="<?php if(isset($_POST['phone'])){ echo $_POST['phone']; } ?>" required>
									</div>
									<div class="form-group">
									    <label>City*</label>
										<select name="city" class="form-control" required>
										<?php
                                				$stmt = $reg_user->runQuery("SELECT * FROM city");
                                				$stmt->execute();
                                				for($i=0; $stmt1 = $stmt->fetchObject(); $i++){ ?>
                                				<option <?php if(isset($_POST['city']) && $_POST['city']==$stmt1->name){ echo "selected"; }else{ echo ""; } ?> value="<?php echo $stmt1->name; ?>"><?php echo $stmt1->name; ?></option>
                                	    <?php } ?>
                                			</select>
									</div>
									
									<div class="form-group">
									    <label>State*</label>
										<select name="state" class="form-control" required>
										<?php
                                				$stmt = $reg_user->runQuery("SELECT * FROM state");
                                				$stmt->execute();
                                				for($i=0; $stmt1 = $stmt->fetchObject(); $i++){ ?>
                                				<option <?php if(isset($_POST['state']) && $_POST['state']==$stmt1->name){ echo "selected"; }else{ echo ""; } ?> value="<?php echo $stmt1->name; ?>"><?php echo $stmt1->name; ?></option>
                                	    <?php } ?>
                                			</select>
									</div>
									
									<div class="form-group">
									    <label>Pincode</label>
										<input type="text" maxlength="6" placeholder="Pincode" name="pincode" value="<?php if(isset($_POST['pincode'])){ echo $_POST['pincode']; } ?>" class="form-control">
									</div>
								</div>
								
								<div class="col-md-12">
									<div class="pull-left">
									<input type="submit" class="btn btn-primary" value="Add User" name="cus_add_new_user">
									</div>
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