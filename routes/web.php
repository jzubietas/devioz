<?php

use App\Http\Controllers\JobFunctionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\RubroServicesController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SettingsController;
use App\Http\Controllers\ThoughtController;
use App\Http\Controllers\ToolController;
use Illuminate\Support\Facades\Route;
//agregamos los siguientes controladores
use App\Http\Controllers\HomeController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\BlogController;
//use App\Http\Controllers\ProductController;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\PermissionsController;

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
    return view('auth.login');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


//y creamos un grupo de rutas protegidas para los controladores
Route::group(['middleware' => ['auth']], function() {
    Route::resource('roles', RolController::class);
    Route::resource('permissions', PermissionsController::class);
    Route::resource('usuarios', UsuarioController::class);
    Route::resource('blogs', BlogController::class);
    //Route::resource('products', ProductController::class);
    Route::resource('posts', PostController::class);
    Route::resource('jobsfunction', JobFunctionController::class);
    Route::resource('thoughts', ThoughtController::class);
    Route::resource('services', ServiceController::class);
    Route::resource('tools', ToolController::class);
});

Route::post('thoughts.update',[ThoughtController::class,'update'])->name('thoughts.update');
Route::post('services.update',[ServiceController::class,'update'])->name('services.update');
Route::post('servicesrubro.update',[RubroServicesController::class,'update'])->name('servicesrubro.update');
Route::post('tools.update',[ToolController::class,'update'])->name('tools.update');

Route::any('usuarios.storePerfil', [UsuarioController::class, 'storePerfil'])->name('usuarios.storePerfil');
Route::any('home.changeBanner', [HomeController::class, 'changeBanner'])->name('home.changeBanner');
Route::any('home.storeNosotros', [HomeController::class, 'storeNosotros'])->name('home.storeNosotros');
Route::any('site.changeBanner', [SiteController::class, 'changeBanner'])->name('site.changeBanner');
Route::post('/setting/store', [SettingsController::class, 'settingStore'])->name('settings.store-setting');

Route::get('alimentario', [SiteController::class, 'alimentario'])->name('alimentario');
Route::get('callcenter', [SiteController::class, 'callcenter'])->name('callcenter');
Route::get('comercio', [SiteController::class, 'comercio'])->name('comercio');
Route::get('consultoras', [SiteController::class, 'consultoras'])->name('consultoras');
Route::get('desarrollorural', [SiteController::class, 'desarrollorural'])->name('desarrollorural');
Route::get('educacion', [SiteController::class, 'educacion'])->name('educacion');
Route::get('entretenimiento', [SiteController::class, 'entretenimiento'])->name('entretenimiento');
Route::get('financiero', [SiteController::class, 'financiero'])->name('financiero');
Route::get('software', [SiteController::class, 'software'])->name('software');

Route::post('send-mail', [HomeController::class, 'sendEmail'])->name('send-mail');

