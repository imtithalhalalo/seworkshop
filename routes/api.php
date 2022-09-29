<?php

use App\Http\Controllers\TestController;
use Illuminate\Http\Request;
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
Route::group(['prefix' => 'v1'], function(){
    Route::group(['prefix' => 'test'], function(){
        Route::group(['middleware' => 'role.admin'], function() {
            Route::get("/users", [TestController::class, 'getUsers']);
        });
        //? not always there
        Route::get("/hi/{name?}", [TestController::class, 'sayHi']);
        Route::post("/add_user", [TestController::class, 'addUser']);
        Route::get("/sort_str", [TestController::class, 'sortString']);
    });
});


Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
