<?php

use Illuminate\Support\Facades\Route;
use RepoEldo\ELD\ReportController;

Route::get('test',function(){
    echo 'Hello';
});

Route::get('viewReport/{report}',[ReportController::class,'viewReport']);