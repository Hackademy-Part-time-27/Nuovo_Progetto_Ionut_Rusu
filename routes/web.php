<?php

use Illuminate\Support\Facades\Route;

Route::get('/chi-sono', function () {
    return view('chi-sono');
});
Route::get('/contatti', function(){
    return view('contacts');
});


