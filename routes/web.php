<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    return $router->app->version();
});

//VISTA
$router->get('/registroApoyo','ApoyoController@ver_apoyo');

//ACCIONES BD
$router->post('/registrarApoyo','ApoyoController@insertar_apoyo');
$router->get('/consultaApoyos','ApoyoController@ver_apoyos');

$router->get('/apoyo/{id}','ApoyoController@ver_editar_apoyo');
$router->post('/actualizar/{id}','ApoyoController@actualizar_apoyo');

$router->get('/eliminar/{id}','ApoyoController@eliminar_Apoyo');



