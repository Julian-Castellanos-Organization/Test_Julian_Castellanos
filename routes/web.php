<?php
Route::get('/', 'PageController@index');
Route::post('/', 'PageController@CrearEstudiante')->name('Save.Student');
Route::get('/TestDB/{nombre?}','PageController@TestDB')->name('TestDB');
Route::get('/RegistrarEstudiante','PageController@RegistrarEstudiante')->name('RegistrarEstudiante');
Route::get('/blog','PageController@viewlog')->name('blog');
Route::get('/Contact','PageController@Contactme')->name('Contact');
Route::get('/register', 'PageController@RegisterUser')->name('register');