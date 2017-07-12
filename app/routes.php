 <?php

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');
$router->get('login', 'PagesController@login');
$router->get('register', 'PagesController@register');
$router->get('contacts', 'PagesController@contacts');


$router->get('users', 'UsersController@index');
$router->post('register', 'UsersController@register');
$router->post('login', 'UsersController@login');
$router->get('logout', 'UsersController@logout');
$router->get('company', 'PagesController@company');
$router->post('company', 'CompanyController@addingCompany');
$router->get('company_v2', 'PagesController@company_v2');
$router->post('company_v2', 'CompanyController@addingCompany_v2');
$router->get('companies', 'CompanyController@showcompanies');