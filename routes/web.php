<?php


use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;
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

Route::get('register', [UserController::class, 'register'])->name('register');
Route::post('register', [UserController::class, 'register_action'])->name('register.action');
Route::get('login', [UserController::class, 'login'])->name('login');
Route::post('login', [UserController::class, 'login_action'])->name('login.action');
Route::get('password', [UserController::class, 'password'])->name('password');
Route::post('password', [UserController::class, 'password_action'])->name('password.action');
Route::get('logout', [UserController::class, 'logout'])->name('logout');

Route::get('/Admin', [AdminController::class, 'index'])->name('admin.index');
Route::get('/Admin/create', [AdminController::class, 'create'])->name('admin.create');
Route::get('/Admin/edit/{id}', [AdminController::class, 'edit'])->name('admin.edit');
Route::post('/Admin/store', [AdminController::class, 'store'])->name('admin.store');
Route::post('/Admin/update/{id}', [AdminController::class, 'update'])->name('admin.update');
Route::delete('/Admin/delete/{id}', [AdminController::class, 'delete'])->name('admin.delete');

Route::get('/landingPage', function () {
    return view('landingPage');
});

Route::get('/', function () {
    return view('home', ['title' => 'Home']);
})->name('home');