<?php

use Illuminate\Http\Request;

Route::group(['namespace' => 'Akshay\Contact\Http\Controllers', 'middleware' => 'web'], function() {

    Route::get('contact', 'ContactController@index')->name('contact');

    Route::post('contact','ContactController@send');

});