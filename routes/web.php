<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormValidtionController;

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

Route::get('/', 'HomeController@index');
Route::get('/eht/head', 'IMotorStockFeedController@headIMotorStockFeed');
Route::get('/eht/header', 'IMotorStockFeedController@headerIMotorStockFeed');
Route::get('/eht/footer', 'IMotorStockFeedController@footerIMotorStockFeed');
    
// Route::get('/disclaimer', function () {
//     return view('disclaimer');
// });

Route::get('/disclaimer', "CompanyController@getDisclaimer");

Route::post("/career",[FormValidtionController::class,'CarrerForm']);
Route::get("/career", 'CompanyController@getCareerLocation');

Route::post("/about-us",[FormValidtionController::class,'AboutUsForm']);
Route::get("/about-us", 'CompanyController@getAboutUsLocation');

Route::post("/contact-us",[FormValidtionController::class,'ContactUsForm']);
Route::get("/contact-us", 'CompanyController@getContactUsLocation');

Route::post("/finance-calculator",[FormValidtionController::class,'FinanceCalculatorForm']);
Route::get("/finance-calculator", 'FinanceController@getFinanceCalculatorLocation');

Route::post("/finance",[FormValidtionController::class,'FinanceForm']);
Route::get("/finance", 'FinanceController@getFinanceLocation');

// Route::get('/inventory-detail', 'InventoryController@inventory_detail_index');
// Route::get('/inventory-detail', function () {
//     return view('inventory-detail');
// });
// Route::get('/inventory', 'InventoryController@index');
Route::get('/stock/search/', 'InventoryController@index');
// Route::post('/stock/search/', [FormValidtionController::class,'FindTruckForm']);
Route::post('/stock/ourstockform', [FormValidtionController::class,'OurStockForm']);

Route::post('/stock/search/', 'InventoryController@filter_stockdata')->name('filter.stock');
Route::get('/stock/new-trucks/', 'InventoryController@get_newtrucks');
Route::get('/stock/new-trucks/{slug}', 'InventoryController@get_newtrucks_detail');
Route::get('/stock/demo-trucks/', 'InventoryController@get_demotrucks');
Route::get('/stock/demo-trucks/{slug}', 'InventoryController@get_demotrucks_detail');

Route::get('/stock/used-trucks/', 'InventoryController@get_usedtrucks');
// Route::post('/stock/used-trucks/', [FormValidtionController::class,'SendToFriendForm']);
// Route::post('/stock/used-trucks/', [FormValidtionController::class,'MakeEnquiryForm']);
Route::post('/stock/used-trucks', [FormValidtionController::class,'ViewDetailsForm']);

Route::get('/stock/used-trucks/{slug}', 'InventoryController@get_usedtrucks_detail');
// Route::get('/inventory-page', function () {
//     return view('inventory-page');
// });
/* Route::get('/latest-news', function () {
    return view('latest-news');
}); */
Route::get("/latest-news", 'NewsController@getNewsLocation');

Route::post("/our-team",[FormValidtionController::class,'OurTeamForm']);
Route::get("/our-team", 'CompanyController@getMeetOurTeamLocation');

Route::post("/parts-specials",[FormValidtionController::class,'PartsSpecialForm']);
Route::get("/parts-specials", 'PartsController@getPartsSpecialLocation');

Route::post("/parts",[FormValidtionController::class,'PartsForm']);
Route::get("/parts", 'PartsController@getPartsLocation');

Route::get('/engines', "InventoryController@getEngineDetails");
Route::get('/transmissions', "InventoryController@getTransmissionsDetails");

/* Route::get('/recent-deliveries', function () {
    return view('recent-deliveries');
}); */
Route::get("/recent-deliveries", 'NewsController@getRecentDeliveriesLocation');

Route::post("/service",[FormValidtionController::class,'ServiceForm']);
Route::get("/service", 'ServiceController@getServiceLocation');

Route::get('/specials', 'InventoryController@get_specials');
Route::post('/specials', [FormValidtionController::class,'SpecialsForm']);
// Route::get('/specials', function () {
//     return view('specials');
// });
/* Route::get('/brands/{sub_brand}', function () {
    return view('brands');
}); */
Route::get('/brands/{brand}/{subbrand_slug?}/{subsubbrand_slug?}', ['uses' => 'InventoryController@getBrandData', 'as' => 'get.brand.data']);
// Route::get('/brands/{sub_brand}', function () {
//     return view('brands');  
// });
Route::get('/brand-details', function () {
    return view('brand-details');
});
Route::get('/warranty', "ServiceController@getServiceWarranty");
Route::get('/roadside-assistance', "ServiceController@getRoadsideAssistance");
Route::get('/service-plans', "ServiceController@getServicePlans");
Route::get('/elite-support', "ServiceController@getEliteSupport");

Route::get("/blog-posts/{slug}", 'NewsController@getNewsDetils');
Route::get('/factory-offers/{manufacturer?}', 'InventoryController@special_factory_offer');
// Route::get('/customer-amenities', 'CompanyController@getCustomerAmenities');
