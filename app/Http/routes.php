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

Route::get('/',                              'FrontController@getIndex');
Route::get('/flats/{flat?}/{layout?}',       'FrontController@getLayout');
Route::get('/advantages',                    'FrontController@getAdvantages');



Route::post('/feedback/mail', 'MailController@send');

Route::get('/courseupdate', function(){
    $exitCode = \Illuminate\Support\Facades\Artisan::call('course:update');
});

Route::get('/columnadd', function(){
    \Illuminate\Support\Facades\Schema::table('groups', function(\Illuminate\Database\Schema\Blueprint $table)
    {
        $table->boolean('predefined');
    });
});

Route::auth();
Route::group(['middleware' => 'auth', 'prefix' => 'adm'], function(){

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


    Route::get('/main_seo',         'AdminController@getMainSeo');



    Route::get('/flat_page',                'AdminController@getFlatPage');
    Route::get('/flat_page/{id}',           'AdminController@getFlatItem');
    Route::get('/flat_page/{rub}/{id}',     'AdminController@getLayoutItem');


    Route::get('/advantages',                'AdminController@getAdvantages');
    Route::get('/advantages/{id}',           'AdminController@getAdvantagesItem');

    Route::get('/course',                   'AdminController@getCourse');


    Route::get('/taxonomy', 'TestController@showTaxonomy');

    // Служебные роуты
    Route::post('/save', 'SaveController@save');

    Route::post('/newItemRow', 'GroupItemController@newRow');
    Route::post('/newItemBox', 'GroupItemController@newBox');

    Route::post('/removeItem', 'GroupItemController@removeItem');
});
