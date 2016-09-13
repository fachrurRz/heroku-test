<?php

Route::get('/', function () {
    $users = cache()->remember('users', 10, function() {
        return ['alex', 'billy'];
    });

    dd($users);
});

Auth::routes();

Route::get('/home', 'HomeController@index');
