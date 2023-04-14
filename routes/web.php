<?php

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

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('pages.landing');
});

Route::get('/about', 'FrontEndController@about')->name('about');
Route::get('/treatment', 'FrontEndController@treatment')->name('treatment');
Route::get('/store', 'FrontEndController@store')->name('store');
Route::get('/dokter', 'FrontEndController@dokter')->name('dokter');
Route::get('/cabang-klinik', 'FrontEndController@cabang')->name('cabang-klinik');
Route::get('/', 'FrontEndController@index')->name('landing');

Auth::routes(['register' => false]);

Route::group(['prefix' => 'backoffice', 'middleware' => ['auth']], function () {
    // backoffice
    Route::get('/', 'DashboardController@index');
    Route::get('dashboard', 'DashboardController@dashboard')->name('backoffice.dashboard');
    // logs
    Route::get('logs', 'ActivityController@index')->name('logs');
    // profile
    Route::get('profile', 'UserController@profile')->name('profile');
    Route::patch('profile/{user}/update', 'UserController@ProfileUpdate')->name('profile.update');
    Route::patch('profile/{user}/password', 'UserController@ChangePassword')->name('profile.password');
    // resource
    Route::resource('menus', 'MenuController');
    Route::resource('users', 'UserController');
    Route::resource('permissions', 'PermissionController');
    Route::resource('roles', 'RoleController');
    Route::resource('logo', 'LogoController');
    Route::resource('home', 'HomeController');
    Route::resource('youtube', 'YoutubeController');
    Route::resource('promo', 'PromoController');
    Route::resource('about', 'AboutController');
    Route::resource('cabang', 'CabangController');
    Route::resource('dokter', 'DokterController');
    Route::resource('produk_kategori', 'ProdukKategoriController');
    Route::resource('produk', 'ProdukController');
    Route::resource('treatment_kategori', 'TreatmentKategoriController');
    Route::resource('treatment', 'TreatmentController');
    Route::resource('reseller', 'ResellerController');
    Route::resource('karir', 'KarirController');
    Route::resource('edukasi', 'EdukasiController');
    Route::resource('penghargaan', 'PenghargaanController');
    Route::resource('socialMedia', 'SocialMediaController');
});
