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
 * Account routes
 */
Route::get(
    'account', [
        'as'   => 'account',
        'uses' => 'AccountController@index'
    ]
);

/**
 * Holidays routes
 */
Route::resource('holidays', 'HolidaysController');

/**
 * User Authentication
 */

// Login routes
Route::get('login',                   ['as' => 'auth.login', 'uses' => 'Auth\AuthController@showLoginForm']);
Route::post('login',                  ['as' => 'auth.login', 'uses' => 'Auth\AuthController@login']);
Route::get('logout',                  ['as' => 'auth.logout', 'uses' => 'Auth\AuthController@logout']);

// Registration Routes
Route::get('register',                ['as' => 'auth.register', 'uses' => 'Auth\AuthController@showRegistrationForm']);
Route::post('register',               ['as' => 'auth.register', 'uses' => 'Auth\AuthController@register']);

// Password Reset Routes
Route::get('password/reset/{token?}', ['as' => 'auth.password.reset', 'uses' => 'Auth\PasswordController@showResetForm']);
Route::post('password/email',         ['as' => 'auth.password.email',  'uses' => 'Auth\PasswordController@sendResetLinkEmail']);

