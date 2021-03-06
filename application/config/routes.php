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
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
$route['get_yacht_state/(:num)']  = 'home/getYachtState/$1';
$route['get_yacht_departure_city/(:any)/(:any)/(:any)/(:any)/(:any)/(:any)'] = 'home/getYachtDepartureCity/$1/$2/$3/$4/$5/$6';
$route['get_yacht_arrival_city/(:any)/(:any)/(:any)/(:any)/(:any)/(:any)/(:any)'] = 'home/getYachtArrivalCity/$1/$2/$3/$4/$5/$6/$7';
$route['yachts'] = 'home/yachts';
$route['yachts_details/(:num)'] = 'home/yachts_details/$1';
$route['booking'] = 'home/booking';
$route['chauffeur-service'] = 'home/chauffeur_services';
$route['login'] = 'home/login';
$route['product-for-sale'] = 'home/product_for_sale';
$route['product-for-sale-detail'] = 'home/product_for_sale_detail';
$route['car-booking'] = 'home/car_booking';
$route['car-search'] = 'home/car_search';
$route['car-search-result'] = 'home/car_search_result';
$route['terms-and-condition'] = 'home/terms_and_condition';
$route['privacy-policy'] = 'home/privacy_policy';
$route['faq'] = 'home/faq';
$route['charter-fleet-guide'] = 'home/charter_fleet_guide';
$route['choose-vehicle'] = 'home/choose_vehicle';
$route['contract'] = 'home/contract';
$route['customer-information'] = 'home/customer_information';
$route['dashboard'] = 'home/dashboard';
$route['food-and-drinks'] = 'home/food_and_drinks';
$route['limousine-services'] = 'home/limousine_services';
$route['payment'] = 'home/payment';
$route['search'] = 'home/search';
$route['search-result'] = 'home/search_result';
$route['yacht-booking'] = 'home/yacht_booking';
$route['yacht-booking-info'] = 'home/yacht_booking_info';