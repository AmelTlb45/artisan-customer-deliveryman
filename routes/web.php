<?php

use App\Http\Controllers\HomeController;
 // use App\Http\Controllers\ProductController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtisanController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DeliverymanController;
use App\Http\Controllers\Profile\AvatarController;
use App\Models\Product;
use Illuminate\Support\Facades\Artisan;

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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    //Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

 //   Route::patch('/profile/avatar', [AvatarController::class, 'update'])->name('profile.avatar');
   // Route::post('/profile/avatar/ai', [AvatarController::class, 'generate'])->name('profile.avatar.ai');


});





Route::middleware('auth')->group(function () {

 //   Route::get('/users/artisans/products', [ProductController::class, 'index'])->name('users.artisans.products.index');
    // Define other routes as needed
   // Route::post('/users/artisans/products', [ProductController::class, 'create'])->name('users.artisans.products.create');

});



//ARTISAN
Route::get('/charts',[ArtisanController::class,'charts']);

Route::get('/list_deliveryman/{id}',[ArtisanController::class,'list_deliveryman']);

Route::get('/dispo_mission/{orderId}',[ArtisanController::class,'dispo_mission']);
//deliveryman


Route::get('/order_delivery',[ArtisanController::class,'order_delivery']);
Route::get('/dispo',[ArtisanController::class,'dispo']);
Route::post('/change_dispo',[DeliverymanController::class,'changeDispo'])->name('change.dispo');

//Category
Route::get('/view_category',[ArtisanController::class,'view_category']);
Route::post('/add_category',[ArtisanController::class,'add_category']);
Route::get('/delete_category/{id}',[ArtisanController::class,'delet_category']);
// Product
Route::get('/view_product',[ArtisanController::class,'view_product']);
Route::post('/add_product',[ArtisanController::class,'add_product']);
Route::get('/show_product',[ArtisanController::class,'show_product']);
Route::get('/delete_product/{id}',[ArtisanController::class,'delet_product']);
Route::get('/show_product1/{id}',[ArtisanController::class,'show_product1']);
Route::get('/update_product/{id}',[ArtisanController::class,'update_product']);
Route::post('/update_product_confirm/{id}',[ArtisanController::class,'update_product_confirm']);
//Type
Route::post('/add_type',[ArtisanController::class,'add_type']);
Route::get('/view_type',[ArtisanController::class,'view_type']);
Route::get('/delet_type/{id}',[ArtisanController::class,'delet_type']);
Route::get('/order',[ArtisanController::class,'order']);
Route::get('/show_order/{id}',[ArtisanController::class,'show_order']);
Route::get('/delivered/{id}',[ArtisanController::class,'delivered']);
Route::get('/search',[ArtisanController::class,'searchdata']);

//HOME

Route::get('/deliveryman_profile/{id}',[HomeController::class,'deliveryman_profile']);
Route::get('/artisan_profile/{id}',[HomeController::class,'artisan_profile']);
Route::get('/redirect',[HomeController::class,'redirect']);
Route::get('/',[HomeController::class,'index']);
Route::get('/product_details/{id}',[HomeController::class,'product_details']);
Route::post('/add_cart/{id}',[HomeController::class,'add_cart']);
Route::get('/show_cart',[HomeController::class,'show_cart']);
Route::get('/remove_cart/{id}',[HomeController::class,'remove_cart']);
Route::get('/cash_order',[HomeController::class,'cash_order']);
Route::get('/stripe/{totalprice}',[HomeController::class,'stripe']);
Route::post('/stripe/{totalprice}',[HomeController::class, 'stripePost'])->name('stripe.post');
Route::get('/show_order',[HomeController::class,'show_order']);
Route::get('/cancel_order/{id}',[HomeController::class,'cancel_order']);
Route::post('/add_comment',[HomeController::class, 'add_comment']);
Route::post('/add_reply',[HomeController::class, 'add_reply']);
Route::get('/product_search',[HomeController::class, 'product_search']);
Route::get('/products',[HomeController::class, 'products']);
Route::get('/search_product',[HomeController::class, 'search_product']);
require __DIR__.'/auth.php';
