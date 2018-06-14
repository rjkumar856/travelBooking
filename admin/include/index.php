<?php 
ob_start();
$reg_user = new USER(); 
if (!isset($_SESSION['userSession'])) {
 header('location:login');
}
include("header.php");
?>
<link rel="stylesheet" href="css/jquery.Jcrop.min.css" type="text/css" />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<link rel="stylesheet" href="<?php echo DIR_SYSTEM; ?>css/imgareaselect.css">
<style>
.u-img.img-cover{background: url(images/logo.png) #cecece center;background-repeat: no-repeat;}
.shadow-white {-webkit-box-shadow: 0 0 0 1px #fff !important;box-shadow: 0 0 0 1px #fff !important;padding: 10px;background: #d4d4d4;}
.zc-ref {display: none;}
.nav-tabs>li>a {border-color: #014373;color:#000000;padding: 10px;}
.nav-tabs>li.active>a, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus {color: #fff;background-color: #014373;border: 1px solid #014373;padding: 10px;}
ul.nav.nav-tabs li {background: #99d1f9;}
.nav-tabs>li>a:hover {border-color: #014373;background-color: #014373;color:white;}
.nav-tabs > li, .nav-pills > li {float:none;display:inline-block;*display:inline; /* ie7 fix */zoom:1;padding: 10px 0 10px 0;}
.nav-tabs, .nav-pills {text-align:center;}
.nav-tabs {border-bottom: 2px solid #014373;}
.img-center {margin:0 auto;padding: 15px;}
.col-md-6 {padding: 15px;}
.new-row {clear: left;}
.tab-content {padding: 20px;}
.no-title-col {padding-top: 30px;}
a.btn.btn-primary {padding: 10px 25px 10px 25px;font-size: 15px;background: #014373;}
</style>
<div class="site-content">
<!-- Content -->
<div class="content-area py-1">
                    <div class="container-fluid">
                        <div class="row row-md mb-1">

                            <div class="col-md-4">
                                <div class="box bg-white user-1">
                                    <div class="u-img img-cover" style="background-image: url(images/logo-travel.png);"></div>
                                    <div class="u-content">
                                        <div class="avatar box-64">
                                        </div>
                                        <h5><a class="text-black" href="#"><?php echo $logged_in_result->cusFname;?></a></h5>
                                        <p class="text-muted pb-0-5" style="text-transform:uppercase"><?php if($logged_in_result->role == 1)echo "Admin";?></p>
                                    </div>
                                </div>
                            </div> 
                        </div><hr/>
                </div>
<?php include("footer.php"); ?>
</body>
</html>