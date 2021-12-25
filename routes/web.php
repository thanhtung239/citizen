<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\CentralAdminController;
use App\Http\Controllers\ProvinceAdminController;
use App\Http\Controllers\DistrictAdminController;
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

Route::prefix('central_admin')->group(function () {
    Route::get('/login', [LoginController::class, 'showCentralAdminLogin'])->name('central_admin.show_login');
    Route::post('/login', [LoginController::class, 'centralAdminLogin'])->name('central_admin.login');
    Route::get('/dashboard', [CentralAdminController::class, 'dashboard'])->name('central_admin.dashboard')->middleware('central.admin');
    Route::post('/logout', [LoginController::class, 'centralAdminLogout'])->name('central_admin.logout');
});

Route::prefix('province_admin')->group(function () {
    Route::get('/login', [LoginController::class, 'showProvinceAdminLogin'])->name('province_admin.show_login');
    Route::post('/login', [LoginController::class, 'provinceAdminLogin'])->name('province_admin.login');
    Route::get('/dashboard', [ProvinceAdminController::class, 'dashboard'])->name('province_admin.dashboard')->middleware('province.admin');
    Route::post('/logout', [LoginController::class, 'provinceAdminLogout'])->name('province_admin.logout');
});

Route::prefix('district_admin')->group(function () {
    Route::get('/login', [LoginController::class, 'showDistrictAdminLogin'])->name('district_admin.show_login');
    Route::post('/login', [LoginController::class, 'districtAdminLogin'])->name('district_admin.login');
    Route::get('/dashboard', [DistrictAdminController::class, 'dashboard'])->name('district_admin.dashboard')->middleware('district.admin');
    Route::post('/logout', [LoginController::class, 'districtAdminLogout'])->name('district_admin.logout');
});

Route::prefix('ward_admin')->group(function () {
    Route::get('/login', [LoginController::class, 'showWardAdminLogin'])->name('ward_admin.show_login');
    Route::post('/login', [LoginController::class, 'wardAdminLogin'])->name('ward_admin.login');
    Route::get('/dashboard', [WardAdminController::class, 'dashboard'])->name('ward_admin.dashboard')->middleware( 'ward.admin');
    Route::post('/logout', [LoginController::class, 'wardAdminLogout'])->name('ward_admin.logout');
});

Route::group(['middleware' => ['central.admin']], function () {
    Route::resource('central_admin', CentralAdminController::class);
    Route::get('/provinces-district/{id}', [CentralAdminController::class, 'indexDistrict']);
    Route::get('/provinces-districts-ward/{id}', [CentralAdminController::class, 'indexWard']);
});

Route::group(['middleware' => ['province.admin']], function () {
    Route::resource('province_admin', ProvinceAdminController::class);
    Route::get('/provinces-district/{id}', [ProvinceAdminController::class, 'indexDistrict']);
    Route::get('/provinces-districts-ward/{id}', [ProvinceAdminController::class, 'indexWard']);
});

Route::group(['middleware' => ['district.admin']], function () {
    Route::resource('district_admin', DistrictAdminController::class);
    Route::get('/provinces-district/{id}', [DistrictAdminController::class, 'indexDistrict']);
    Route::get('/provinces-districts-ward/{id}', [DistrictAdminController::class, 'indexWard']);
});

Route::group(['middleware' => ['ward.admin']], function () {
    Route::resource('ward_admin', WardAdminController::class);
    Route::get('/provinces-district/{id}', [WardAdminController::class, 'indexDistrict']);
    Route::get('/provinces-districts-ward/{id}', [WardAdminController::class, 'indexWard']);
});
