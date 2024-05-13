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

use App\Models\Treatment;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\URL;

Route::get('/', function () {
    return view('pages.landing');
});

Route::get('/about', 'FrontEndController@about')->name('about');
Route::get('/treatment', 'FrontEndController@treatment')->name('treatment');
Route::get('/treatment-detail/{slug}', 'FrontEndController@treatmentDetail')->name('treatment-detail');
Route::get('/store', 'FrontEndController@store')->name('store');
Route::get('/produk/{slug}', 'FrontEndController@produk')->name('produk');
Route::get('/produkAll', 'FrontEndController@produkAll')->name('produkAll');
Route::get('/dokter', 'FrontEndController@dokter')->name('dokter');
Route::get('/cabang-klinik', 'FrontEndController@cabang')->name('cabang-klinik');
Route::get('/reseller', 'FrontEndController@reseller')->name('reseller');
Route::get('/karir', 'FrontEndController@karir')->name('karir');
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

    Route::get('generate-sitemap', function(){
        $sitemap = App::make("sitemap");

        $sitemap->add(URL::to('/'), '2012-08-25T20:10:00+02:00', '1.0', 'daily');
        // $sitemap->add(URL::to('page'), '2012-08-26T12:30:00+02:00', '0.9', 'monthly');

        $treatments = Treatment::all();
        
        // foreach ($treatments as $treatment) {
        //     $sitemap->add(URL::to('treatment/'. $treatment->uuid .'/edit'), $treatment->updated_at, '1.0', 'daily');
        // }

        $sitemap->store('xml', 'sitemap');

        return redirect(url('sitemap.xml'));
    });
});
