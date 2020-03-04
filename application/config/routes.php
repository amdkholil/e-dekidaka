<?php
defined('BASEPATH') OR exit('No direct script access allowed');

$route['api'] = 'Api/index';
$route['api'] = 'Api/lines';


$route['dashboard'] = 'Dashboard/index';
$route['about'] = 'About/index';


$route['pengaturan'] = 'Pengatur/index';

$route['plan'] = 'Plan/index';

$route['pengaturan/line'] = 'Pengatur/line';
$route['pengaturan/line/add'] = 'Pengatur/add_line';
$route['pengaturan/line/edit'] = 'Pengatur/edit_line';
$route['pengaturan/line/del/(:any)'] = 'Pengatur/hapus_line/$1';

$route['pengaturan/breakdown'] = 'Pengatur/breakdown';
$route['pengaturan/breakdown/add'] = 'Pengatur/add_bm';
$route['pengaturan/breakdown/edit'] = 'Pengatur/edit_bm';
$route['pengaturan/breakdown/del/(:any)'] = 'Pengatur/hapus_bm/$1';

$route['pengaturan/nogood'] = 'Pengatur/noGood';
$route['pengaturan/nogood/add'] = 'Pengatur/add_ng';
$route['pengaturan/nogood/edit'] = 'Pengatur/edit_ng';
$route['pengaturan/nogood/del/(:any)'] = 'Pengatur/hapus_ng/$1';

$route['pengaturan/model'] = 'Pengatur/model';
$route['pengaturan/model/add'] = 'Pengatur/add_model';
$route['pengaturan/model/edit'] = 'Pengatur/edit_model';
$route['pengaturan/model/del/(:any)'] = 'Pengatur/hapus_model/$1';

$route['produksi'] = 'Produksi/index';
$route['produksi/line/(:any)'] = 'Produksi/line/$1';
$route['produksi/buatform'] = 'Produksi/buatform';
$route['produksi/dekidaka/(:any)'] = 'Produksi/dekidaka/$1';

$route['dekidaka/addprod'] = 'Produksi/addprod';
$route['dekidaka/editprod'] = 'Produksi/editprod';
$route['dekidaka/delprod/(:num)'] = 'Produksi/delprod/$1';

$route['dekidaka/addng'] = 'Produksi/addng';
$route['dekidaka/editng'] = 'Produksi/editng';
$route['dekidaka/delng/(:num)'] = 'Produksi/delng/$1';

$route['dekidaka/addbm'] = 'Produksi/addbm';
$route['dekidaka/editbm'] = 'Produksi/editbm';
$route['dekidaka/delbm/(:num)'] = 'Produksi/delbm/$1';

$route['default_controller'] = 'Dashboard';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
