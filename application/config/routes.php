<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Welcome';
$route['table'] = 'Welcome/table';

$route['sign_in'] = 'Welcome/sign_in';
$route['dashbord'] = 'Welcome/dashbord';
$route['addmasters'] = 'Welcome/add_masters';
$route['add_design_index'] = 'Welcome/add_design_index';

$route['list_design_index'] = 'Welcome/list_design_index';

$route['listmasters'] = 'Welcome/list_masters';

$route['edit_design_index'] = 'Welcome/edit_design_index';

$route['editmasters'] = 'Welcome/edit_masters';

$route['delete_design_index'] = 'Welcome/delete_design_index';

$route['deletemasters'] = 'Welcome/delete_masters';

$route['list_ppap_index_master'] = 'Welcome/list_ppap_index_master';
$route['add_ppap_index_master'] = 'Welcome/add_ppap_index_master';
$route['edit_ppap_index_master'] = 'Welcome/edit_ppap_index_master';
$route['delete_ppap_index_master'] = 'Welcome/delete_ppap_index_master';

$route['list_part_family'] = 'Welcome/list_part_family';
$route['add_part_family'] = 'Welcome/add_part_family';
$route['edit_part_family'] = 'Welcome/edit_part_family';
$route['delete_part_family'] = 'Welcome/delete_part_family';

$route['list_customers'] = 'Welcome/list_customers';
$route['add_customers'] = 'Welcome/add_customers';
$route['edit_customers'] = 'Welcome/edit_customers';
$route['delete_customers'] = 'Welcome/delete_customers';

$route['list_operation_number'] = 'Welcome/list_operation_number';
$route['add_operation_number'] = 'Welcome/add_operation_number';
$route['edit_operation_number'] = 'Welcome/edit_operation_number';
$route['delete_operation_number'] = 'Welcome/delete_operation_number';

$route['list_part_type'] = 'Welcome/list_part_type';
$route['add_part_type'] = 'Welcome/add_part_type';
$route['edit_part_type'] = 'Welcome/edit_part_type';
$route['delete_part_type'] = 'Welcome/delete_part_type';

$route['list_email_masters'] = 'Welcome/list_email_masters';
$route['add_email_masters'] = 'Welcome/add_email_masters';
$route['edit_email_masters'] = 'Welcome/edit_email_masters';
$route['delete_email_masters'] = 'Welcome/delete_email_masters';


$route['list_erp_users'] = 'Welcome/list_erp_users';
$route['add_erp_users'] = 'Welcome/add_erp_users';
$route['edit_erp_users'] = 'Welcome/edit_erp_users';
$route['delete_erp_users'] = 'Welcome/delete_erp_users';

$route['list_parts'] = 'Welcome/list_parts';
$route['add_parts'] = 'Welcome/add_parts';
$route['edit_parts'] = 'Welcome/edit_parts';


$route['view_design_documents'] = 'Welcome/view_design_documents';
$route['add_design_documents'] = 'Welcome/add_design_documents';

$route['list_standard_library'] = 'Welcome/list_standard_library';
$route['add_standard_library'] = 'Welcome/add_standard_library';
$route['add_standard_library_revision'] = 'Welcome/add_standard_library_revision';
$route['list_standard_library_revision'] = 'Welcome/list_standard_library_revision';

$route['list_drawing_revision'] = 'Welcome/list_drawing_revision';


$route['list_slide_show'] = 'Welcome/list_slide_show';
$route['add_slide_show'] = 'Welcome/add_slide_show';


$route['index'] = 'Welcome/index';










































$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;
