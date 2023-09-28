<?php

use App\Http\Controllers\GoogleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\PaymentController;
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
//

/* GOOGLE LOGIN END */

/* Ramz */
//Route::get('/ramz',function(){return view('admin')});
/* Ramz End */

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard',[HomeController::class, 'index'])->name('dashboard');
    Route::get('/contact-us',[HomeController::class, 'contactUs'])->name('contact-us');
    Route::get('/checkout',[HomeController::class, 'checkout'])->name('checkout');
    Route::get('/card',[HomeController::class, 'card'])->name('card');
    Route::get('/sell/{id}',[HomeController::class, 'sell'])->name('sell');
    Route::get('/sell',[HomeController::class, 'sellDelete'])->name('sell.delete');
    Route::get('/question',[HomeController::class, 'question'])->name('question');
    Route::post('/order/store',[OrderController::class, 'store'])->name('order.store');
    Route::get('/order/index',[OrderController::class, 'index'])->name('order.index');
    Route::post('/zarinpalpay/{order}', [PaymentController::class, 'zarinpalpay'])->name('zarinpalpay');
    Route::post('/zarinpal/callback', [PaymentController::class, 'zarinpalpay'])->name('zarinpalpay.callback');
});

    Route::get('/single-page',[HomeController::class, 'singlePage'])->name('single-page');
    Route::get('/comparison',[HomeController::class, 'comparison'])->name('comparison');
    Route::get('/compare/{product}',[HomeController::class, 'compare'])->name('compare');
    Route::get('/ComparisonDelete',[HomeController::class, 'ComparisonDelete'])->name('ComparisonDelete');
    Route::get('/about-us',[HomeController::class, 'aboutUs'])->name('about-us');
    Route::get('/blog',[HomeController::class, 'blog'])->name('blog');
    Route::get('/shop',[HomeController::class, 'shop'])->name('shop');
    Route::get('/single-product/{id}',[HomeController::class, 'singleProduct'])->name('single-product');
    Route::get('/',[HomeController::class, 'index']);

    /* GOOGLE LOGIN */
    Route::get('/google',[GoogleController::class, 'index'])->name('google');
    Route::get('/google/callback', [GoogleController::class, 'callback']);
    // admin panel logout
    Route::post('/admin/logout',function(){auth()->logout(); return redirect('/');})->name('admin.logout');
@include('adminRoutes.php');
