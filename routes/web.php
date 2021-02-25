<?php

/** @var \Laravel\Lumen\Routing\Router $router */

$router->get('/', ['as' => 'welcome', function () use ($router) {
    return view('welcome');
}]);

$router->get('/resaltador-de-codigo', [
    'as' => 'resaltador_de_codigo.form',
    'uses' => 'ResaltadorDeCodigoController@resaltadorDeCodigoForm'
]);
$router->post('/resaltador-de-codigo', [
    'as' => 'resaltador_de_codigo.action',
    'uses' => 'ResaltadorDeCodigoController@resaltadorDeCodigoAction'
]);

$router->get('/creador_de_hashes', [
    'as' => 'generador_de_hashes.form',
    'uses' => 'CreadorDeHashController@creadorDeHashesForm'
]);
$router->post('/creador_de_hashes', [
    'as' => 'generador_de_hashes.action',
    'uses' => 'CreadorDeHashController@creadorDeHashesAction'
]);


