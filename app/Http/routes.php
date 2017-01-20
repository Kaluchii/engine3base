<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('front.index.index');
});
Route::get('/flats', function () {
    return view('front.flats.flat');
});





Route::group(['prefix' => 'adm'], function(){

    Route::get('/',                 'AdminController@getIndex');
    Route::get('/all',              'AdminController@getAll');
    Route::get('/slider',           'AdminController@getSlider');
    Route::get('/interest',         'AdminController@getInterest');

    Route::get('/flats_main',       'AdminController@getFlats');
    Route::get('/flats_main/{id}',  'AdminController@getFlatsItem');

    Route::get('/map',              'AdminController@getMap');
    Route::get('/map/{id}',         'AdminController@getMarkerCategory');
    Route::get('/map/{rub}/{id}',   'AdminController@getMarkerSubCategory');

    Route::get('/gallery',          'AdminController@getGallery');
    Route::get('/gallery/{id}',     'AdminController@getGalleryItem');



    Route::get('/taxonomy', 'TestController@showTaxonomy');

    // Служебные роуты
    Route::post('/save', 'SaveController@save');

    Route::post('/newItemRow', 'GroupItemController@newRow');
    Route::post('/newItemBox', 'GroupItemController@newBox');

    Route::post('/removeItem', 'GroupItemController@removeItem');
});
