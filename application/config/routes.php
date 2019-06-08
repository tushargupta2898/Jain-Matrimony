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
$route['default_controller'] = 'ViewController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
// Without Login Views

$route['register_login'] = 'Welcome/register_login';


//Without login in Functions 
$route['registration'] = 'Welcome/registration';
$route['login'] = 'Welcome/login';
$route['admin_login'] = 'Welcome/admin_login';
$route['adminlogin'] = 'Welcome/adminlogin';
$route['forget_pass'] = 'Welcome/forget_pass';
$route['send_otp'] = 'Welcome/send_otp';
$route['reset_pass'] = 'Welcome/reset_pass';
$route['logout'] = 'Welcome/logout';

// Logged in Views
$route['home'] = 'UserViewController/home';
$route['my_profile'] = 'UserViewController/index';
$route['my_photos'] = 'UserViewController/my_photos';
$route['profile_search'] = 'UserViewController/profile_search';
$route['interest'] = 'UserViewController/interest';
$route['accept_reject'] = 'UserViewController/accept_reject';
$route['full_detail'] = 'UserViewController/full_detail';
$route['forget_pwd'] = 'UserViewController/forget_pwd';

//Logged in Functions 
$route['update_gallery'] = 'UserController/update_gallery';
$route['get_gallery'] = 'UserController/get_gallery';
$route['get_search_profile']='UserController/get_search_profile';
$route['send_interest']='UserController/send_interest';
$route['get_interest']='UserController/get_interest';
$route['action_for_received']='UserController/action_for_received';
$route['profile_photo_update']='UserController/profile_photo_update';
$route['gallery_delete']='UserController/gallery_delete';
$route['update_pwd']='UserController/update_pwd';


$route['update_profile'] = 'UserController/update_profile';


// Logged in Admin Views
$route['dashboard'] = 'AdminController/dashboard';
$route['state'] = 'AdminController/state';
$route['city'] = 'AdminController/city';
$route['cast'] = 'AdminController/cast';
$route['marital_status'] = 'AdminController/marital_status';
$route['sect'] = 'AdminController/sect';
$route['sub_sect'] = 'AdminController/sub_sect';
$route['admin_member_profile'] = 'AdminController/admin_member_profile';
$route['career_status'] = 'AdminController/career_status';
$route['admin_pwd'] = 'AdminController/admin_pwd';
/*$route['my_profile'] = 'UserViewController/index';

$route['profile_search'] = 'UserViewController/profile_search';
$route['interest'] = 'UserViewController/interest';
$route['full_detail'] = 'UserViewController/full_detail';
$route['forget_pwd'] = 'UserViewController/forget_pwd';*/

//Logged in Admin Functions 
$route['get_all_member'] = 'AdminController/get_all_member';
$route['change_admin_pwd'] = 'AdminController/change_admin_pwd';

