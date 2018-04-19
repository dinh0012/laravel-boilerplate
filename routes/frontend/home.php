<?php

/**
 * Frontend Controllers
 * All route names are prefixed with 'frontend.'.
 */
Route::get('/', 'HomeController@index')->name('index');
Route::get('/find-room', function () {
     return view('frontend.find-room');
})->name('find-room');
Route::get('/find-agency', function () {
    return view('frontend.find-agency');
})->name('find-agency');
Route::get('/room-detail', function () {
    return view('frontend.room-detail');
})->name('room-detail');
Route::get('/agency-detail', function () {
    return view('frontend.agency-detail');
})->name('agency-detail');

Route::get('contact', 'ContactController@index')->name('contact');
Route::post('contact/send', 'ContactController@send')->name('contact.send');

/*
 * These frontend controllers require the user to be logged in
 * All route names are prefixed with 'frontend.'
 * These routes can not be hit if the password is expired
 */
Route::group(['middleware' => ['auth', 'password_expires']], function () {
    Route::group(['namespace' => 'User', 'as' => 'user.'], function () {
        /*
         * User Dashboard Specific
         */
        Route::get('dashboard', 'DashboardController@index')->name('dashboard');

        /*
         * User Account Specific
         */
        Route::get('account', 'AccountController@index')->name('account');

        /*
         * User Profile Specific
         */
        Route::patch('profile/update', 'ProfileController@update')->name('profile.update');
    });
});
