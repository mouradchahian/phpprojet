<?php
$router = new AltoRouter();

$router->map( 'GET', '/', 'Home/home','home');
$router->map( 'GET|POST', '/user/add', 'User/add','addUser');
$router->map( 'GET|POST', '/user/update/[i:id]', 'User/update','updateUser');
$router->map( 'GET|DELETE', '/user/delete/[i:id]', 'User/delete','deleteUser');
$match = $router->match();

require 'fetch.php';
