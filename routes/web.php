<?php

use Illuminate\Support\Facades\Route;
use app\http\Controller\TestController;

Route::get('/', function () {
    
    return view('landing');
});
