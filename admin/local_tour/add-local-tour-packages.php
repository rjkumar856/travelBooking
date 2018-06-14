<?php

if(isset($_POST['SubmitButton'])){
    try{
		$title = htmlentities(trim($_POST['title']));
		$description = htmlspecialchars(trim($_POST['description']));
		$no_of_people = htmlspecialchars(trim($_POST['no_of_people']));
		$rate_per_people = htmlspecialchars(trim($_POST['rate_per_people']));
		$km_limit = htmlspecialchars(trim($_POST['km_limit']));
		$no_of_days = htmlspecialchars(trim($_POST['no_of_days']));
		
		if(empty($title) || empty($description) || empty($no_of_people) || empty($rate_per_people) || empty($km_limit) || empty($no_of_days) || $_FILES["result_file"]["size"]<1){
		    $_SESSION['add_user_error_msg'] = "<div class='alert alert-danger'><button class='close' data-dismiss='alert'>&times;</button>Please Fill all the Fileds!</div>";
		}else{
		    
		    $target_dir = "../assets/files/local_tour/";
            $target_file = $target_dir . basename($_FILES["result_file"]["name"]);
            $uploadOk = 1;
            $FileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                if($FileType == 'jpg' || $FileType == 'jpeg' || $FileType == 'png' || $FileType == 'gif'){
                    $file_name = time().".".$FileType;
                    $target_file_new = $target_dir . $file_name;
                    if (move_uploaded_file($_FILES["result_file"]["tmp_name"], $target_file_new)){
                        
                        $stmt = $reg_user->runQuery("INSERT INTO local_tour(title,description,no_of_people,rate_per_people,km_limit,no_of_days,image) 
            		    VALUES('$title','$description','$no_of_people','$rate_per_people','$km_limit','$no_of_days','$file_name')");
                        $stmt->execute();
                        
                		$_SESSION['add_user_error_msg'] = "<div class='alert alert-success'><button class='close' data-dismiss='alert'>&times;</button><strong>New Local Tour Packages Details!</strong> Added Successfully.</div>";
                		header("Location: add-local-tour-packages");
                		exit();
                		exit();
                    } else {
                        $_SESSION['add_user_error_msg'] = "<div class='alert alert-danger'><button class='close' data-dismiss='alert'>&times;</button> Sorry, there was an error uploading your file.</div>";
                    }
                    
                }else {
                    $_SESSION['add_user_error_msg'] = "<div class='alert alert-danger'><button class='close' data-dismiss='alert'>&times;</button> Selected file is not a image file.</div>";
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
						<h4>Create New Local Tour Packages</h4>
						<ol class="breadcrumb no-bg mb-1">
							<li class="breadcrumb-item"><a href="view-local-tour-packages">Local Tour Packages List</a></li>
							<li class="breadcrumb-item active"><a href="#">Add Local Tour Packages</a></li>
						</ol>
						<div class="box box-block bg-white">
						    
						    <div class="error-div"><?php if(isset($_SESSION['add_user_error_msg'])){ echo $_SESSION['add_user_error_msg']; unset($_SESSION['add_user_error_msg']); } ?></div>

							<form name="news upload" id="news" action="" method="POST" enctype="multipart/form-data">
							    <div class="row">
							    <div class="col-sm-6">
								<div class="form-group">
									<label for="exampleInputEmail1"><b>Title*</b></label>
									<input type="text" class="form-control" name="title" id="title" placeholder="Enter the Title" value="<?php if(isset($_POST['title'])){ echo $_POST['title']; } ?>" required="required"/>
									<small id="emailHelp" class="form-text text-muted">We'll never share your tours headline with anyone else.</small>
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1"><b>Description*</b></label>
									<textarea name="description" class="form-control" id="description" required placeholder="Enter the Description"><?php if(isset($_POST['description'])){ echo $_POST['description']; } ?></textarea>
								</div>
								
								<div class="form-group">
									<label for="exampleInputPassword1"><b>No. of People</b></label>
									<input type="text" class="form-control" name="no_of_people" id="no_of_people" placeholder="Enter the No. of People" value="<?php if(isset($_POST['no_of_people'])){ echo $_POST['no_of_people']; } ?>" />
								</div>
								</div>
							
								<div class="col-sm-6">
								<div class="form-group">
									<label for="exampleInputPassword1"><b>Rate per People*</b></label>
									<input type="text" class="form-control" name="rate_per_people" id="rate_per_people" placeholder="Enter the Rate per People" value="<?php if(isset($_POST['rate_per_people'])){ echo $_POST['rate_per_people']; } ?>" required="required"/>
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1"><b>Km Limit*</b></label>
									<input type="text " class="form-control" name="km_limit" id="km_limit" placeholder="Enter the Km Limit" value="<?php if(isset($_POST['km_limit'])){ echo $_POST['km_limit']; } ?>" required="required"/>
								</div>
								<div class="form-group">
									<label for="exampleInputPassword1"><b>No of Days*</b></label>
									<input type="text " class="form-control" name="no_of_days" id="no_of_days" placeholder="Enter the No of Days" value="<?php if(isset($_POST['no_of_days'])){ echo $_POST['no_of_days']; } ?>" required="required"/>
								</div>
								
								<div class="form-group">
									<label for="exampleInputFile"><b>Image *(size: 330 X 225 px)</b></label>
									<input type="file" class="form-control-file" name="result_file" id="result_file" accept="image/*" aria-describedby="fileHelp" required="required"/>
									<small id="fileHelp" class="form-text text-muted">Here admin can upload the tours picture.</small>
								</div>
								</div>
								</div>
								<button type="submit"  name="SubmitButton" class="btn btn-primary">Submit</button> &nbsp;
								<button type="reset" class="btn btn-danger">Reset</button>
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