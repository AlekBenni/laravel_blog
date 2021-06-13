<?php

Route::group(['prefix' => 'admin', 'namespace' => 'Admin'], function(){
    Route::get('/', 'MainController@index')->name('admin.index');
});
