<?php

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

Route::get('pex', function () {
    return view('pex');
});

Route::get('/', 'LandingPageController@landing')->name('landing');
Route::get('projects', 'LandingPageController@projects')->name('projects');
Route::get('service', 'LandingPageController@service')->name('service');
Route::get('service/{marketSection}', 'LandingPageController@showService')->name('service.show');
Route::get('contact', 'LandingPageController@contact')->name('contact');
Route::get('about', 'LandingPageController@about')->name('about');
Route::post('email', 'LandingPageController@emailSubscribe')->name('email.create');
Route::post('request-quotation', 'LandingPageController@getQuotaion')->name('quotation.get');
Route::post('client-feedback', 'LandingPageController@getFeedback')->name('client.feedback');
Route::get('maintenance/{MaintenanceSection}', 'LandingPageController@showMaintenance')->name('maintenancesection.show');

Auth::routes();

Route::group(['prefix'=>'admin','middleware'=>'auth', 'namespace' => 'Admin'], function (){
    Route::get('/dashboard', 'HomeController@index')->name('dashboard');

    // market section routes
    Route::get('/market-section', 'marketsectionController@index')->name('marketsection.index');
    Route::get('/market-section/create', 'marketsectionController@create')->name('marketsection.create');
    Route::get('/market-section/{id}', 'marketsectionController@edit')->name('marketsection.edit');
    Route::post('/market-section/store', 'marketsectionController@store')->name('marketsection.store');
    Route::delete('/market-section/{id}', 'marketsectionController@destroy')->name('marketsection.destroy');
    Route::put('/market-section/{id}', 'marketsectionController@update')->name('marketsection.update');

    //maintenance section routes
    Route::get('/maintenance-section', 'MaintenanceSectionController@index')->name('maintenancesection.index');
    Route::get('/maintenance-section/create', 'MaintenanceSectionController@create')->name('maintenancesection.create');
    Route::get('/maintenance-section/edit/{slug}', 'MaintenanceSectionController@edit')->name('maintenancesection.edit');
    Route::post('/maintenance-section/store', 'MaintenanceSectionController@store')->name('maintenancesection.store');
    Route::delete('/maintenance-section/{slug}', 'MaintenanceSectionController@destroy')->name('maintenancesection.destroy');
    Route::put('/maintenance-section/{slug}', 'MaintenanceSectionController@update')->name('maintenancesection.update');
});