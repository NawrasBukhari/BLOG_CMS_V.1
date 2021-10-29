<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminCrudController;
use App\Http\Controllers\ContactUsFormController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\TasksController;



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

Route::get('/', [FrontendController::class, 'index'])->name = ('index');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');



Route::group(['middleware' => 'auth'], function () {
    Route::resource('/tasks', TasksController::class);

    Route::resource('/users', UsersController::class);

    Route::resource('/AdminCrud', AdminCrudController::class);
});

Route::get('/index', [ContactUsFormController::class, 'createForm']);

Route::post('/index', [ContactUsFormController::class, 'ContactUsForm'])->name('contact.store');








require_once __DIR__ . '/livewire.php';
require_once __DIR__ . '/fortify.php';

