<?php
defined('BASEPATH') or exit('No direct script access allowed');

$route['page/menu/(:any)/(:any)'] = 'page/menu/$1/$2';
$route['default_controller'] = 'page/menu';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
