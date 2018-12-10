<?php

Route::get('/', 'PageController@inicio')->name('inicio');
Route::get('/contacto','PageController@contacto')->name('contacto');
Route::get('/blog', 'PageController@blog')->name('blog');
Route::get('/portafolio', 'PageController@portafolio')->name('portafolio');
Route::get('/servicios', 'PageController@services')->name('services');
Route::get('/acercadenosotros', 'PageController@about')->name('about');