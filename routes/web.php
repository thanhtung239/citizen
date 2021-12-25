<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\WardAdminController;

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

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::prefix('ward_admin')->group(function () {
    Route::get('/login', [LoginController::class, 'showWardAdminLogin'])->name('ward_admin.show_login');
    Route::post('/login', [LoginController::class, 'wardAdminLogin'])->name('ward_admin.login');
    Route::get('/dashboard', [WardAdminController::class, 'dashboard'])->name('ward_admin.dashboard')->middleware( 'ward.admin');
    Route::post('/logout', [LoginController::class, 'wardAdminLogout'])->name('ward_admin.logout');
});

Route::resource('ward_admin', WardAdminController::class);

Route::group(['middleware' => ['ward.admin']], function () {
    Route::resource('ward_admin', WardAdminController::class);
    Route::get('/provinces-district/{id}', [WardAdminController::class, 'indexDistrict']);
    Route::get('/provinces-districts-ward/{id}', [WardAdminController::class, 'indexWard']);
});

