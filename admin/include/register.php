<?php 
session_start();
?>
		<link rel="stylesheet" href="vendor/bootstrap4/css/bootstrap.min.css">
		<link rel="stylesheet" href="vendor/themify-icons/themify-icons.css">
		<link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="css/core.css">
	<body class="img-cover" style="background-image: url(img/photos-1/1.jpg);">
		
		<div class="container-fluid">
			<div class="sign-form">
				<div class="row">
					<div class="col-md-4 offset-md-4 px-3">
						<div class="box b-a-0">
							<div class="logodiv">
								<img src="img/lrlogo.png">
							</div>
							<form action="register_db" method="post" enctype="multipart/form-data" class="form-material">
							<?php 
if(isset($_SESSION['userExist'])) 
{ ?>
<div class='alert alert-warning'>
<button class='close' data-dismiss='alert'>&times;</button>
<?php echo $_SESSION['userExist']; ?>
</div>
<?php 
unset($_SESSION['userExist']);
}

if(isset($_SESSION['userRegistered'])) 
{ ?>
<div class='alert alert-success'>
<button class='close' data-dismiss='alert'>&times;</button>
<?php echo $_SESSION['userRegistered']; ?>
</div>
<?php 
unset($_SESSION['userRegistered']);
}

?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
<script>
$(document).ready(function(){
$( "#cpassword" ).blur(function() {
var pass = $("#password").val();
var cpass = $("#cpassword").val();
if(pass != cpass){
$("#pass1").text("Password Dint Match");
}
else
{
$("#pass1").text("");
}
});
});
</script>
<p id="pass1" style="color: red"></p>
								<div class="form-group">
									<input type="text" class="form-control" name="fname" value="" id="input-fname" placeholder="Username" required="required" >
								</div>
								<div class="form-group">
									<input type="email" class="form-control" name="email" value="" id="input-email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="Email" required="required" >
								</div>
								<div class="form-group">
									<input type="password" name="cpassword" value="" id="cpassword" placeholder="Password"  class="form-control" required="required" >
								</div>
								<div class="form-group mb-3">
									<input type="password" name="password" value="" id="password" class="form-control" placeholder="Confirm password" required="required" >
								</div>
								<div class="px-2 form-group mb-0">
									<button t type="submit" value="Register" name="register" class="btn btn-purple btn-block text-uppercase">Sign up</button>
								</div>
							</form>
							<div class="p-2 text-xs-center text-muted">
								Already have an account? <a class="text-black" href="login"><span class="underline">Sign in</span></a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script type="text/javascript" src="vendor/jquery/jquery-1.12.3.min.js"></script>
		<script type="text/javascript" src="vendor/tether/js/tether.min.js"></script>
		<script type="text/javascript" src="vendor/bootstrap4/js/bootstrap.min.js"></script>
