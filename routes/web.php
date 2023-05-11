<?php

use App\Http\Controllers\MassageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

            // landing

Route::get('/', [MassageController::class, 'index']);

            // massage

Route::post('/landing/store', [MassageController::class, 'store']);

            // register

Route::get('/register', [AuthController::class, 'indexRegister'])->name('register');

Route::post('/register/store', [AuthController::class, 'storeRegister']);

            // login

Route::get('/login', [AuthController::class, 'indexLogin'])->name('login');

Route::post('/auth/login', [AuthController::class, 'storeLogin']);

            // dashboard admin

Route::get('/dashboard/index', [AuthController::class, 'indexDashboard'])->middleware('auth')->middleware('admin');

Route::get('/dashboard/users', [AuthController::class, 'usersDashboard'])->middleware('auth')->middleware('admin');

Route::get('/user/edit/{id}', [AuthController::class, 'editUsersDashboard'])->name('editUser')->middleware('auth')->middleware('admin');

Route::post('/update-user/{id}',[AdminController::class, 'updateUser'])->name('update')->middleware('auth')->middleware('admin');

Route::delete('/user/{id}', [AuthController::class, 'deleteUsersDashboard'])->middleware('auth')->middleware('admin');

Route::get('/dashboard/books', [AuthController::class, 'booksDashboard'])->middleware('auth')->middleware('admin');

Route::get('/dashboard/add-book', [AuthController::class, 'addBookDashboard'])->middleware('auth')->middleware('admin');

Route::get('/book/edit/{id}', [AuthController::class, 'editBookDashboard'])->name('editBook')->middleware('auth')->middleware('admin');

Route::post('/update-book/{id}',[AdminController::class, 'updateBook'])->name('updateBook')->middleware('auth')->middleware('admin');

Route::delete('/book/{id}', [AuthController::class, 'deleteBookDashboard'])->middleware('auth')->middleware('admin');

Route::get('/dashboard/category', [AuthController::class, 'categoryDashboard'])->middleware('auth')->middleware('admin');

Route::get('/dashboard/rentslog', [AuthController::class, 'rentslogDashboard'])->middleware('auth')->middleware('admin');

Route::get('/dashboard', [MassageController::class, 'indexDashboard'])->middleware('auth')->middleware('admin');

Route::get('/admin/logout', [AuthController::class, 'logout'])->middleware('auth')->middleware('admin');

Route::post('/book/store', [AuthController::class, 'bookStore'])->middleware('auth')->middleware('admin');

            // dashboard user

Route::get('/dashboard-user', [UserController::class, 'index'])->middleware('auth')->middleware('user');

Route::get('/user/logout', [UserController::class, 'logout'])->middleware('auth')->middleware('user');