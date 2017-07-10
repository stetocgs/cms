 <?php

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');
$router->get('login', 'PagesController@login');
$router->get('register', 'PagesController@register');


$router->get('users', 'UsersController@index');
$router->post('register', 'UsersController@register');
$router->post('login', 'UsersController@login');
$router->post('logout', 'UsersController@logout');

$router->get('add_company', 'PagesController@add_company');
$router->post('add_company', 'Add_companyController@addingCompany');