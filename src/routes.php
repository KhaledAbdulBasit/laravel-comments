<?php

Route::group(['prefix' => 'api'], function () {
    /**
     * Comments
     */
    Route::group(['prefix' => 'comments', 'as' => 'comments.',], function () {
        Route::get('/', '\tizis\laraComments\Http\Controllers\CommentsController@get')->name('get');
        Route::post('/', '\tizis\laraComments\Http\Controllers\CommentsController@store')->name('store');
        Route::delete('/{comment}', '\tizis\laraComments\Http\Controllers\CommentsController@destroy')->name('delete');
        Route::put('/{comment}', '\tizis\laraComments\Http\Controllers\CommentsController@update')->name('update');
        Route::get('/{comment}', '\tizis\laraComments\Http\Controllers\CommentsController@show');
        Route::post('/{comment}', '\tizis\laraComments\Http\Controllers\CommentsController@reply')->name('reply');
        Route::post('/{comment}/vote', '\tizis\laraComments\Http\Controllers\VoteController@vote')->name('vote');
    });
});

