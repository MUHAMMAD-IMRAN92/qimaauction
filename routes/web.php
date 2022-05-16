<?php

use Illuminate\Support\Facades\Auth;
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



Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dev_test', [App\Http\Controllers\DevTestController::class , 'index']);
Route::middleware(['auth'])->group(function () {
    //Dashboard Route
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);

    //Category CRUD Routes 
    Route::get('/categories/index', [App\Http\Controllers\CategoryController::class, 'index']);
    Route::get('/categories/allcategories', [App\Http\Controllers\CategoryController::class, 'allCategory']);
    Route::get('/categories/create', [App\Http\Controllers\CategoryController::class, 'create']);
    Route::post('/categories/create', [App\Http\Controllers\CategoryController::class, 'save']);
    Route::get('/categories/edit/{id}', [App\Http\Controllers\CategoryController::class, 'edit']);
    Route::post('/categories/edit', [App\Http\Controllers\CategoryController::class, 'update']);
    Route::get('/categories/delete/{id}', [App\Http\Controllers\CategoryController::class, 'delete']);

    //Flavour CRUD Routes
    Route::get('/flavour/index', [App\Http\Controllers\FlavourController::class, 'index']);
    Route::get('/flavour/allflavour', [App\Http\Controllers\FlavourController::class, 'allflavour']);
    Route::get('/flavour/create', [App\Http\Controllers\FlavourController::class, 'create']);
    Route::post('/flavour/create', [App\Http\Controllers\FlavourController::class, 'save']);
    Route::get('/flavour/edit/{id}', [App\Http\Controllers\FlavourController::class, 'edit']);
    Route::post('/flavour/edit', [App\Http\Controllers\FlavourController::class, 'update']);
    Route::get('/flavour/delete/{id}', [App\Http\Controllers\FlavourController::class, 'delete']);

    //Origin CRUD Routes
    Route::get('/origin/index', [App\Http\Controllers\OriginController::class, 'index']);
    Route::get('/origin/allorigin', [App\Http\Controllers\OriginController::class, 'allorigin']);
    Route::get('/origin/create', [App\Http\Controllers\OriginController::class, 'create']);
    Route::post('/origin/create', [App\Http\Controllers\OriginController::class, 'save']);
    Route::get('/origin/edit/{id}', [App\Http\Controllers\OriginController::class, 'edit']);
    Route::post('/origin/edit', [App\Http\Controllers\OriginController::class, 'update']);
    Route::get('/origin/delete/{id}', [App\Http\Controllers\OriginController::class, 'delete']);

    //Product CRUD 
    Route::get('/product/index', [App\Http\Controllers\ProductController::class, 'index']);
    Route::get('/product/allproduct', [App\Http\Controllers\ProductController::class, 'allProduct']);
    Route::get('/product/create', [App\Http\Controllers\ProductController::class, 'create']);
    Route::post('/product/create', [App\Http\Controllers\ProductController::class, 'save']);
    Route::get('/product/edit/{id}', [App\Http\Controllers\ProductController::class, 'edit']);
    Route::post('/product/edit', [App\Http\Controllers\ProductController::class, 'update']);
    Route::get('/product/delete/{id}', [App\Http\Controllers\ProductController::class, 'delete']);
    Route::get('/product/delete_product_image/{id}', [App\Http\Controllers\ProductController::class, 'deleteImage']);
    Route::get('/product/view/{id}', [App\Http\Controllers\ProductController::class, 'view']);
    //Product & Jury
    Route::post('/product/sent_to_jury',  [App\Http\Controllers\ProductController::class, 'sentToJury']);
    
    //jury CRUD 
    Route::get('/jury/index', [App\Http\Controllers\JuryController::class, 'index']);
    Route::get('/jury/alljury', [App\Http\Controllers\JuryController::class, 'alljury']);
    Route::get('/jury/create', [App\Http\Controllers\JuryController::class, 'create']);
    Route::post('/jury/create', [App\Http\Controllers\JuryController::class, 'save']);
    Route::get('/jury/edit/{id}', [App\Http\Controllers\JuryController::class, 'edit']);
    Route::post('/jury/edit', [App\Http\Controllers\JuryController::class, 'update']);
    Route::get('/jury/delete/{id}', [App\Http\Controllers\JuryController::class, 'delete']);
    Route::get('/jury/send_to_jury', [App\Http\Controllers\JuryController::class, 'sendToJury']);
    Route::post('/jury/send_to_jury',  [App\Http\Controllers\JuryController::class, 'sendToJuryPost']);

});

Route::get('/jury/links/{id}', [App\Http\Controllers\JuryController::class, 'juryLinks']);
Route::get('/jury/link/give_review/{link}/{pId}/{jId}', [App\Http\Controllers\ProductController::class, 'review']);
Route::post('/jury/link/reviewSave', [App\Http\Controllers\ReviewController::class, 'saveReview']);

Route::get('/jury/formSample', [App\Http\Controllers\ReviewController::class, 'form']);