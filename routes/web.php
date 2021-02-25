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


$router->get('/base-64', [
    'as' => 'base_64.form',
    'uses' => 'Base64Controller@form'
]);
$router->post('/base-64/to-PDF', [
    'as' => 'base_64.ToPDF',
    'uses' => 'Base64Controller@base64ToPDF'
]);
$router->post('/base-64/to-base-64', [
    'as' => 'base_64.ToBase64',
    'uses' => 'Base64Controller@toBase64'
]);
$router->post('/base-64/to-text', [
    'as' => 'base_64.toText',
    'uses' => 'Base64Controller@base64toText'
]);

