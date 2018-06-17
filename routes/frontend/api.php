<?php

Route::group(['namespace' => 'API', 'as' => 'api.'], function () {
    Route::group(['middleware' => 'guest'], function () {
        Route::prefix('get-component')->name('get-component.')->group(function () {
            Route::get('get-register-form/{typeRegister}', 'GetComponentsViewController@getRegisterFormView')
                ->name('register-form');
        });
    });
});