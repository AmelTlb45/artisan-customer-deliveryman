<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtisanController;
use App\Http\Controllers\ProfileController;
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

    Route::patch('/profile/avatar', [AvatarController::class, 'update'])->name('profile.avatar');
    Route::post('/profile/avatar/ai', [AvatarController::class, 'generate'])->name('profile.avatar.ai');


});





Route::middleware('auth')->group(function () {

    Route::get('/users/artisans/products', [ProductController::class, 'index'])->name('users.artisans.products.index');
    // Define other routes as needed
    Route::post('/users/artisans/products', [ProductController::class, 'create'])->name('users.artisans.products.create');

});


Route::get('/redirect',[HomeController::class,'redirect']);
Route::get('/',[HomeController::class,'index']);
Route::get('/view_category',[ArtisanController::class,'view_category']);
Route::post('/add_category',[ArtisanController::class,'add_category']);
Route::get('/delete_category/{id}',[ArtisanController::class,'delet_category']);
Route::get('/view_product',[ArtisanController::class,'view_product']);
Route::post('/add_product',[ArtisanController::class,'add_product']);
Route::get('/show_product',[ArtisanController::class,'show_product']);
Route::get('/delete_product/{id}',[ArtisanController::class,'delet_product']);
Route::post('/add_type',[ArtisanController::class,'add_type']);
Route::get('/view_type',[ArtisanController::class,'view_type']);
Route::get('/delete_type/{id}',[ArtisanController::class,'delete_type']);


require __DIR__.'/auth.php';
