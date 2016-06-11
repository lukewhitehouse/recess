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


/**
 * Basic pages
 */
Route::get(
    '/', [
        'as'   => 'index',
        'uses' => 'PageController@index'
    ]
);

Route::get(
    'about', [
        'as'   => 'about',
        'uses' => 'PageController@about'
    ]
);

Route::get(
    'contact', [
        'as'   => 'contact',
        'uses' => 'PageController@contact'
    ]
);

/**
 * Logged in views
 */
Route::get(
    'account', [
        'as'   => 'account',
        'uses' => 'AccountController@index'
    ]
);

Route::resource('holidays', 'HolidaysController');



/**
 * User Authentication
 */
Route::auth();
