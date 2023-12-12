<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/food', 'FoodController::index');
$routes->get('/foodAPI', 'FoodAPI::index');
$routes->get('/foodAPI/(:any)', 'FoodAPI::foodsByCalories/$1');
$routes->get('/food', 'FoodController::index');
$routes->get('/login', 'LoginController::index');
$routes->get('/logout', 'LoginController::logout');
$routes->post('/login_action', 'LoginController::login_action');


$routes->setAutoRoute(true);
