<?php


// dependencies notification

use App\Notifications\Signup;

use App\User;

use Carbon\Carbon;
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

// Route::get('/', function () {
//     return view('front.home');
// });



// Clear Cache

Route::get('/clear-cache', function() {
    $exitCode = Artisan::call('config:cache');
    return 'DONE CACHE CLEAR'; //Return anything
});


// Clear Views Path Cache

Route::get('/clear-views', function() {
    $exitCode = Artisan::call('view:clear');
    return 'DONE VIEW CLEAR'; //Return anything
});

// Clear Routes Path Cache

Route::get('/clear-routes', function() {
    $exitCode = Artisan::call('route:cache');
    return 'DONE ROUTES CLEAR'; //Return anything
});

// Clear Facades Path Cache

Route::get('/clear-facades', function() {
    $exitCode = Artisan::call('cache:clear');
    return 'DONE FACADES CLEAR'; //Return anything
});


// Optimize

Route::get('/optimize', function() {
    $exitCode = Artisan::call('optimize');
    return 'DONE OPTIMIZATION'; //Return anything
});



// General Access Routes

Route::get('/', 'FrontController@index');

Auth::routes();

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'FrontController@index')->name('home');

Route::get('/blog', 'FrontController@blogShow');

Route::get( 'blog_post/{slug}', 'FrontController@blogShowPost' )->name('one.post');

Route::get( '/blog_category/{name?}', 'FrontController@blogCategory' )->name('blogCategory');

Route::get( 'event/{id}', 'FrontController@eventPage' )->name('one.event');

Route::any('event/book-event/{id}', 'FrontController@bookEvent')->name('event.bookEvent');

Route::any('save-message', 'FrontController@storeMessage')->name('storeMessage');

Route::any('save-quote', 'FrontController@storeAirQuote')->name('storeAirQuote');

Route::any('save-enquiry', 'FrontController@storeEnquiry')->name('storeEnquiry');

Route::any('save-dharura', 'FrontController@storeDharura')->name('storeDharura');

Route::any('save-kikwetu', 'FrontController@storeKikwetu')->name('storeKikwetu');

Route::any('save-fanaka', 'FrontController@storeFanaka')->name('storeFanaka');

Route::any('save-msafiripsv', 'FrontController@storeMsafiriPSV')->name('storeMsafiriPSV');

Route::any('save-msafirimoto', 'FrontController@storeMsafiriMoto')->name('storeMsafiriMoto');


// Packges - Medical

Route::any('save-medical-institution', 'FrontController@storeMedicalInstitution')->name('storeMedicalInstitution');

Route::any('save-medical-corporate', 'FrontController@storeMedicalCorporate')->name('storeMedicalCorporate');

Route::any('save-medical-estates', 'FrontController@storeMedicalEstate')->name('storeMedicalEstate');

Route::any('save-medical-residence', 'FrontController@storeMedicalResidence')->name('storeMedicalResidence');

Route::any('save-medical-individual', 'FrontController@storeMedicalIndividual')->name('storeMedicalIndividual');

Route::any('save-medical-family', 'FrontController@storeMedicalFamily')->name('storeMedicalFamily');


// Packges - Fire

Route::any('save-fire-package', 'FrontController@storeFirePackage')->name('storeFirePackage');


// Packges - Fire

Route::any('save-road-package', 'FrontController@storeRoadPackage')->name('storeRoadPackage');


// Rescue Teams

Route::any('save-teamfirst', 'FrontController@storeFirstRescue')->name('storeFirstRescue');
Route::any('save-teamfire', 'FrontController@storeFireRescue')->name('storeFireRescue');
Route::any('save-teamroad', 'FrontController@storeRoadRescue')->name('storeRoadRescue');
Route::any('save-teammedical', 'FrontController@storeMedicalRescue')->name('storeMedicalRescue');


// Subscriber
Route::any('save-subscriber', 'FrontController@storeSubscriber')->name('storeSubscriber');

Route::get('/search', 'FrontController@blogSearch' )->name('search');





// Notification Routes


// Route::get('/', function(){

// $when = Carbon::now()->addSeconds(10);
// $user = user::find(1);

// User::find(1)->notify((new Signup)->delay($when));

// User::find(1)->notify(new Signup);



// return view('welcome');
// });






// Admin Auth 

Route::group( [ 'prefix' => 'admin_area', 'middleware' => [ 'auth', 'admin' ] ], function () {


Route::get( '/', function () {

	return view( 'admin.index' );

} )->name( 'admin.index' );


// Blog Routes

Route::get('/blog_post','AdminController@blogAddPost');
Route::post('/save_post','AdminController@storePost')->name('storePost');
Route::get('/blog_category','AdminController@blogCategory');
Route::post('/save_category','AdminController@storeCategory')->name('storeCategory');
Route::get('/subscribers','AdminController@blogSubscribers');
Route::any('/delete_post/{id}','AdminController@deletePost')->name('deletePost');
Route::any('/delete_cat/{id}','AdminController@deleteCategory')->name('deleteCategory');
Route::any('/delete_sub/{id}','AdminController@deleteSubscriber')->name('deleteSubscriber');


// Profile And Admins

Route::get('/update_profile','AdminController@profileUpdate');
Route::post('/store_profile', 'AdminController@storeProfile')->name('storeProfile');
Route::any('/delete_admin/{id}','AdminController@deleteAdmin')->name('deleteAdmin');
Route::post('/store_admin', 'AdminController@storeAdmin')->name('storeAdmin');


// Chart Routes

Route::get('/charts','AdminController@dashCharts');


// Event Routes

Route::get('/add_event','AdminController@add_event');
Route::post('/save_event','AdminController@storeEvent')->name('storeEvent');
Route::get('/add_event_images/{id}','AdminController@addEventImages')->name('addPartnerLogos');
Route::post('/store_event_images','AdminController@storeEventImages')->name('store_event_images');
Route::get('/event_tickets','AdminController@show_events_tickets');
Route::any('/delete_event_ticket/{id}','AdminController@deleteEventTicket')->name('deleteEventTicket');
Route::any('/delete_event/{id}','AdminController@deleteEvent')->name('deleteEvent');
Route::any('/delete_event_partner/{id}','AdminController@deleteEventPartner')->name('deleteEventPartner');




// Contact
Route::get('/contact_messages','AdminController@contact_messages');
Route::any('/delete_message/{id}','AdminController@deleteMessage')->name('deleteMessage');

// Enquiries
Route::get('/general_enquiries','AdminController@showEnquiries');
Route::any('/delete_enquiry/{id}','AdminController@deleteEnquiry')->name('deleteEnquiry');

// Products | Dharura
Route::get('/products/dharura/dharura_platinum', 'AdminController@dharuraPlatinum');
Route::get('/products/dharura/dharura_gold', 'AdminController@dharuraGold');
Route::get('/products/dharura/dharura_bronze', 'AdminController@dharuraBronze');
Route::get('/products/dharura/dharura_silver', 'AdminController@dharuraSilver');
Route::any('/delete_dharura/{id}','AdminController@deleteDharura')->name('deleteDharura');


// Products | Msafiri
Route::get('/products/msafiri/psv', 'AdminController@msafiriPSV');
Route::get('/products/msafiri/priv_motorist', 'AdminController@msafiriMoto');
Route::any('/delete_msafiri_psv/{id}','AdminController@deleteMsafiriPsv')->name('deleteMsafiriPsv');
Route::any('/delete_msafiri_moto/{id}','AdminController@deleteMsafiriMoto')->name('deleteMsafiriMoto');

// Products | Fanaka
Route::get('/products/fanaka/', 'AdminController@Fanaka');
Route::any('/delete_fanaka/{id}','AdminController@deleteFanaka')->name('deleteFanaka');


// Memberships | Road
Route::get('/memberships/road/saloon', 'DataController@roadSaloon');
Route::get('/memberships/road/suv', 'DataController@roadSuv');
Route::get('/memberships/road/bus', 'DataController@roadBus');
Route::get('/memberships/road/truck', 'DataController@roadTruck');
Route::any('/delete_saloon/{id}','DataController@deleteroadSaloon')->name('deleteroadSaloon');
Route::any('/delete_suv/{id}','DataController@deleteroadSuv')->name('deleteroadSuv');
Route::any('/delete_bus/{id}','DataController@deleteroadBus')->name('deleteroadBus');
Route::any('/delete_truck/{id}','DataController@deleteroadTruck')->name('deleteroadTruck');


// Memberships | Fire
Route::get('/memberships/fire/institution', 'DataController@fireInstitution');
Route::get('/memberships/fire/residence', 'DataController@fireResidence');
Route::get('/memberships/fire/corporate', 'DataController@fireCorporate');
Route::get('/memberships/fire/hotel', 'DataController@fireHotel');
Route::get('/memberships/fire/estate', 'DataController@fireEstate');

Route::any('/delete_inst/{id}','DataController@deletefireInstitution')->name('deletefireInstitution');
Route::any('/delete_res/{id}','DataController@deletefireResidence')->name('deletefireResidence');
Route::any('/delete_corpo/{id}','DataController@deletefireCorporate')->name('deletefireCorporate');
Route::any('/delete_hotel/{id}','DataController@deletefireHotel')->name('deletefireHotel');
Route::any('/delete_estate/{id}','DataController@deletefireEstate')->name('deletefireEstate');



// Memberships | Medical
Route::get('/memberships/medical/institution', 'DataController@medicalInstitution');
Route::get('/memberships/medical/residence', 'DataController@medicalResidence');
Route::get('/memberships/medical/corporate', 'DataController@medicalCorporate');
Route::get('/memberships/medical/individual', 'DataController@medicalIndividual');
Route::get('/memberships/medical/estate', 'DataController@medicalEstate');
Route::get('/memberships/medical/family', 'DataController@medicalFamily');

Route::any('/delete_inst_med/{id}','DataController@deletemedicalInstitution')->name('deletemedicalInstitution');
Route::any('/delete_res_med/{id}','DataController@deletemedicalResidence')->name('deletemedicalResidence');
Route::any('/delete_corpo_med/{id}','DataController@deletemedicalCorporate')->name('deletemedicalCorporate');
Route::any('/delete_hotel_med/{id}','DataController@deletemedicalIndividual')->name('deletemedicalIndividual');
Route::any('/delete_estate_med/{id}','DataController@deletemedicalEstate')->name('deletemedicalEstate');
Route::any('/delete_family_med/{id}','DataController@deletemedicalFamily')->name('deletemedicalFamily');



// Rescue Teams

Route::get('/rescue_team/first_responder/', 'AdminController@rescueFirst');
Route::get('/rescue_team/fire/', 'AdminController@rescueFire');
Route::get('/rescue_team/road/', 'AdminController@rescueRoad');
Route::get('/rescue_team/medical/', 'AdminController@rescueMedical');

Route::any('/delete_first/{id}','AdminController@deleteRescueFirst')->name('deleteRescueFirst');
Route::any('/delete_fire/{id}','AdminController@deleteRescueFire')->name('deleteRescueFire');
Route::any('/delete_medical/{id}','AdminController@deleteRescueMedical')->name('deleteRescueMedical');
Route::any('/delete_road/{id}','AdminController@deleteRescueRoad')->name('deleteRescueRoad');


// Quote
Route::any('/delete_qoutes/{id}','AdminController@deleteQuote')->name('deleteQuote');
Route::get('/air_quotes/', 'AdminController@airQuotes');

});


// Front/Client Routes

Route::get('/about', 'FrontController@about');
Route::get('/gallery', 'FrontController@gallery');
Route::get('/contact', 'FrontController@contact');
Route::get('/events', 'FrontController@events');
Route::get('/media_publication', 'FrontController@media_publication');
 
Route::get('/products/dharura', 'ProductsController@dharura');
Route::get('/products/dharura/silver', 'ProductsController@dharuraSilver');
Route::get('/products/dharura/gold', 'ProductsController@dharuraGold');
Route::get('/products/dharura/platinum', 'ProductsController@dharuraPlatinum');
Route::get('/products/dharura/bronze', 'ProductsController@dharuraBronze');



Route::get('/products/msafiri', 'ProductsController@msafiri');
Route::get('/products/msafiri/psv', 'ProductsController@msafiriPsv');
Route::get('/products/msafiri/motorist', 'ProductsController@msafiriMotorist');


Route::get('/products/fanaka', 'ProductsController@fanaka');


Route::get('/products/kikwetu', 'ProductsController@kikwetu');


 
Route::get('/services/emergency_medical', 'ServicesController@emergency_medical');
Route::get('/services/emergency_road', 'ServicesController@emergency_road');
Route::get('/services/emergency_fire', 'ServicesController@emergency_fire');


Route::get('/packages/emergency_medical', 'PackagesController@emergency_medical');
Route::get('/packages/emergency_road', 'PackagesController@emergency_road');
Route::get('/packages/emergency_fire', 'PackagesController@emergency_fire');



Route::get('/packages/emergency_fire/institution', 'PackagesController@fire_institution');
Route::get('/packages/emergency_fire/corporate', 'PackagesController@fire_corporate');
Route::get('/packages/emergency_fire/hotel', 'PackagesController@fire_hotel');
Route::get('/packages/emergency_fire/private_residence', 'PackagesController@fire_private_residence');
Route::get('/packages/emergency_fire/org_estates', 'PackagesController@fire_org_estates');



Route::get('/packages/emergency_medical/institution', 'PackagesController@medical_institution');
Route::get('/packages/emergency_medical/corporate', 'PackagesController@medical_corporate');
Route::get('/packages/emergency_medical/individual', 'PackagesController@medical_individual');
Route::get('/packages/emergency_medical/family', 'PackagesController@medical_family');
Route::get('/packages/emergency_medical/private_residence', 'PackagesController@medical_private_residence');
Route::get('/packages/emergency_medical/org_estates', 'PackagesController@medical_org_estates');


Route::get('/rescue_teams/emergency_medical_team', 'FrontController@emergency_medical_team');
Route::get('/rescue_teams/emergency_road_team', 'FrontController@emergency_road_team');
Route::get('/rescue_teams/emergency_fire_team', 'FrontController@emergency_fire_team');
Route::get('/rescue_teams/emergency_firstresponder_team', 'FrontController@emergency_firstresponder_team');



 Route::get('createtables',function(){

            Artisan::call('migrate:fresh');

 });