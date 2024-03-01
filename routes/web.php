<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\BrandController;
use App\Http\Controllers\ItdevController;
use App\Http\Controllers\MyprofilController;
use App\Http\Controllers\RekapJasaController;
use App\Http\Controllers\SalesSuspectController;
use App\Http\Middleware\CekLevel;
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

Route::get('/',[AuthController::class, 'index'])->name('login');
Route::post('/auth/login',[AuthController::class,'postlogin'])->name('postlogin');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');
route::post('/change',[MyprofilController::class,'updateProfile']);
route::post('/changePassword',[MyprofilController::class,'cpassword']);

Route::group(['middleware' => ['auth','ceklevel:administrator']],function() {
    route::get('/administrator',[AdministratorController::class,'index']);
    route::get('/itdev-view',[AdministratorController::class,'itdev']);
    route::get('/admin-view',[AdministratorController::class,'admin']);
    route::get('/rekapjasa-view',[AdministratorController::class,'rekapjasa']);
    route::get('/brand-view',[AdministratorController::class,'brand']);
    route::get('/sales_suspect-view',[AdministratorController::class,'salesSus']);
    Route::get('/auth/new-user',[AuthController::class, 'register']);
    Route::post('/register',[AuthController::class, 'store']);
    route::get('/list-user',[AdministratorController::class,'listUser']);
    Route::delete('/delete/{id}',[AdministratorController::class,'delete']);
    route::get('/administrator/my-profil',[AdministratorController::class,'myprofil'])->name('myprofil');
    Route::put('/approve/{id}',[RekapJasaController::class,'aprove']);
    Route::put('/admin/approve/{id}',[AdminController::class,'aprove2']);

});

Route::group(['middleware' => ['auth','ceklevel:itdev']],function() {
    route::get('/itdev',[ItdevController::class,'index']);
    route::get('/itdev/add',[ItdevController::class,'produk']);
    route::post('/itdev/add-itdev',[ItdevController::class,'store']);
    route::delete('/itdev/{id}',[ItdevController::class,'delete']);
    route::get('/itdev/{id}/edit',[ItdevController::class,'edit']);
    route::put('/itdev/{id}',[ItdevController::class,'update']);
    route::get('/itdev/my-profil',[ItdevController::class,'myprofil']);
});
Route::group(['middleware' => ['auth','ceklevel:rekapjasa']],function() {
    Route::get('/rekapjasa',[RekapJasaController::class,'index']);
    Route::get('/rekapjasa/add',[RekapJasaController::class,'produk']);
    Route::post('/rekapjasa/add-itdev',[RekapJasaController::class,'store']);
    Route::delete('/rekapjasa/{id}',[RekapJasaController::class,'delete']);
    Route::get('/rekapjasa/{id}/edit',[RekapJasaController::class,'edit']);
    Route::put('/rekapjasa/{id}',[RekapJasaController::class,'update']);
    route::get('/rekapjasa/my-profil',[RekapJasaController::class,'myprofil']);
});
Route::group(['middleware' => ['auth','ceklevel:brand']],function() {
    Route::get('/brand',[BrandController::class,'index']);
    Route::get('/brand/add',[BrandController::class,'produk']);
    Route::post('/brand/add-itdev',[BrandController::class,'store']);
    Route::delete('/brand/{id}',[BrandController::class,'delete']);
    Route::get('/brand/{id}/edit',[BrandController::class,'edit']);
    Route::put('/brand/{id}',[BrandController::class,'update']);
    route::get('/brand/my-profil',[BrandController::class,'myprofil']);
});
Route::group(['middleware' => ['auth','ceklevel:marketing']],function() {
    Route::get('/sales_suspect',[SalesSuspectController::class,'salesSus']);
    Route::get('/sales_suspect/{id}/edit',[SalesSuspectController::class,'edit']);
    Route::put('/sales_suspect/{id}',[SalesSuspectController::class,'update']);
    route::get('/sales/my-profil',[SalesSuspectController::class,'myprofil']);
});
Route::group(['middleware' => ['auth','ceklevel:admin']],function() {
    Route::get('/admin',[AdminController::class,'index']);
    Route::get('/admin/add',[AdminController::class,'produk']);
    Route::post('/admin/add-itdev',[AdminController::class,'store']);
    Route::delete('/admin/{id}',[AdminController::class,'delete']);
    Route::get('/admin/{id}/edit',[AdminController::class,'edit']);
    Route::put('/admin/{id}',[AdminController::class,'update']);
    route::get('/admin/my-profil',[AdminController::class,'myprofil']);

});