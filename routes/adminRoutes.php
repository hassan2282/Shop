<?php


use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactUsController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ramzController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\roleUserController;
use App\Http\Controllers\Admin\UserController;

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){
    Route::get('/ramz',[ramzController::class , 'index'])->name('ramz');
    // admin gate password UI
    Route::post('/ramz/confirm',[ramzController::class , 'confirm'])->name('ramz.confirm');
    // admin gate password
    Route::get('/index',function(){return view('admin.index');})->name('admin');
    // admin panel dashboard
    Route::resource('/user', UserController::class);
    //access to users
    Route::resource('/permission', PermissionController::class);
    //permissions
    Route::resource('/role', RoleController::class);
    //roles
    Route::resource('/roleUser', roleUserController::class);
    //role of each user
    Route::resource('/product', productController::class);
    //products
    Route::resource('/category',CategoryController::class);
    //categories


    //contact us index & store routes
    Route::post('/contactUs/store',[ContactUsController::class, 'store'])->name('contactUs.store');
    Route::get('/contactUs/index',[ContactUsController::class, 'index'])->name('contactUs.index');
});
