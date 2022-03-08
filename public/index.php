<?php

use Router\Router;

require  '../vendor/autoload.php';
define('VIEWS', dirname(__DIR__) .DIRECTORY_SEPARATOR . 'views'. DIRECTORY_SEPARATOR);
define('SCRIPTS', dirname($_SERVER['SCRIPT_NAME']) . DIRECTORY_SEPARATOR);

$router = new Router($_GET['url'], $_SERVER['REQUEST_URI']);
$router->get('/', 'App\Controllers\BlogController@index');
$router->get('/listAdmin', 'App\Controllers\BlogController@listAdmin');
$router->get('/admin/:id', 'App\Controllers\BlogController@show');
$router->get('/login', 'App\Controllers\BlogController@login');
$router->post('/login', 'App\Controllers\BlogController@loginPost');
$router->get('/logout', 'App\Controllers\BlogController@logout');
$router->get('/addAdmin', 'App\Controllers\BlogController@createAdmin');


$router->get('/listEmployer', 'App\Controllers\Employer\EmployerController@listEmployer');
$router->get('/loginEm', 'App\Controllers\Employer\EmployerController@login');
$router->post('/loginEm', 'App\Controllers\Employer\EmployerController@loginPost');
$router->get('/employer/create', 'App\Controllers\Employer\EmployerController@createPost');
$router->get('/employer/edit/:id', 'App\Controllers\Employer\EmployerController@edit');
$router->get('/employer/delete/:id', 'App\Controllers\Employer\EmployerController@delete');


$router->get('/listRepondant', 'App\Controllers\Repondant\RepondantController@listRepondant');
$router->get('/addRepondant', 'App\Controllers\Repondant\RepondantController@addRepondant');



$router->get('/listEntreprise', 'App\Controllers\Entreprise\EntrepriseController@listEntreprise');

$router->run();