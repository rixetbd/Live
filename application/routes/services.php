<?php

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\Service\CategoryController;
use App\Http\Controllers\Admin\ServiceController;

Route::middleware('auth')->group(function(){
    Route::controller(CategoryController::class)->group(function(){
        Route::get('/admin/service/category', 'index')->name('admin.service.category');
        Route::get('/admin/servicename/destroy/{id}', 'destroy')->name('admin.serviceName.destroy');

    });

});

