<?php

Route::group(['namespace'=>'saiful\contact\Http\Controllers'],function (){

    Route::get('contact','ContactController@index')->name('contact');

    Route::post('contact','ContactController@send')->name('contact');
});
