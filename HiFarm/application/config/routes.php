<?php
defined('BASEPATH') OR exit('No direct script access allowed');

// Proses Login
$route['login'] = 'main_page/login';

$route['home_user'] = 'main_page/home_user';

$route['default_controller'] = 'main_page';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
