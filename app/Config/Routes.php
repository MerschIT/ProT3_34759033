<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/principal', 'Home::index');

$routes->get('/quienes_somos', 'Home::quienes_somos');
$routes->get('/acerca_de', 'Home::acerca_de');



/* Rutas de registro de usuario */
$routes->get('/register', 'usuario_controller::create');
$routes->post('/enviar-form', 'usuario_controller::formValidation');

/* Rutas del login */
$routes->get('/login', 'login_controller');
$routes->post('/enviarlogin', 'login_controller::auth');
$routes->get('/panel', 'Panel_controller::index', ['filter' => 'auth']);
$routes->get('/logout', 'login_controller::logout');

/* Rutas del panel de control */
$routes->get('/borrar-usuario/(:num)', 'usuario_controller::borrar/$1');
$routes->get('/editar-usuario/(:num)', 'usuario_controller::editar/$1');
$routes->post('/editar-usuario/(:num)', 'usuario_controller::editar/$1');
$routes->get('/administrar', 'Home::panel_control', ['filter' => 'auth']);
