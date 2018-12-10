<?php

Route::get('/', 'PageController@inicio')->name('inicio');
Route::get('/contacto','PageController@contacto')->name('contacto');
Route::get('/blog', 'PageController@blog')->name('blog');