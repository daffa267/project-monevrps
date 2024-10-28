<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */

$routes->get('/', 'Admin::index'); 

$routes->get('admin_akun', 'Admin::admin_akun'); 

$routes->get('admin_rps', 'Admin::admin_rps'); 

