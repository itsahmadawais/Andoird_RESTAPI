<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginRegister;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\ChallanController;

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

Route::post('register', [LoginRegister::class, 'register']);
Route::post('login', [LoginRegister::class, 'login']);

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::middleware('auth:api')->group(function () {
    /**
     * Student Info
     */
    Route::get('students',[StudentController::class,'index']);
    /**
     * @param id
     */
    Route::get('student/{id}',[StudentController::class,'show']);
    
    /**
     * Challan
     */
    Route::get('challans',[ChallanController::class,'index']);

    Route::get('challan/{id}',[ChallanController::class,'show']);

    Route::get('challanlist',[ChallanController::class,'showlist']);


    Route::post('challan-update',[ChallanController::class,'update']);
    
});