<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Home::index');
$routes->get('/login_admin', 'AuthController::index');
$routes->post('/auth/login', 'AuthController::login');
$routes->get('/auth/logout', 'AuthController::logout');
$routes->get('/dashboard_admin', 'AuthController::dashboard_admin', ['filter' => 'auth']);
$routes->get('/dashboard_owner', 'AuthController::dashboard_owner', ['filter' => 'auth']);



