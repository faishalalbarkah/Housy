<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
 */

Route::post('/register', 'Auth\AuthController@register');
Route::post('/login', 'Auth\AuthController@authenticate');

Route::group(['middleware' => ['jwt.verify']], function () {
    // Route::get('user', 'UserController@getAuthenticatedUser');
    // Route::get('closed', 'DataController@closed');
});

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });
