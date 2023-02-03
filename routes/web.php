<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DeviceController;
use App\Http\Controllers\SparepartController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\DepartmentController;

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\TroubleshootController;

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

//Route::resource('/role', RoleController::class);
//Route::resource('/user', UserController::class);
//Route::resource('/serve', ServeController::class);

Route::resource('/device', DeviceController::class);
Route::resource('/sparepart', SparepartController::class);
Route::resource('/service',ServiceController::class);
Route::resource('/department',DepartmentController::class);
Route::resource('/troubleshoot',TroubleshootController::class);
Route::resource('/category',CategoryController::class);
Route::resource('/role',RoleController::class);

//Route::get('/department',[DepartementController::class,'getUser']);