<?php
$this->load->view('common/header');
?>
<section class="content contact-us login-page">
		<div class="container">
		<h3>Reset Password</h3>
            <div class="col-xs-12 contact-left">
            <div class="form">
            <div class="alert alert-danger" id="login_send_login_error" style="<?php if(validation_errors()){ echo 'display: block;'; }else{ echo 'display: none;'; } ?>">
                <?php if(validation_errors()){echo validation_errors();} ?></div>
            <div class="alert alert-success" style="<?php if(isset($message)){ echo 'display: block;'; }else{ echo 'display: none;'; } ?>">
                <?php if(isset($message)){ echo $message;} ?></div>
            <div class="alert alert-success" style="<?php if($this->session->flashdata('message')){ echo 'display: block;'; }else{ echo 'display: none;'; } ?>">
                <?php if($this->session->flashdata('message')){ echo $this->session->flashdata('message'); } ?></div>
                    <form method="POST" enctype="multipart/form-data" action="/forgot_password" >
                        <div id="contact_View_inquiry_popup_msg_container">
                        <div class="form-group">
                        <span>User Name/Email*</span>
                        <input type="text" name="user_name" id="login_user_name" value="<?php if(set_value('user_name')) {echo set_value('user_name'); } ?>" class="input" placeholder="User Name/Email" >
                        </div>
                        <div class="form-group">
                        <input type="submit" name="login_to_client" class="submit" value="Send Request" id="login_to_client_login">
                        </div>
                        </div>
                    </form>
            </div>
            </div>
        </div>
</section>
<?php $this->load->view('common/footer'); ?>
      <script src="assets/js/bootstrap/3.3.7/js/bootstrap.min.js"></script>
      <script type="text/javascript" src="assets/js/slick.min.js"></script>
      <script type="text/javascript" src="assets/js/script.js"></script>
      <script type="text/javascript" src="assets/js/jquery.validate.js"></script>
   </body>
</html>