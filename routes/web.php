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
// Route::view('/', 'customer.dashboard.index');

Route::post('signup', [App\Http\Controllers\AuctionController::class, 'newslettersignup']);
Route::get('/', [App\Http\Controllers\AuctionController::class, 'winningCoffee']);
// Route::view('/index-new', 'customer.dashboard.index-new');
Route::get('/index-new', [App\Http\Controllers\AuctionController::class, 'winningCoffee']);
Route::get('/winningproduct/{id}', [App\Http\Controllers\AuctionController::class, 'winningCoffeeProducts']);
Route::get('/auction-home', [App\Http\Controllers\AuctionController::class, 'auctionHome'])->name('auction-home');
Route::post('/opensidebar', [App\Http\Controllers\AuctionController::class, 'openSideBar'])->name('opensidebar');
Route::get('/auction-winners', [App\Http\Controllers\AuctionController::class, 'auctionWinners'])->name('auction-winners');


// Route::get('/auction-loggedin', [App\Http\Controllers\AuctionController::class, 'auctionHomeLoggedIn'])->name('auction-loggedin');

Route::view('/auction-home3', 'customer.auction_pages.auction_home3');

Route::group(['middleware' => ['auth', 'isCustomer']], function() {

    // Route::get('userdashboard', function() {
    //     return view('user.dashboard.index');
    // });
    Route::get('/user-dashboard', [App\Http\Controllers\UserProfileController::class, 'userDashboard']);
    Route::get('/user-profile', [App\Http\Controllers\UserProfileController::class, 'userProfile']);
    Route::post('/userprofile/update', [App\Http\Controllers\UserProfileController::class, 'updateUser']);
    Route::post('/removeimage', [App\Http\Controllers\UserProfileController::class, 'removeUserImage'])->name('removeuserimage');
    Route::get('/winninglots', [App\Http\Controllers\UserProfileController::class, 'winningLots']);

    Route::get('/highestbids', [App\Http\Controllers\UserProfileController::class, 'highestBids']);
    Route::get('/allbids', [App\Http\Controllers\UserProfileController::class, 'allBidsData']);

    Route::get('/auction', [App\Http\Controllers\AuctionController::class, 'auctionFrontend'])->name('auction');
    Route::post('/singlebiddata', [App\Http\Controllers\AuctionController::class, 'singleBidData'])->name('singlebiddata');
    Route::post('/autobiddata', [App\Http\Controllers\AuctionController::class, 'autoBidData'])->name('autobiddata');
    Route::post('/removeautobid', [App\Http\Controllers\AuctionController::class, 'removeAutoBid'])->name('removeautobid');
    Route::post('/saveyourscore', [App\Http\Controllers\AuctionController::class, 'saveYourScore'])->name('saveyourscore');
    //group bidding routes
    Route::post('/savegroupbid', [App\Http\Controllers\AuctionController::class, 'saveGroupBidOffer'])->name('savegroupbidoffer');
    Route::post('/groupbidsidebar', [App\Http\Controllers\AuctionController::class, 'groupBidSideBar'])->name('groupbiddingsidebar');
    Route::post('/groupbidupdateStatus', [App\Http\Controllers\AuctionController::class, 'groupbidupdateStatus'])->name('groupbidupdateStatus');
    

});
Route::get('/productdetail/{id}', [App\Http\Controllers\AuctionController::class, 'winningProductsSidebar'])->name('productsidebar');
Route::post('/auction/updateSaveAutoBids', [App\Http\Controllers\AuctionController::class, 'updateSaveAutoBids'])->name('updateSaveAutoBids');
Route::post('/auction/getAuctionProduct', [App\Http\Controllers\AuctionController::class, 'getAuctionProduct'])->name('getAuctionProduct');
Route::post('/auction/getUser', [App\Http\Controllers\AuctionController::class, 'getUser'])->name('getUser');
Route::group(['middleware' => ['auth', 'isAdminDashboard']], function() {

    Route::get('/auction/adminDashboard', [App\Http\Controllers\AuctionController::class, 'prductBiddingDashboard'])->name('prductBiddingDashboard');
});
Route::get('user_logout', function () {
    if (Auth::user()) {
        Auth::logout();
    }
    return Redirect::to('/auction-home');
})->name('user_logout');
Route::group(['middleware' => ['auth', 'isAdmin']], function() {

    Route::get('dashboard', function() {
        return view('admin.dashboard.index');
    });

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
    Route::post('/product/sent_to_jury', [App\Http\Controllers\ProductController::class, 'sentToJury']);
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
    Route::post('/jury/ajax_send_to_jury', [App\Http\Controllers\JuryController::class, 'ajaxSendToJuryPost'])->name('ajax_send_to_jury');
    Route::post('/jury/send_to_jury', [App\Http\Controllers\JuryController::class, 'sendToJuryPost']);
    Route::post('/jury/update_send_to_jury', [App\Http\Controllers\JuryController::class, 'updateSentToJury'])->name('updateSentToJury');

    //auction CRUD
    Route::get('/auction/index', [App\Http\Controllers\AuctionController::class, 'index']);
    Route::get('/auction/allauction', [App\Http\Controllers\AuctionController::class, 'allauction']);
    Route::get('/auction/products/{id}', [App\Http\Controllers\AuctionController::class, 'auctionProducts']);
    Route::post('/auction/saveAuctionProduct', [App\Http\Controllers\AuctionController::class, 'saveAuctionProduct'])->name('saveAuctionProduct');
    Route::delete('/auction/deleteAuctionProduct', [App\Http\Controllers\AuctionController::class, 'deleteAuctionProduct'])->name('deleteAuctionProduct');
    Route::get('/auction/create', [App\Http\Controllers\AuctionController::class, 'create']);
    Route::get('/auction/edit/{id}', [App\Http\Controllers\AuctionController::class, 'edit']);
    Route::post('/auction/update/', [App\Http\Controllers\AuctionController::class, 'update']);
    Route::post('/auction/create', [App\Http\Controllers\AuctionController::class, 'save']);
    Route::get('/auction/delete/{id}', [App\Http\Controllers\AuctionController::class, 'delete']);
    Route::get('/auction/dashboard/{id}', [App\Http\Controllers\AuctionController::class, 'prductBiddingDetail'])->name('prductBiddingDetail');
    Route::get('/auction/delete_product_image/{id}', [App\Http\Controllers\AuctionController::class, 'deleteImage']);
    Route::get('/AuctionProducts', [App\Http\Controllers\AuctionController::class, 'auctionFrontend'])->name('auctionProducts');
    Route::get('/auction/autobids', [App\Http\Controllers\AuctionController::class, 'autoBids'])->name('autobids');
    Route::get('/auction/updateAutoBids/{id}', [App\Http\Controllers\AuctionController::class, 'updateAutoBids'])->name('updateAutoBids');
    Route::post('/auction/auctionend', [App\Http\Controllers\AuctionController::class, 'auctionEnd'])->name('auctionEnd');
    Route::post('/auction/auctinreset', [App\Http\Controllers\AuctionController::class, 'auctionReset'])->name('auctionReset');
    Route::post('/groupbidsidebaradmin', [App\Http\Controllers\AuctionController::class, 'groupbidAdminSidebar'])->name('groupbidadminsidebar');


    //Customer CRUD
    Route::get('/customer/index', [App\Http\Controllers\CustomerController::class, 'index']);
    Route::get('/customer/create', [App\Http\Controllers\CustomerController::class, 'create']);
    Route::post('/customer/save', [App\Http\Controllers\CustomerController::class, 'save']);
    Route::get('/customer/edit/{id}', [App\Http\Controllers\CustomerController::class, 'edit']);
    Route::get('/customer/allcustomers', [App\Http\Controllers\CustomerController::class, 'allCustomer']);
    Route::post('/customer/update', [App\Http\Controllers\CustomerController::class, 'update']);
    Route::get('/customer/email_resend/{id}', [App\Http\Controllers\CustomerController::class, 'resendEmail']);


    //Bid Limit Crud
    Route::get('/bidlimit/index', [App\Http\Controllers\BidlimitController::class, 'index']);
    Route::get('/bidlimit/create', [App\Http\Controllers\BidlimitController::class, 'create']);
    Route::post('/bidlimit/save', [App\Http\Controllers\BidlimitController::class, 'save']);
    // Route::get('/bidlimit/allBidlimit', [App\Http\Controllers\BidlimitController::class, 'allBidlimit']);
    Route::get('/bidlimit/edit', [App\Http\Controllers\BidlimitController::class, 'edit']);
    Route::post('/bidlimit/update', [App\Http\Controllers\BidlimitController::class, 'update']);

    //Agreement Controller
    Route::get('/agreement', [App\Http\Controllers\AgreementController::class, 'agreement']);
    Route::post('/agreement', [App\Http\Controllers\AgreementController::class, 'agreement'])->name('agreement');

    //Auction reports routes
    //Overview report
    Route::get('/report_overview/{year?}', [App\Http\Controllers\AuctionReportsController::class, 'overViewReport'])->name('ReportOverview');
    Route::get('/report_overview/csv/{id?}', [App\Http\Controllers\AuctionReportsController::class, 'auctionReportCSV'])->name('auctionreport_csv');

    //Lot winners report
    Route::get('/report_lotwinners', [App\Http\Controllers\AuctionReportsController::class, 'lotWinnersReport'])->name('ReportLotWinners');
    Route::get('/report_lotwinners/csv/{id?}', [App\Http\Controllers\AuctionReportsController::class, 'lotWinnersReportCSV'])->name('lotwinners_report_csv');
    //save delivery status
    Route::post('/save_deliverystatus', [App\Http\Controllers\AuctionReportsController::class, 'saveDeliveryStatus'])->name('savedeliverystatus');

    //Bidder summary report
    Route::get('/report_bidder_summary', [App\Http\Controllers\AuctionReportsController::class, 'bidderSummaryReport'])->name('ReportBidderSummary');
    Route::get('/report_bidder_summary/csv/{id?}', [App\Http\Controllers\AuctionReportsController::class, 'bidderSummaryReportCSV'])->name('bidder_summary_csv');

    //Full bid report
    Route::get('/report_fullbid', [App\Http\Controllers\AuctionReportsController::class, 'fullBidReport'])->name('ReportFullBid');
    Route::get('/report_fullbid/csv/{id?}', [App\Http\Controllers\AuctionReportsController::class, 'fullBidReportCSV'])->name('fullbid_csv');

});

Auth::routes();
Route::get('/newsletter', [App\Http\Controllers\HomeController::class, 'newsletter'])->name('news');
Route::get('/newsletterSave', [App\Http\Controllers\HomeController::class, 'newsletterpost'])->name('newsletter');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dev_test', [App\Http\Controllers\DevTestController::class, 'index']);
// Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::middleware(['auth'])->group(function () {
    //Dashboard Route
    // Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
});
//Open Cupping
Route::get('/cupping/index', [App\Http\Controllers\OpenCuppingController::class, 'index']);
Route::post('/cupping/openCuppingUser', [App\Http\Controllers\OpenCuppingController::class, 'openCuppingUser'])->name('openCuppingUser');
Route::get('/cupping/create', [App\Http\Controllers\OpenCuppingController::class, 'create']);
Route::post('/cupping/save', [App\Http\Controllers\OpenCuppingController::class, 'store'])->name('open_cupping');
Route::get('/cupping/show/{userId?}', [App\Http\Controllers\OpenCuppingController::class, 'show'])->name('show_cupping');
Route::get('/jury/link/give_cupping_review/{userId}/{table}/{sampleId?}', [App\Http\Controllers\OpenCuppingController::class, 'review2'])->name('give_cupping_review');
Route::post('/jury/link/saveCuppingReview', [App\Http\Controllers\OpenCuppingController::class, 'saveCuppingReview']);
Route::get('/cupping/openCuppingFeedback', [App\Http\Controllers\OpenCuppingController::class, 'openCuppingFeedback'])->name('openCuppingFeedback');
Route::get('/cupping/openCuppingSummary', [App\Http\Controllers\OpenCuppingController::class, 'openCuppingSummary'])->name('openCuppingSummary');
Route::get('/cupping/openCuppingReviewDetail/{sample?}', [App\Http\Controllers\OpenCuppingController::class, 'openCuppingReviewDetail'])->name('openCuppingReviewDetail');
//End Cupping
Route::get('/jury/links/{id}', [App\Http\Controllers\JuryController::class, 'juryLinks'])->name('juryLinks');
Route::get('/jury/link/give_review/{table?}/{juryId?}/{sampleId?}', [App\Http\Controllers\ProductController::class, 'review'])->name('give_review');
Route::post('/jury/link/reviewSave', [App\Http\Controllers\ReviewController::class, 'saveReview']);

Route::get('/jury/formSample', [App\Http\Controllers\ReviewController::class, 'form']);
Route::get('/review/reviewed_samples', [App\Http\Controllers\ReviewController::class, 'reviewedSamples']);
Route::get('/review/summary', [App\Http\Controllers\ReviewController::class, 'reviewSummary']);
Route::post('/review/tabledata/{juryId?}/{table?}', [App\Http\Controllers\ReviewController::class, 'reviewTableData'])->name('sampletable');
Route::get('/review/review_detail/{sample?}', [App\Http\Controllers\ReviewController::class, 'reviewDetail'])->name('review_detail');
//CSV Routes
Route::get('/review/review_detail/csv/{sample}', [App\Http\Controllers\ReviewController::class, 'reviewDetailCsv'])->name('reviewdetail_csv');
Route::get('/review/summary/csv', [App\Http\Controllers\ReviewController::class, 'reviewSummaryCsv'])->name('reviewsummary_csv');
Route::get('/agreement/{slug?}', [App\Http\Controllers\ReviewController::class, 'agreement']);
Route::post('/agreements', [App\Http\Controllers\ReviewController::class, 'agreement'])->name('agreement');


//Customer Reset Passwords Routes
Route::get('reset-password/{token}', [App\Http\Controllers\CustomerController::class, 'showResetPasswordForm'])->name('reset.password.get');
Route::post('reset-password', [App\Http\Controllers\CustomerController::class, 'submitResetPasswordForm'])->name('reset.password.post');
Route::get('/customer-login', [App\Http\Controllers\CustomerController::class, 'customerLogin'])->name('customer.login');
//
Route::view('/terms_conditions', 'customer/pages/terms_conditions');
Route::view('/privacy_policy', 'customer/pages/privacy_policy');
Route::get('/bid_agreement', function(){
    return redirect('public/bidding_agreement.pdf');
});//'customer/pages/bid_agreement');
Route::post('/accept-agrements', [App\Http\Controllers\AgreementController::class, 'acceptAgreement']);
