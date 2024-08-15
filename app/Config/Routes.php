<?php

use CodeIgniter\Router\RouteCollection;
// routes php para llamar a los metodos mediante urls
/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('quienes_somos', 'Home::quienes_somos');
$routes->get('acercade', 'Home::acerca_de');
$routes->get('registro', 'Home::registro');
$routes->get('login', 'Home::login');
$routes->get('catalogo', 'Home::catalogo');

/* rutas del registro de usuarios*/
$routes->get('registro','usuario_controller::create');
$routes->post('/enviar-form','usuario_controller::formValidation');
$routes->get('/usuario_lista', 'usuario_controller::list');
$routes->get('/usuario_editar/(:num)', 'usuario_controller::edit/$1');
$routes->post('/edicion', 'usuario_controller::update');
$routes->get('/usuario_eliminar', 'usuario_controller::formValidation');

/*rutas del login*/
$routes->get('login', 'login_controller');
$routes->post('/enviarlogin', 'login_controller::auth');
$routes->get('/panel', 'panel_controller::index',['filter' => 'auth']);
$routes->get('/logout', 'login_controller::logout');