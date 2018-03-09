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

Route::get('/', function () {
    return view('kties');
});

Route::view('/kties','kties')->name('kties');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::view('/about_us', 'about_us')->name('about_us');

Route::view('/uploader','uploader')->name('uploader')->middleware('level');

Route::post('upload' ,'UploadController@upload')->name('upload');

Route::get('/admin', function(){
	return view('auth.login');
});

Route::get('adminhome', 'AdminController@home')->name('adminhome')->middleware('level');

Route::get('/projects', 'ProjectController@projects')->name('projects');

Route::view('/about_us', 'about_us')->name('about_us');

Route::view('/services', 'services')->name('services');

Route::get('/project_view/{id}', 'ProjectController@project_view')->name('project_view');

Route::get('/steptwo', 'RegController@step_two_view')->name('steptwo');

Route::post('/answertwo', 'RegController@answertwo')->name('answertwo');

Route::view('/sell','sell')->name('sell');

Route::get('/stepthree', 'RegController@step_three_view')->name('stepthree');

Route::post('/answerthree', 'RegController@answerthree')->name('answerthree');

Route::view('/account', 'account')->name('account')->middleware('auth');

Route::view('/edit', 'edit')->name('edit');

Route::post('/update', 'RegController@update')->name('update');

Route::view('imagesupload', 'imagesupload')->name('imagesupload');

Route::post('imagesupload', 'CropController@imagesUploadPost')->name('imagesuploaded');


Route::get('/uploader','UploadController@theview')->name('uploader');

Route::view('/docuploader','docuploader')->name('docuploader');

Route::view('/salesuploader','salesuploader')->name('salesuploader');

Route::post('docupload' ,'UploadController@docupload')->name('docupload');

Route::post('salesupload', 'UploadController@salesupload')->name('salesupload');

Route::view('/contact', 'contact')->name('contact');

Route::get('/shop','ShopController@display')->name('shop');

Route::get('/item_view/{id}', 'ShopController@item_view')->name('item_view');

Route::get('/order/{id}', 'ShopController@order')->name('order');

Route::post('/ordered', 'ShopController@ordered')->name('ordered');

Route::get('/hire_us', 'SearchController@index')->name('hire_us');

Route::view('/team','team')->name('team');

Route::view('/location', 'location')->name('location');

Route::post('/located', 'RegController@located')->name('located');

Route::get('/works','UploadController@works')->name('works');

Route::view('/payment','payment')->name('payment');

Route::post('/paid', 'RegController@paid')->name('paid');




Route::get('/search2','SearchController@search');

Route::view('/noresults','SearchController@noresults' )->name('noresults');

Route::get('/book/{id}', 'BookingController@personview')->name('personview');

Route::get('/booker/{id}' , 'BookingController@booker')->name('booker');

Route::post('/booked', 'BookingController@booked')->name('booked');

Route::get('/hire_equipment', 'ShopController@hire')->name('hire_equipment');

Route::get('/building_materials', 'ShopController@building')->name('building_materials');

Route::get('/steel_bars','ShopController@steel')->name('steel_bars');

Route::get('/plumbing_materials', 'ShopController@plumbing')->name('plumbing_materials');

Route::get('/electrical_materials', 'ShopController@electrical')->name('electrical_materials');

Route::get('/hardware_equipment','ShopController@hardware')->name('hardware_equipment');