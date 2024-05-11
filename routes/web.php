<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

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
    $role->givePermissionTo($permission);
    return view('welcome');
});
Route::get('/admin/login', [LoginController::class, 'showLogin'])->middleware('guest');
Route::post('/admin/login', [LoginController::class, 'loginUser'])->name('login');
Route::get('/admin/logout', [LoginController::class, 'logoutUser'])->name('logout');

Route::group([
    'prefix' => 'admin',
    'middleware' => 'auth'
], function () {
    Route::get('users', [UserController::class, 'index'])->name('users.index');
    Route::get('users/create', [UserController::class, 'create'])->name('users.create');
    Route::post('users/create', [UserController::class, 'store'])->name('users.store');
    Route::get('users/{id}/edit', [UserController::class, 'edit'])->name('users.edit');
    Route::post('users/{id}/update', [UserController::class, 'update'])->name('users.update');
    Route::get('users/{id}/destroy', [UserController::class, 'destroy'])->name('users.destroy');
});
