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

$router->get('/news', 'GatewayController@getNews');
$router->post('/google-search', 'GatewayController@googleSearch');
$router->get('/weather', 'GatewayController@getCurrentWeather');
$router->get('/quote', 'GatewayController@getRandomQuote');


use App\Http\Controllers\GatewayController;

Route::get('/news', [GatewayController::class, 'getNews']);
Route::get('/google-search', [GatewayController::class, 'googleSearch'])->name('googleSearch');
Route::get('/weather', 'GatewayController@getWeather')->name('getweather');
Route::get('/get-random-quote', [GatewayController::class, 'getRandomQuote'])->name('getRandomQuote');




