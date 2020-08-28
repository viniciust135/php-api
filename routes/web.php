<?php

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
$router->group(['prefix' => 'v1'], function () use ($router) {
    $router->group(['prefix' => 'skills'], function () use ($router) {
        $router->get('/', 'SkillController@index');
        $router->get('/{id}', 'SkillController@show');
        $router->post('/', 'SkillController@store');
        $router->patch('/{id}', 'SkillController@update');
    });
});
