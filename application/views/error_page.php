<?php
$activepage="error";
require_once('common/header.php');
?>
<section class="content error-page">
		<div class="container">
		<span class="error-heading1">4<i class="fa fa-smile-o" aria-hidden="true"></i>4</span>
		<span class="error-heading2">Page Not Found!</span>
		<p>It looks like that page no longer exists. Would you like to go to <a href="<?php echo base_url(); ?>">homepage</a> instead?</p>
		</div>
	</section>
	  <?php include("common/footer.php"); ?>
   </body>
</html>