<?php
defined('BASEPATH') OR exit('No direct script access allowed');


$route['default_controller'] = 'Welcome';
$route['table'] = 'Welcome/table';

$route['sign_in'] = 'Welcome/sign_in';
$route['dashbord'] = 'Welcome/dashbord';
$route['addmasters'] = 'Welcome/add_masters';
$route['add_customer'] = 'Welcome/add_customer';

$route['list_customer'] = 'Welcome/list_customer';

$route['list_customer'] = 'Welcome/list_customer';

$route['edit_customer'] = 'Welcome/edit_customer';

$route['editmasters'] = 'Welcome/edit_masters';

$route['delete_customer'] = 'Welcome/delete_customer';

$route['deletemasters'] = 'Welcome/delete_masters';

$route['list_department'] = 'Welcome/list_department';
$route['add_department'] = 'Welcome/add_department';
$route['edit_department'] = 'Welcome/edit_department';
$route['delete_department'] = 'Welcome/delete_department';

$route['list_employee'] = 'Welcome/list_employee';
$route['add_employee'] = 'Welcome/add_employee';
$route['edit_employee'] = 'Welcome/edit_employee';
$route['delete_employee'] = 'Welcome/delete_employee';

$route['list_admin_task'] = 'Welcome/list_admin_task';
$route['add_admin_task'] = 'Welcome/add_admin_task';
$route['edit_admin_task'] = 'Welcome/edit_admin_task';
$route['delete_admin_task'] = 'Welcome/delete_admin_task';

$route['list_operational_task'] = 'Welcome/list_operational_task';
$route['add_operational_task'] = 'Welcome/add_operational_task';
$route['edit_operational_task'] = 'Welcome/edit_operational_task';
$route['delete_operation_number'] = 'Welcome/delete_operation_number';

$route['list_project_entry'] = 'Welcome/list_project_entry';
$route['add_project_entry'] = 'Welcome/add_project_entry';
$route['edit_project_entry'] = 'Welcome/edit_project_entry';
$route['delete_project_entry'] = 'Welcome/delete_project_entry';
 
$route['list_project_task'] = 'Welcome/list_project_task';
$route['add_project_task'] = 'Welcome/add_project_task';
$route['edit_project_task'] = 'Welcome/edit_project_task';
$route['delete_project_task'] = 'Welcome/delete_project_task';

$route['list_project_status'] = 'Welcome/list_project_status';
$route['add_project_status'] = 'Welcome/add_project_status';
$route['edit_project_status'] = 'Welcome/edit_project_status';
$route['delete_project_status'] = 'Welcome/delete_project_status';

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
