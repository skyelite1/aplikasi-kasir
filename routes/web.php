<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
Route::middleware(['guest'])->group(function () {
    Route::get('/', [HomeController::class, 'index']);
    Route::post('/', [HomeController::class, 'login']);
});

Route::get('/home', function () {
    return redirect('/admin');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', [HomeController::class, 'admin']);
    Route::get('/admin/user', [UserController::class, 'index']);
    Route::post('/admin/user/store', [UserController::class, 'store']);
    Route::post('/admin/user/update/{id}', [UserController::class, 'update']);
    Route::post('/admin/user/destroy/{id}', [UserController::class, 'destroy']);
    Route::get('/kasir', [HomeController::class, 'kasir']);
    Route::get('/logout', [HomeController::class, 'logout']);
});

