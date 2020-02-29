<?php


Route::group(['as' => 'admin.','prefix' => 'admin','namespace' => 'Admin','middleware' => ['auth','is_admin']], function (){
    Route::get('/',function (){
        return view('admin.pages.home');
    })->name('home');
});
