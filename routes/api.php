<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;

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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::group(['prefix' => 'v1'], function () {
    
    /**
     * Unauthenticated APIs
     */

    Route::post('login', [AuthController::class,'login']);
    Route::post('register',[AuthController::class,'register']);
    Route::post('send-otp', 'Api\AuthController@sendOtp');

     /**
     * Authenticated APIs
     */
    Route::group(['middleware' => ['auth:api', 'cors']],function () {

        Route::get('/', function(){ return "Welcome to chalo app api !!"; });
        Route::get('/logout',[AuthController::class,'logout']);

    });
});