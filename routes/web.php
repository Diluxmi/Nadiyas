<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WomenController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SaleController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\Women\BlouseController;
use App\Http\Controllers\Women\FrockController;
use App\Http\Controllers\Women\JeansController;
use App\Http\Controllers\Women\TopController;
use App\Http\Controllers\Women\SalwarController;
use App\Http\Controllers\Women\PantController;
use App\Http\Controllers\Women\SkirtController;

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


Route::group(['prefix' => 'home', 'middleware' => 'auth', 'namespace' => 'Admin'], function () {
    Route::get('/', [HomeController::class,'index'])->name('home');
});

Route::get('dashboard', [CustomAuthController::class, 'dashboard']); 
Route::get('login', [CustomAuthController::class, 'index'])->name('login');
Route::post('custom-login', [CustomAuthController::class, 'customLogin'])->name('login.custom'); 
Route::get('registration', [CustomAuthController::class, 'registration'])->name('register-user');
Route::post('custom-registration', [CustomAuthController::class, 'customRegistration'])->name('register.custom'); 
Route::get('signout', [CustomAuthController::class, 'signOut'])->name('signout');


Route::group(['prefix' => 'women'], function () {
    Route::get('/',[WomenController::class,'index'])->name('women.index');
    Route::get('/create',[WomenController::class,'create'])->name('women.create');
    Route::post('store',[WomenController::class,'store'])->name('women.store');
});



Route::group(['prefix'=>'product'],function(){
    Route::get('/',[ProductController::class,'index'])->name('product.index');
    Route::get('/create',[ProductController::class,'create'])->name('product.create');
   
    Route::post('/store',[ProductController::class,'store'])->name('product.store');

});

Route::group(['prefix'=>'product'],function(){
    Route::get('/show',[ProductController::class,'show'])->name('product.show');
});
Route::group(['prefix'=>'sale'],function(){
    Route::get('/',[SaleController::class,'index'])->name('sale.index');
});

Route::group(['prefix'=>'career'],function(){
    Route::get('/',[CareerController::class,'index'])->name('career.index');
});

Route::group(['prefix'=>'blouse'],function(){
    Route::get('/',[BlouseController::class,'index'])->name('blouse.index');
    Route::get('/create',[BlouseController::class,'create'])->name('blouse.create');
    Route::post('/store',[BlouseController::class,'store'])->name('blouse.store');
    Route::get('/show',[BlouseController::class,'show'])->name('blouse.show');
    Route::get('/edit',[BlouseController::class,'edit'])->name('blouse.edit');
    Route::patch('/update',[BlouseController::class,'update'])->name('blouse.update');
    Route::get('/delete',[BlouseController::class,'delete'])->name('blouse.delete');
    Route::delete('/',[BlouseController::class,'destroy'])->name('blouse.destroy');
    });

    Route::group(['prefix'=>'frock'],function(){
        Route::get('/',[FrockController::class,'index'])->name('frock.index');
        Route::get('/create',[FrockController::class,'create'])->name('frock.create');
        Route::post('/store',[FrockController::class,'store'])->name('frock.store');
    });

    Route::group(['prefix'=>'jeans'],function(){
        Route::get('/',[JeansController::class,'index'])->name('jeans.index');
        Route::get('/create',[JeansController::class,'create'])->name('jeans.create');
        Route::post('/store',[JeansController::class,'store'])->name('jeans.store');
   });

   Route::group(['prefix'=>'top'],function(){
        Route::get('/',[TopController::class,'index'])->name('top.index');
        Route::get('/create',[TopController::class,'create'])->name('top.create');
        Route::post('/store',[TopController::class,'store'])->name('top.store');
        Route::get('/show',[TopController::class,'show'])->name('top.show');
        Route::get('/edit',[TopController::class,'edit'])->name('top.edit');
        Route::patch('/update',[TopController::class,'update'])->name('top.update');
        Route::get('/delete',[TopController::class,'delete'])->name('top.delete');
        Route::delete('/',[TopController::class,'destroy'])->name('top.destroy');
   });

   Route::group(['prefix'=>'salwar'],function(){
        Route::get('/',[SalwarController::class,'index'])->name('salwar.index');
        Route::get('/create',[SalwarController::class,'create'])->name('salwar.create');
        Route::post('/store',[SalwarController::class,'store'])->name('salwar.store');
        Route::get('/show',[SalwarController::class,'show'])->name('salwar.show');
        Route::get('/edit',[SalwarController::class,'edit'])->name('salwar.edit');
        Route::patch('/update',[SalwarController::class,'update'])->name('salwar.update');
        Route::get('/delete',[SalwarController::class,'delete'])->name('salwar.delete');
        Route::delete('/',[SalwarController::class,'destroy'])->name('salwar.destroy');
   });

   Route::group(['prefix'=>'pant'],function(){
        Route::get('/',[PantController::class,'index'])->name('pant.index');
        Route::get('/create',[PantController::class,'create'])->name('pant.create');
        Route::post('/store',[PantController::class,'store'])->name('pant.store');
   });

   Route::group(['prefix'=>'skirt'],function(){
        Route::get('/',[SkirtController::class,'index'])->name('skirt.index');
        Route::get('/create',[SkirtController::class,'create'])->name('skirt.create');
        Route::post('/store',[SkirtController::class,'store'])->name('skirt.store');
        Route::get('/show',[SkirtController::class,'show'])->name('skirt.show');
   });
   