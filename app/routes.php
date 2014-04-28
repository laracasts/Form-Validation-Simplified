<?php

Route::get('login', 'SessionsController@create');
Route::resource('sessions', 'SessionsController');