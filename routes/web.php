<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/



Route::get('/', 'HomeController@index');
/*
Route::get('/{key}/server', [
    'as' => 'zoap.server.wsdl',
    'uses' => '\Viewflex\Zoap\ZoapController@server'
]);
Route::post('/{key}/server', [
    'as' => 'zoap.server',
    'uses' => '\Viewflex\Zoap\ZoapController@server'
]);
*/
