<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
// Route::get('/api/v1/products',);
// Route::get('/', function () {
Route::get('/api/v1/products','ProductController@index');
//     return view('welcome');
// });
//
// Route::group(['middleware' => 'api'], function(){
//   Route::get('/products','ProductController@index');
//   // Route::post('/contactform','ContactController@sendContact');
// });
//
// Route::group([
//     'middleware' => 'api',
//     'namespace' => $this->namespace,
//     'prefix' => 'api',
// ], function ($router) {
//     require base_path('routes/api.php');
// });

// Route::get('products','ProductController@index');
