<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/food', 'FoodController::index');
$routes->get('/food/(:any)', 'FoodController::foodsByCalories/$1');
$routes->get('/foodAPI', 'FoodAPI::index');
$routes->get('/foodAPI/(:any)', 'FoodAPI::foodsByCalories/$1');
$routes->get('/login', 'LoginController::index');
$routes->get('/logout', 'LoginController::logout');
$routes->post('/login_action', 'LoginController::login_action');
$routes->get('/order', 'OrderController::index');
$routes->post('/order', 'OrderController::create');
$routes->post('/order_details', 'OrderDetailsController::create');
$routes->post('/sign_up', 'UserController::sign_up');
$routes->get('/profil', 'UserController::index');
$routes->get('/order_view', 'OrderController::viewOrder');

$routes->setAutoRoute(true);
