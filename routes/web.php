<?php
Route::get('/', 'PageController@index');
Route::get('/TestDB/{nombre?}','PageController@TestDB')->name('TestDB');
Route::get('/blog','PageController@viewlog')->name('blog');
Route::get('/Contact','PageController@Contactme')->name('Contact');
Route::get('/register', 'PageController@RegisterUser')->name('register');