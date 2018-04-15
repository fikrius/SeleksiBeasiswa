<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['default_controller'] = 'beasiswa/view';
$route['(:any)'] = 'beasiswa/view/$1';

$route['admin'] = 'admin';

$route['mahasiswa'] = 'mahasiswa/view';
$route['mahasiswa/(:any)'] = 'mahasiswa/view/$1'; 

$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
