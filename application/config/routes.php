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
$route['website-design-development-company-melbourne'] = 'about';
$route['contact-us'] = 'contact_us';
$route['our-work'] = 'our_work';
// industries pages
$route['More-Industries'] = 'more_industrie';
$route['Accountants-Web-Design'] = 'accountants';
$route['Education-and-School-Web-Design'] = 'e_school';
$route['Fashion-and-Retail-Web-Design'] = 'f_retail';
$route['Hosptial-and-Medical-Web-Design'] = 'h_medical';
$route['Hotel-Web-Designing'] = 'hotel';
$route['HRMS-Web-Design'] = 'hrms';
$route['Lawyers-web-design'] = 'lawyers';
$route['Real-Estate-Web-Design'] = 'realestate';
$route['Recruitment-and-Consultancy-Web-Design'] = 'r_consultancy';
$route['Restaurant-Website-Design'] = 'restaurant';
$route['Tour-and-Travel-web-design'] = 'tourtravel';
// industries pages end
$route['terms-conditions'] = 'term_condition';
$route['privacy-policy'] = 'privacy_policy';
$route['mobile-app-development-service-melbourne'] = 'mobileapp';
$route['website-design-development-service-melbourne'] = 'developmentservice';
$route['software-development-service-melbourne'] = 'softdevelopservice';
$route['digital-marketing-agency-melbourne'] = 'marketingservice';
$route['default_controller'] = 'home';
$route['404_override'] = 'Custom404';
$route['translate_uri_dashes'] = TRUE;
