<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Project\ProjectController;
use App\Http\Controllers\Device\DeviceController;
use App\Http\Middleware\ageCheck;

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

Route::get('/users', [UserController::class, 'home']);

Route::get('/admin/register', [UserController::class, 'adminRegister']);
Route::post('/admin/register', [UserController::class, 'adminStore']);
Route::get('/admin/login', [UserController::class, 'adminLogin'])->name('login');
Route::post('/admin/login', [UserController::class, 'adminAuthenticate']);

Route::group(['middleware' => ['ageCheck']], function () {
    Route::view('home', 'home');
    Route::view('noaccess', 'noaccess');
});


Route::group(['middleware' => ['auth']], function () {
    Route::get('/admin/dashboard', [UserController::class, 'adminDashboard']);
    Route::get('/admin/logout', [UserController::class, 'adminlogout']);
    Route::get('/emp/create', [UserController::class, 'empCreate']);
    Route::post('/emp/store', [UserController::class, 'empstore']);
    Route::get('/employee/index', [UserController::class, 'empIndex']);

    Route::get('/project/index', [ProjectController::class, 'projectIndex']);
    Route::get('/project/create', [ProjectController::class, 'projectCreate']);
    Route::post('/project/store', [ProjectController::class, 'projectstore']);
    Route::get('/project/assign', [ProjectController::class, 'projectAssignPage']);
    Route::post('/project/assign', [ProjectController::class, 'projectAssign']);
});


Route::get('/employee/login', [UserController::class, 'empLogin']);
Route::post('/employee/login', [UserController::class, 'empAuthenticate']);
Route::get('/employee/dashboard', [UserController::class, 'empDashboard']);


Route::get('/device', [DeviceController::class, 'index']);
