 <?php

$router->get('', 'PagesController@home');
$router->get('about', 'PagesController@about');
$router->get('contact', 'PagesController@contact');
$router->get('login', 'PagesController@login');
$router->get('register', 'PagesController@register');


$router->get('contacts', 'ContactsController@contacts');
$router->get('addcontact', 'PagesController@addContact');
$router->post('addcontact', 'ContactsController@addContact');


$router->get('users', 'UsersController@index');
$router->post('register', 'UsersController@register');
$router->post('login', 'UsersController@login');
$router->post('logout', 'UsersController@logout');

