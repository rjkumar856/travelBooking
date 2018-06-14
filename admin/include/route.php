<?php
if(!session_id()){
session_start();
}
ob_start();

ini_set("date.timezone", "Asia/Kolkata");
include DIR_APPLICATION.'include/db.php';
$reg_user = new USER1();
require_once(DIR_APPLICATION.'include/class.user.php');
//$id = $_GET['id'];

$url = strtok(rtrim($_SERVER['REQUEST_URI'], "/"), "?");
$ur = explode("/", $url);
$last_url = array_pop($ur);

if(isset($_SESSION['userSession'])) {

if($last_url === "") {
include DIR_APPLICATION.'include/index.php';
}else if($last_url === "index") {
include DIR_APPLICATION.'include/index.php';
}elseif ($last_url === "login") {
include DIR_APPLICATION.'include/login.php';
}elseif ($last_url === "register") {
include DIR_APPLICATION.'include/register.php';
}elseif ($last_url === "register_db") {
include DIR_APPLICATION.'include/register_db.php'; 
}elseif ($last_url === "header") {
include DIR_APPLICATION.'include/header.php';
}elseif ($last_url === "style") {
include DIR_APPLICATION.'include/style.php';
}elseif ($last_url === "class.user") {
include DIR_APPLICATION.'include/class.user.php';
}elseif ($last_url === "dbconfig") {
include DIR_APPLICATION.'include/dbconfig.php';
}elseif ($last_url === "db") {
include DIR_APPLICATION.'include/db.php'; 
}elseif ($last_url === "login_db") {
include DIR_APPLICATION.'include/login_db.php';
}elseif ($last_url === "logout") {
include DIR_APPLICATION.'include/logout.php';
}

//USER LIST
elseif ($last_url === "user-list") {
include DIR_APPLICATION.'userlist/user-list.php';
}elseif ($last_url === "edit-user-list") {
include DIR_APPLICATION.'userlist/edit-user-list.php';
}elseif ($last_url === "userstatusupdate") {
include DIR_APPLICATION.'userlist/userstatusupdate.php';
}

//REQUEST
elseif ($last_url === "view-new-admission") {
include DIR_APPLICATION.'complaints/view-new-admission.php';
}elseif ($last_url === "view-user-enquiry-request") {
include DIR_APPLICATION.'complaints/view-user-enquiry-request.php';
}elseif ($last_url === "view-subscribe-list") {
include DIR_APPLICATION.'complaints/view-subscribe-list.php';
}

//outstation Round
elseif ($last_url === "view-popular-vehicle-round") {
include DIR_APPLICATION.'outstation/view-popular-vehicle-round.php';
}elseif ($last_url === "add-popular-vehicle-round") {
include DIR_APPLICATION.'outstation/add-popular-vehicle-round.php';
}elseif ($last_url === "edit-popular-vehicle-round") {
include DIR_APPLICATION.'outstation/edit-popular-vehicle-round.php';
}elseif ($last_url === "view-enquiry-round") {
include DIR_APPLICATION.'outstation/view-enquiry-round.php';
}

//outstation One Way
elseif ($last_url === "view-popular-vehicle-one") {
include DIR_APPLICATION.'outstation/view-popular-vehicle-one.php';
}elseif ($last_url === "add-popular-vehicle-one") {
include DIR_APPLICATION.'outstation/add-popular-vehicle-one.php';
}elseif ($last_url === "edit-popular-vehicle-one") {
include DIR_APPLICATION.'outstation/edit-popular-vehicle-one.php';
}elseif ($last_url === "view-enquiry-one") {
include DIR_APPLICATION.'outstation/view-enquiry-one.php';
}

//Local Taxi
elseif ($last_url === "view-popular-vehicle-local") {
include DIR_APPLICATION.'local_taxi/view-popular-vehicle-local.php';
}elseif ($last_url === "add-popular-vehicle-local") {
include DIR_APPLICATION.'local_taxi/add-popular-vehicle-local.php';
}elseif ($last_url === "edit-popular-vehicle-local") {
include DIR_APPLICATION.'local_taxi/edit-popular-vehicle-local.php';
}elseif ($last_url === "view-enquiry-local") {
include DIR_APPLICATION.'local_taxi/view-enquiry-local.php';
}

//Airport Taxi
elseif ($last_url === "view-popular-vehicle-airport") {
include DIR_APPLICATION.'airport_taxi/view-popular-vehicle-airport.php';
}elseif ($last_url === "add-popular-vehicle-airport") {
include DIR_APPLICATION.'airport_taxi/add-popular-vehicle-airport.php';
}elseif ($last_url === "edit-popular-vehicle-airport") {
include DIR_APPLICATION.'airport_taxi/edit-popular-vehicle-airport.php';
}elseif ($last_url === "view-enquiry-airport") {
include DIR_APPLICATION.'airport_taxi/view-enquiry-airport.php';
}


//Local Tour Packages
elseif ($last_url === "view-local-tour-packages") {
include DIR_APPLICATION.'local_tour/view-local-tour-packages.php';
}elseif ($last_url === "add-local-tour-packages") {
include DIR_APPLICATION.'local_tour/add-local-tour-packages.php';
}elseif ($last_url === "edit-local-tour-packages") {
include DIR_APPLICATION.'local_tour/edit-local-tour-packages.php';
}elseif ($last_url === "view-enquiry-local") {
include DIR_APPLICATION.'local_tour/view-enquiry-local.php';
}


//South India Packages
elseif ($last_url === "view-south-india-packages") {
include DIR_APPLICATION.'south_india/view-south-india-packages.php';
}elseif ($last_url === "add-south-india-packages") {
include DIR_APPLICATION.'south_india/add-south-india-packages.php';
}elseif ($last_url === "edit-south-india-packages") {
include DIR_APPLICATION.'south_india/edit-south-india-packages.php';
}elseif ($last_url === "view-enquiry-south") {
include DIR_APPLICATION.'south_india/view-enquiry-south.php';
}


//North India Packages
elseif ($last_url === "view-north-india-packages") {
include DIR_APPLICATION.'north_india/view-north-india-packages.php';
}elseif ($last_url === "add-north-india-packages") {
include DIR_APPLICATION.'north_india/add-north-india-packages.php';
}elseif ($last_url === "edit-north-india-packages") {
include DIR_APPLICATION.'north_india/edit-north-india-packages.php';
}elseif ($last_url === "view-enquiry-north") {
include DIR_APPLICATION.'north_india/view-enquiry-north.php';
}


//Honeymoon India Packages
elseif ($last_url === "view-honey-moon-packages") {
include DIR_APPLICATION.'honey_moon/view-honey-moon-packages.php';
}elseif ($last_url === "add-honey-moon-packages") {
include DIR_APPLICATION.'honey_moon/add-honey-moon-packages.php';
}elseif ($last_url === "edit-honey-moon-packages") {
include DIR_APPLICATION.'honey_moon/edit-honey-moon-packages.php';
}elseif ($last_url === "view-enquiry-honeymoon") {
include DIR_APPLICATION.'honey_moon/view-enquiry-honeymoon.php';
}


//Pilgrimage India Packages
elseif ($last_url === "view-pilgrimage-packages") {
include DIR_APPLICATION.'pilgrimage_pack/view-pilgrimage-packages.php';
}elseif ($last_url === "add-pilgrimage-packages") {
include DIR_APPLICATION.'pilgrimage_pack/add-pilgrimage-packages.php';
}elseif ($last_url === "edit-pilgrimage-packages") {
include DIR_APPLICATION.'pilgrimage_pack/edit-pilgrimage-packages.php';
}elseif ($last_url === "view-enquiry-pilgrimage") {
include DIR_APPLICATION.'pilgrimage_pack/view-enquiry-pilgrimage.php';
}






//ADMIN
elseif ($last_url === "view-admin-list") {
include DIR_APPLICATION.'accounts/view-admin-list.php';
}elseif ($last_url === "add-new-admin") {
include DIR_APPLICATION.'accounts/add-new-admin.php';
}elseif ($last_url === "view-sales-list") {
include DIR_APPLICATION.'accounts/view-sales-list.php';
}elseif ($last_url === "add-new-salesman") {
include DIR_APPLICATION.'accounts/add-new-salesman.php';
}elseif ($last_url === "adminuserstatusupdate") {
include DIR_APPLICATION.'accounts/adminuserstatusupdate.php';
}elseif ($last_url === "salesupdatestatus") {
include DIR_APPLICATION.'accounts/salesupdatestatus.php';
}elseif ($last_url === "edit-admin-list") {
include DIR_APPLICATION.'accounts/edit-admin-list.php';
}elseif ($last_url === "edit-sales-list") {
include DIR_APPLICATION.'accounts/edit-sales-list.php';
}

else{
include DIR_APPLICATION.'include/index.php';
}

}elseif ($last_url === "login_db") {
include DIR_APPLICATION.'include/login_db.php';
}elseif ($last_url === "logout") {
include DIR_APPLICATION.'include/logout.php';
}elseif ($last_url === "login") {
include DIR_APPLICATION.'include/login.php';
}else{
include DIR_APPLICATION.'include/login.php';
}
?>