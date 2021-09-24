<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::get('/login',function(){
    return view('login');
})->name('login');

Route::post('/login',[UserController::class,'login']);

Route::post('/registration',[UserController::class,'registration']);

Route::get('/',[ProductController::class,'index'])->name('home');

Route::get('detail/{id}',[ProductController::class,'detail'])->name('detail');

Route::get('/search',[ProductController::class,'search']);

Route::post('/add-to-cart',[ProductController::class,'addToCart'])->name('add-to-cart');

Route::get('/logout',function(){
    Session::forget('user');
    return redirect('login');
})->name('logout');

Route::get('/cart-list',[ProductController::class,'cartList'])->name('cartlist');

Route::get('removecart/{id}',[ProductController::class,'removeCart'])->name('removecart');

Route::get('/ordernow',[ProductController::class,'orderNow'])->name('ordernow');

Route::post('/orderplace',[ProductController::class,'orderPlace'])->name('orderplace');

Route::get('/myorders',[ProductController::class,'myOrders'])->name('myorders');

Route::view('/registration','registration')->name('registration');