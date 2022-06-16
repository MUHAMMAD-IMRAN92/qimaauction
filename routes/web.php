<?php

use App\Http\Controllers\ForgotPasswordController;
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

Route::group(['prefix' => 'customer', 'middleware' => ['auth', 'isCustomer']], function(){

    Route::get('user', function(){
        return view('customer.dashboard.upcomingauction');
    });

});



Route::group(['prefix' => 'admin', 'middleware' => ['auth', 'isAdmin']], function(){

    Route::get('dashboard', function(){
    return view('admin.dashboard.index');
    });

});



Route::get('/upcoming-auction', [App\Http\Controllers\HomeController::class, 'upcomingAuction'])->name('upcoming-auction');
Auth::routes();
Route::get('/newsletter', [App\Http\Controllers\HomeController::class, 'newsletter'])->name('news');
Route::get('/newsletterSave', [App\Http\Controllers\HomeController::class, 'newsletterpost'])->name('newsletter');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dev_test', [App\Http\Controllers\DevTestController::class , 'index']);
Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
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

    //Village CRUD Routes
    Route::get('/village/index', [App\Http\Controllers\VillageController::class, 'index']);
    Route::get('/village/allvillage', [App\Http\Controllers\VillageController::class, 'allvillage']);
    Route::get('/village/create', [App\Http\Controllers\VillageController::class, 'create']);
    Route::post('/village/create', [App\Http\Controllers\VillageController::class, 'save']);
    Route::get('/village/edit/{id}', [App\Http\Controllers\VillageController::class, 'edit']);
    Route::post('/village/edit', [App\Http\Controllers\VillageController::class, 'update']);
    Route::get('/village/delete/{id}', [App\Http\Controllers\VillageController::class, 'delete']);

    //Governorator CRUD Routes
    Route::get('/governorate/index', [App\Http\Controllers\GovernorateController::class, 'index']);
    Route::get('/governorate/allgovernorator', [App\Http\Controllers\GovernorateController::class, 'allgovernorator']);
    Route::get('/governorate/create', [App\Http\Controllers\GovernorateController::class, 'create']);
    Route::post('/governorate/create', [App\Http\Controllers\GovernorateController::class, 'save']);
    Route::get('/governorate/edit/{id}', [App\Http\Controllers\GovernorateController::class, 'edit']);
    Route::post('/governorate/edit', [App\Http\Controllers\GovernorateController::class, 'update']);
    Route::get('/governorate/delete/{id}', [App\Http\Controllers\GovernorateController::class, 'delete']);

    //Governorator CRUD Routes
    Route::get('/region/index', [App\Http\Controllers\RegionController::class, 'index']);
    Route::get('/region/allregion', [App\Http\Controllers\RegionController::class, 'allregion']);
    Route::get('/region/create', [App\Http\Controllers\RegionController::class, 'create']);
    Route::post('/region/create', [App\Http\Controllers\RegionController::class, 'save']);
    Route::get('/region/edit/{id}', [App\Http\Controllers\RegionController::class, 'edit']);
    Route::post('/region/edit', [App\Http\Controllers\RegionController::class, 'update']);
    Route::get('/region/delete/{id}', [App\Http\Controllers\RegionController::class, 'delete']);


    //Origin CRUD Routes
    Route::get('/origin/index', [App\Http\Controllers\OriginController::class, 'index']);
    Route::get('/origin/allorigin', [App\Http\Controllers\OriginController::class, 'allorigin']);
    Route::get('/origin/create', [App\Http\Controllers\OriginController::class, 'create']);
    Route::post('/origin/create', [App\Http\Controllers\OriginController::class, 'save']);
    Route::get('/origin/edit/{id}', [App\Http\Controllers\OriginController::class, 'edit']);
    Route::post('/origin/edit', [App\Http\Controllers\OriginController::class, 'update']);
    Route::get('/origin/delete/{id}', [App\Http\Controllers\OriginController::class, 'delete']);

     //Origin CRUD Routes
     Route::get('/process/index', [App\Http\Controllers\ProcessController::class, 'index']);
     Route::get('/process/allprocess', [App\Http\Controllers\ProcessController::class, 'allprocess']);
     Route::get('/process/create', [App\Http\Controllers\ProcessController::class, 'create']);
     Route::post('/process/create', [App\Http\Controllers\ProcessController::class, 'save']);
     Route::get('/process/edit/{id}', [App\Http\Controllers\ProcessController::class, 'edit']);
     Route::post('/process/edit', [App\Http\Controllers\ProcessController::class, 'update']);
     Route::get('/process/delete/{id}', [App\Http\Controllers\ProcessController::class, 'delete']);

       //Origin CRUD Routes
       Route::get('/genetic/index', [App\Http\Controllers\GeneticController::class, 'index']);
       Route::get('/genetic/allgenetic', [App\Http\Controllers\GeneticController::class, 'allgenetic']);
       Route::get('/genetic/create', [App\Http\Controllers\GeneticController::class, 'create']);
       Route::post('/genetic/create', [App\Http\Controllers\GeneticController::class, 'save']);
       Route::get('/genetic/edit/{id}', [App\Http\Controllers\GeneticController::class, 'edit']);
       Route::post('/genetic/edit', [App\Http\Controllers\GeneticController::class, 'update']);
       Route::get('/genetic/delete/{id}', [App\Http\Controllers\GeneticController::class, 'delete']);

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
    Route::get('/jury/edit/{id}', [App\Http\Controllers\JuryController::class, 'editjury']);
    Route::post('/jury/edit', [App\Http\Controllers\JuryController::class, 'update']);
    Route::get('/jury/delete/{id}', [App\Http\Controllers\JuryController::class, 'delete']);
    Route::get('/jury/send_to_jury', [App\Http\Controllers\JuryController::class, 'sendToJury']);
    Route::post('/jury/sample_search', [App\Http\Controllers\JuryController::class, 'sampleSearch'])->name('sample_search');
    Route::post('/jury/ajax_send_to_jury',  [App\Http\Controllers\JuryController::class, 'ajaxSendToJuryPost'])->name('ajax_send_to_jury');
    Route::post('/jury/send_to_jury',  [App\Http\Controllers\JuryController::class, 'sendToJuryPost']);
    Route::post('/jury/update_send_to_jury',  [App\Http\Controllers\JuryController::class, 'updateSentToJury'])->name('updateSentToJury');



    //option CRUD
    Route::get('/auction/index', [App\Http\Controllers\AuctionController::class, 'index']);
    Route::get('/auction/allauction', [App\Http\Controllers\AuctionController::class, 'allauction']);
    Route::get('/auction/products/{id}', [App\Http\Controllers\AuctionController::class, 'auctionProducts']);
    Route::post('/auction/saveAuctionProduct', [App\Http\Controllers\AuctionController::class, 'saveAuctionProduct'])->name('saveAuctionProduct');
    Route::post('/auction/getAuctionProduct', [App\Http\Controllers\AuctionController::class, 'getAuctionProduct'])->name('getAuctionProduct');
    Route::delete('/auction/deleteAuctionProduct', [App\Http\Controllers\AuctionController::class, 'deleteAuctionProduct'])->name('deleteAuctionProduct');
    Route::get('/auction/create', [App\Http\Controllers\AuctionController::class, 'create']);
    Route::get('/auction/edit/{id}', [App\Http\Controllers\AuctionController::class, 'edit']);
    Route::post('/auction/update/', [App\Http\Controllers\AuctionController::class, 'update']);
    Route::post('/auction/create', [App\Http\Controllers\AuctionController::class, 'save']);
    Route::get('/auction/delete/{id}', [App\Http\Controllers\AuctionController::class, 'delete']);
    Route::get('/auction/delete_product_image/{id}', [App\Http\Controllers\AuctionController::class, 'deleteImage']);
    //Customer CRUD
    Route::get('/customer/index', [App\Http\Controllers\CustomerController::class, 'index']);
    Route::get('/customer/create', [App\Http\Controllers\CustomerController::class, 'create']);
    Route::post('/customer/save', [App\Http\Controllers\CustomerController::class, 'save']);
    Route::get('/customer/edit/{id}', [App\Http\Controllers\CustomerController::class, 'edit']);
    Route::get('/customer/allcustomers', [App\Http\Controllers\CustomerController::class, 'allCustomer']);
    Route::post('/customer/update', [App\Http\Controllers\CustomerController::class, 'update']);


});

Route::get('/jury/links/{id}', [App\Http\Controllers\JuryController::class, 'juryLinks'])->name('juryLinks');
Route::get('/jury/link/give_review/{table}/{juryId}/{sampleId?}', [App\Http\Controllers\ProductController::class, 'review'])->name('give_review');
Route::get('/jury/link/give_review2/{table}/{juryId}/{sampleId?}', [App\Http\Controllers\ProductController::class, 'review2'])->name('give_review2');
Route::post('/jury/link/reviewSave', [App\Http\Controllers\ReviewController::class, 'saveReview']);

Route::get('/jury/formSample', [App\Http\Controllers\ReviewController::class, 'form']);
Route::get('/review/reviewed_samples', [App\Http\Controllers\ReviewController::class, 'reviewedSamples']);
Route::get('/review/summary', [App\Http\Controllers\ReviewController::class, 'reviewSummary']);
Route::post('/review/tabledata/{juryId?}/{table?}', [App\Http\Controllers\ReviewController::class, 'reviewTableData'])->name('sampletable');
Route::get('/review/review_detail/{sample?}', [App\Http\Controllers\ReviewController::class, 'reviewDetail'])->name('review_detail');
//CSV Routes
Route::get('/review/review_detail/csv/{sample}', [App\Http\Controllers\ReviewController::class, 'reviewDetailCsv'])->name('reviewdetail_csv');
Route::get('/review/summary/csv', [App\Http\Controllers\ReviewController::class, 'reviewSummaryCsv'])->name('reviewsummary_csv');

//Customer Reset Passwords Routes
Route::get('reset-password/{token}', [App\Http\Controllers\CustomerController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [App\Http\Controllers\CustomerController::class, 'submitResetPasswordForm'])->name('reset.password.post');
Route::get('/customer-login', [App\Http\Controllers\CustomerController::class, 'customerLogin'])->name('customer.login');
