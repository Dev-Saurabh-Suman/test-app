<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users',[UserController::class,'home']);

Route::get('/admin/register',[UserController::class,'adminRegister']);
Route::post('/admin/register',[UserController::class,'adminStore']);
Route::get('/admin/login',[UserController::class,'adminLogin']);
Route::post('/admin/login',[UserController::class,'adminAuthenticate']);
Route::get('/admin/dashboard',[UserController::class,'adminDashboard']);
Route::get('/admin/logout',[UserController::class,'adminlogout']);
Route::get('/emp/create',[UserController::class,'empCreate']);


Route::get('/employee/login',[UserController::class,'empLogin']);
Route::post('/employee/login',[UserController::class,'empAuthenticate']);
Route::get('/employee/dashboard',[UserController::class,'empDashboard']);
