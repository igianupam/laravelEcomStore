<?php

use App\Http\Controllers\Admin\AttributeController;
use App\Http\Controllers\Admin\BannerController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ExtraController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SubCategoryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::group(['as'=>'admin.'], function(){
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::post('login', [LoginController::class, 'login'])->name('login.post');


    Route::group(['middleware' => ['auth']], function () {
        Route::get('logout', [LoginController::class, 'logout'])->name('logout');

        Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
        Route::resource('categories', CategoryController::class);

        Route::resource('sub-categories', SubCategoryController::class);

        Route::resource('attributes', AttributeController::class);

        Route::resource('products', ProductController::class);

        Route::resource('banners', BannerController::class);

        Route::resource('settings', SettingController::class);

        // Route::get('settings', [SettingController::class, 'index'])->name('settings.index');
        // Route::get('settings/{id}', [SettingController::class, 'edit'])->name('settings.edit');
        // Route::put('settings/{id}', [SettingController::class, 'update'])->name('settings.update');

        Route::get('extra', [ExtraController::class, 'getAttributesValue'])->name('attribute.value');

    });
    

});
