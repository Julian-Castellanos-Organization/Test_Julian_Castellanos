<?php
Route::get('/', function () {
    return view('welcome');
});

Route::get('/TestDB/{nombre?}', function ($nombre = null) {
    $users = ['Pepito1','Pepito2','Pepito3'];
   return view('TestDB',compact('users', 'nombre'));
})->name('TestDB');

Route::get('/blog', function () {
    return view('blog');
})->name('blog');

Route::get('/Contact', function () {
    return view('Contact');
})->name('Contact');



