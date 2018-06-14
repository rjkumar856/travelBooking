<?php 
if(isset($_GET['id']) && !empty($_GET['id'])){
$usrid = $_GET['id'];
}else{
    header("Location: user-list");
}

if(isset($_POST['cus_update_user'])){
    try{
        $user_id = addslashes(trim($_POST['user_id']));
		$full_name = htmlentities(trim($_POST['full_name']));
		$password = md5(trim($_POST['password']));
		$email = addslashes(trim($_POST['email']));
		$phone = htmlentities(trim($_POST['phone']));
		$city = htmlentities(trim($_POST['city']));
		$address = htmlentities(trim($_POST['address']));
		$course_type = htmlentities(trim($_POST['course_type']));
		$user_role = implode(',',$_POST['user_role']);
		    
		if(empty($user_id) || empty($full_name) || empty($email) || empty($phone) || empty($city) || empty($address) || empty($course_type)){
		    $_SESSION['add_user_error_msg'] = "<div class='alert alert-danger'><button class='close' data-dismiss='alert'>&times;</button>Please Fill all the Fileds!</div>";
		}else{
    			    $stmt = $reg_user->runQuery("UPDATE user SET userid='$user_id',full_name='$full_name',email='$email',phone='$phone',course_type='$course_type',
    			    address='$address',city='$city',role='$user_role' WHERE id='$usrid'");
                    $stmt->execute();
            		$_SESSION['add_user_error_msg'] = "<div class='alert alert-success'><button class='close' data-dismiss='alert'>&times;</button><strong>User Details!</strong> Updated Successfully.</div>";
            		header("Location: edit-user-list?id=".$usrid);
            		exit();
		}
		
		}catch(PDOException $ex){
			$_SESSION['add_user_error_msg'] = "<div class='alert alert-danger'><button class='close' data-dismiss='alert'>&times;</button>".$ex->getMessage()."</div>";
		}
}

include 'include/header.php';
$stmt_user = $reg_user->runQuery("SELECT * FROM user WHERE id='$usrid'");
$stmt_user->execute();
$row_user = $stmt_user->fetch(PDO::FETCH_ASSOC);
?>
<div class="site-content">
				<div class="content-area py-1">
					<div class="container-fluid">
						<h4>Update User List Details</h4>
						<ol class="breadcrumb no-bg mb-1">
							<li class="breadcrumb-item"><a href="user-list">User List</a></li>
							<li class="breadcrumb-item active"><a href="#">Edit User</a></li>
						</ol>
						<div class="box box-block bg-white">
						<div class="error-div"><?php if(isset($_SESSION['add_user_error_msg'])){ echo $_SESSION['add_user_error_msg']; unset($_SESSION['add_user_error_msg']); } ?></div>

							<form class="form-horizontal" method="post" name="edit_ad" enctype="multipart/form-data">
								<div class="row">
									<div class="col-md-6">
									<div class="form-group">
										<label><b>User ID</b></label>
										<div class="input-group">
											<input type="text" class="form-control" placeholder="User Name" name="user_id" value="<?php echo $row_user['userid']; ?>">
										</div>
									</div>
									<div class="form-group">
										<label><b>Full Name*</b></label>
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Full Name" name="full_name" value="<?php echo $row_user['full_name']; ?>" required>
										</div>
									</div>
									<div class="form-group">
										<label><b>Password</b></label>
										<div class="input-group">
											<input type="text" class="form-control" placeholder="Password" name="password">
										</div>
									</div>	
									<div class="form-group">
									    <label><b>Phone*</b></label>
										<input type="text" placeholder="Phone" name="phone" class="form-control" value="<?php echo $row_user['phone']; ?>" required>
									</div>
		
									<div class="form-group">
									    <label><b>Address*</b></label>
									    <textarea name="address" rows="4" class="form-control" placeholder="Address" required><?php echo $row_user['address']; ?></textarea>
									</div>
								</div>
								
								<div class="col-md-6">
									<div class="form-group">
										<label><b>Email*</b></label>
										<input type="text" placeholder="Email" name="email" class="form-control" value="<?php echo $row_user['email']; ?>" required>
									</div>
									
									<div class="form-group">
									    <label><b>City*</b></label>
										<input type="text" placeholder="City" name="city" class="form-control" value="<?php echo $row_user['city']; ?>" required>
									</div>

									<div class="form-group">
									    <label><b>Course Type</b></label>
                                			<select name="course_type" id="course_type" class="form-control" required="true">
                                           <option value="" selected="">Select Course</option>
                                           <option <?php if($row_user['course_type'] == "For Under Graduates"){ echo "selected"; } ?> value="For Under Graduates">For Under Graduates</option>
                                           <option <?php if($row_user['course_type'] == "SSC (CGL) (Graduate)"){ echo "selected"; } ?> value="SSC (CGL) (Graduate)">SSC (CGL) (Graduate)</option>
                                           <option <?php if($row_user['course_type'] == "ABACUS"){ echo "selected"; } ?> value="ABACUS">ABACUS (Primary school)</option>
                                           <option <?php if($row_user['course_type'] == "IBPS (GRD)"){ echo "selected"; } ?> value="IBPS (GRD)">IBPS (Graduate)</option>
                                           <option <?php if($row_user['course_type'] == "Scholarship (MTSE)"){ echo "selected"; } ?> value="Scholarship (MTSE)">Scholarship (MTSE)</option>
                                           <option <?php if($row_user['course_type'] == "SSC (CHSL) (Under Graduate)"){ echo "selected"; } ?> value="SSC (CHSL) (Under Graduate)">SSC (CHSL) (Under Graduate)</option>
                                           <option <?php if($row_user['course_type'] == "RBI (Graduate)"){ echo "selected"; } ?> value="RBI (Graduate)">RBI (Graduate)</option>
                                           <option <?php if($row_user['course_type'] == "SBI (Graduate)"){ echo "selected"; } ?> value="SBI (Graduate)">SBI (Graduate)</option>
                                           <option <?php if($row_user['course_type'] == "Scholarship (NTSE)"){ echo "selected"; } ?> value="Scholarship (NTSE)">Scholarship (NTSE)</option>
                                           <option <?php if($row_user['course_type'] == "Scholarship (Std 5th)"){ echo "selected"; } ?> value="Scholarship (Std 5th)">Scholarship (Std 5th)</option>
                                           <option <?php if($row_user['course_type'] == "Scholarship (Std 8th)"){ echo "selected"; } ?> value="Scholarship (Std 8th)">Scholarship (Std 8th)</option>
                                           <option <?php if($row_user['course_type'] == "Young IAS Club Level I"){ echo "selected"; } ?> value="Young IAS Club Level I">Young IAS Club Level I</option>
                                           <option <?php if($row_user['course_type'] == "Rajya Seva (English)"){ echo "selected"; } ?> value="Rajya Seva (English)">Rajya Seva (English)</option>
                                           <option <?php if($row_user['course_type'] == "PSI"){ echo "selected"; } ?> value="PSI">PSI</option>
                                           <option <?php if($row_user['course_type'] == "GS (Pre - Mains)"){ echo "selected"; } ?> value="GS (Pre - Mains)">GS (Pre - Mains)</option>
                                           <option <?php if($row_user['course_type'] == "Others"){ echo "selected"; } ?> value="Others">Others</option>
                                           <option <?php if($row_user['course_type'] == "Prelim Paper 1 GS Online"){ echo "selected"; } ?> value="Prelim Paper 1 GS Online">Prelim Paper 1 GS (Online)</option>
                                           <option <?php if($row_user['course_type'] == "Prelim Paper 2 CSAT Online"){ echo "selected"; } ?> value="Prelim Paper 2 CSAT Online">Prelim Paper 2 CSAT (Online)</option>
                                           <option <?php if($row_user['course_type'] == "Test Series - Prelim GS (Online)"){ echo "selected"; } ?> value="Test Series - Prelim GS (Online)">Test Series - Prelim GS (Online)</option>
                                           <option <?php if($row_user['course_type'] == "Test Series Mains GS (Online)"){ echo "selected"; } ?> value="Test Series Mains GS (Online)">Test Series - Mains GS (Online)</option>
                                           <option <?php if($row_user['course_type'] == "Test Series Optional (Online)"){ echo "selected"; } ?> value="Test Series Optional (Online)">Test Series - Optional (Online)</option>
                                           <option <?php if($row_user['course_type'] == "Daily MCQ Tests (online)"){ echo "selected"; } ?> value="Daily MCQ Tests (online)">Daily MCQ Tests (Current Affairs)</option>
                                           <option <?php if($row_user['course_type'] == "Mentorship online"){ echo "selected"; } ?> value="Mentorship online">Mentorship (Online)</option>
                                           <option <?php if($row_user['course_type'] == "For Undergraduates (Online)"){ echo "selected"; } ?>  value="For Undergraduates (Online)">For Undergraduates (Online)</option>
                                           <option <?php if($row_user['course_type'] == "Interview Training"){ echo "selected"; } ?> value="Interview Training">Interview Training</option>
                                           <option <?php if($row_user['course_type'] == "AIr Force Common Admission Test"){ echo "selected"; } ?> value="AIr Force Common Admission Test">AIr Force Common Admission Test</option>
                                           <option <?php if($row_user['course_type'] == "Combined Defence Services"){ echo "selected"; } ?> value="Combined Defence Services">Combined Defence Services</option>
                                           <option <?php if($row_user['course_type'] == "National Defence Academy"){ echo "selected"; } ?> value="National Defence Academy">National Defence Academy</option>
                                           <option <?php if($row_user['course_type'] == "Test Series Prelim CSAT (Online)"){ echo "selected"; } ?> value="Test Series Prelim CSAT (Online)">Test Series - Prelim CSAT (Online)</option>
                                           <option <?php if($row_user['course_type'] == "Young IAS Club Level II"){ echo "selected"; } ?> value="Young IAS Club Level II">Young IAS Club Level II</option>
                                           <option <?php if($row_user['course_type'] == "MPSC free Daily test"){ echo "selected"; } ?> value="MPSC free Daily test">MPSC free Daily test</option>
                                           <option <?php if($row_user['course_type'] == "SSC/Banking - Daily Test"){ echo "selected"; } ?> value="SSC/Banking - Daily Test">SSC/Banking - Daily Test</option>
                                           <option <?php if($row_user['course_type'] == "Prelims paper II (CSAT) 2018"){ echo "selected"; } ?> value="Prelims paper II (CSAT) 2018">Prelims paper II (CSAT) 2018</option>
                                           <option <?php if($row_user['course_type'] == "Prelims paper I (GS) 2018"){ echo "selected"; } ?> value="Prelims paper I (GS) 2018">Prelims paper I (GS) 2018</option>
                                           <option <?php if($row_user['course_type'] == "Daily MCQ Test (GS)"){ echo "selected"; } ?> value="Daily MCQ Test (GS)">Daily MCQ Test (GS)</option>
                                           <option <?php if($row_user['course_type'] == "Optional Geography- 2018"){ echo "selected"; } ?> value="Optional Geography- 2018">Optional Geography- 2018</option>
                                           <option <?php if($row_user['course_type'] == "GS (Prelims) 2018"){ echo "selected"; } ?> value="GS (Prelims) 2018">GS (Prelims) 2018</option>
                                           <option <?php if($row_user['course_type'] == "UPSC (Hindi)"){ echo "selected"; } ?> value="UPSC (Hindi)">UPSC (Hindi)</option>
                                           <option <?php if($row_user['course_type'] == "Rajya Seva (Marathi)"){ echo "selected"; } ?> value="Rajya Seva (Marathi)">Rajya Seva (Marathi)</option>
                                           <option <?php if($row_user['course_type'] == "Online-Defence Services"){ echo "selected"; } ?> value="Online-Defence Services">Online - Defence Services</option>
                                        </select>
									</div>
									<div class="form-group">
									    <label><b>Role (Permissions)*</b></label>
									    <? $user_role = explode(",",$row_user['role']);  ?>
									    <select multiple name="user_role[]" class="form-control">
									          <option <?php if(in_array("1",$user_role)){ echo "selected"; } ?> value="1">Prelims Online Test</option>
                                              <option <?php if(in_array("2",$user_role)){ echo "selected"; } ?> value="2">Mains Online Test</option>
                                              <option <?php if(in_array("3",$user_role)){ echo "selected"; } ?> value="3">Optional Online Test</option>
                                            </select>
                                            <p>To select the multiple option, Press CRTL and select the Option!</p>
									</div>
								</div>
								<div class="col-md-12">
									<div class="pull-left">
									<input type="submit" class="btn btn-primary" value="Update User" name="cus_update_user">
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
        </body>
		</html>