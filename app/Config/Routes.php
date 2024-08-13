<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('principal', 'Home::index');
$routes->get('QuienesSomos', 'Home::QuienesSomos');
$routes->get('registro', 'Home::registro');
$routes->get('Login', 'Home::Login');


/*rutas del Registro de Usuarios*/ 
$routes->get('/registro','usuario_controller::create');
$routes->post('/enviar-form','usuario_controller::formValidation');

/*rutas del login*/ 
$routes->get('/Login','login_controller');
/* $routes->get('/login', 'Login_controller::index'); */
$routes->post('/enviarlogin','login_controller::auth');
$routes->get('/panel','panel_controller::index',['filter' => 'auth']);
$routes->get('/logout','login_controller::logout');

$routes->get('/panel_admin','panel_controller::index');

if (  is_file(APPPATH . 'config/'. ENVIRONMENT . 'Routes.php')){
    require APPPATH . 'config' . ENVIRONMENT . 'Routes.php'; 
}
