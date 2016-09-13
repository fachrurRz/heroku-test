<?php

use App\Jobs\LogSomething;
use Illuminate\Support\Facades\App;

Route::get('/', function () {
    dispatch(new LogSomething());
});

Auth::routes();

Route::get('/home', 'HomeController@index');
