<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['posts'] = 'posts/index';
$route['posts/create'] = 'posts/create';
$route['posts/update'] = 'posts/update';
$route['default_controller'] = 'pages';
$route['posts/(:any)'] = 'posts/view/$1';
$route['(:any)'] = 'pages/$1';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
