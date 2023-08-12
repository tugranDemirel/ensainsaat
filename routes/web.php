<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AccountController;
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

Auth::routes();

Route::get('/admin', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('admin/')->as('admin.')->group(function (){
    Route::get('/', function () {
        return view('admin.index');
    })->name('home');


    Route::resource('hesap-ayarlari', AccountController::class)
            ->only('index', 'update')->names('account')
            ->parameters(['hesap-ayarlari' => 'user']);
});
