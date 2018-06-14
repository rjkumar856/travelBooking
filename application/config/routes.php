<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'home';
$route['404_override'] = 'error';
$route['translate_uri_dashes'] = FALSE;

$route['aboutus'] = "page/aboutus";
$route['airport_taxi'] = "page/airport_taxi";
$route['blogpost'] = "page/blogpost";
$route['contactus'] = "page/contactus";
$route['honeymoon-details'] = "page/honeymoon_details";
$route['local_taxi'] = "page/local_taxi";
$route['local-details'] = "page/local_details";
$route['north-details'] = "page/north_details";
$route['outstation_one_way_trip'] = "page/outstation_one_way_trip";
$route['outstation_round_trip'] = "page/outstation_round_trip";
$route['outstation_round_trip/search'] = "page/outstation_round_trip_search";
$route['outstation_round_trip/booking'] = "page/outstation_round_trip_booking";
$route['outstation_round_trip/payment'] = "page/outstation_round_trip_payment";

$route['outstation-one-way-trip/search'] = "page/outstation_one_way_trip_search";
$route['outstation_one_way_trip/booking'] = "page/outstation_one_way_trip_booking";
$route['outstation_one_way_trip/payment'] = "page/outstation_one_way_trip_payment";

$route['payemt-sucess'] = "page/payemt_sucess";
$route['payemt-failure'] = "page/payemt_failure";


$route['pilgrimage-details'] = "page/pilgrimage_details";
$route['south-details'] = "page/south_details";

//FORM Submission
$route['outstation-round-trip-submit'] = "form/outstation_round_trip";
$route['outstation-one-way-trip-submit'] = "form/outstation_one_way_trip";
$route['rental-cars-local-taxi-four-submit'] = "form/rental_cars_local_taxi_four";
$route['rental-cars-local-taxi-eight-submit'] = "form/rental_cars_local_taxi_eight";

$route['rental-cars-airport-taxi-submit'] = "form/rental_cars_airport_taxi";
$route['local-tour-package-submit'] = "form/local_tour_package";

/* display round trip cab */
$route['search'] = "page/search";

/*end here */
