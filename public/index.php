<?php

//use Router\Router;

use Router\Router;

require  '../vendor/autoload.php';
define('VIEWS', dirname(__DIR__) .DIRECTORY_SEPARATOR . 'views'. DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);


$router = new Router($_GET['url']);
$router->get('/', 'App\Controllers\BlogController@index');
$router->get('/listAdmin', 'App\Controllers\BlogController@listAdmin');
$router->get('/admin/:id', 'App\Controllers\BlogController@show');
$router->get('login', 'App\Controllers\BlogController@login');
$router->post('/login', 'App\Controllers\BlogController@loginPost');

$router->get('/listEmployer', 'App\Controllers\Employer\EmployerController@listEmployer');
$router->get('/employer/create', 'App\Controllers\Employer\EmployerController@create');
$router->get('/employer/edit/:id', 'App\Controllers\Employer\EmployerController@edit');
$router->get('/employer/delete/:id', 'App\Controllers\Employer\EmployerController@delete');



$router->run();