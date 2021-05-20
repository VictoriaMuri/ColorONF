<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PriceController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\GraphController;
use App\Http\Controllers\OtherServiceController;
use App\Http\Controllers\TypeServiceController;
use App\Http\Controllers\DesignController;
use App\Http\Controllers\ServiceController;

Route::get('/', [HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/price', [PriceController::class, 'index'])->name('price');

Route::group(['prefix' => 'comment'], function () {
  Route::get('/', [CommentController::class, 'index'])->name('comment');
  Route::post('/store', [CommentController::class, 'store'])->name('commentStore');
});

Route::group(['middleware' => ['auth'], 'prefix' => 'order'], function () {
  Route::get('/', [OrderController::class, 'index'])->name('order');
  Route::get('/{id}', [OrderController::class, 'getOrdersForUser'])->name('getOrdersForUser');
  Route::get('/delete/{id}', [OrderController::class, 'delete'])->name('orderDelete');
  Route::post('/store', [OrderController::class, 'store'])->name('orderStore');
});

Route::group(['middleware' => ['auth', 'role:admin'], 'prefix' => 'admin'], function () {
  Route::get('/', [AdminController::class, 'main'])->name('admin');
  Route::get('/service', [AdminController::class, 'service'])->name('service');
  Route::post('/service/store', [ServiceController::class, 'store'])->name('serviceStore');
  Route::resource('graph', GraphController::class);

  Route::resource('typeService', TypeServiceController::class);
  Route::resource('design', DesignController::class);
  Route::resource('otherService', OtherServiceController::class);

  Route::get('deleteTypeService/{id}', [TypeServiceController::class, 'delete'])->name('deleteTypeService');
  Route::get('deleteService/{id}', [ServiceController::class, 'delete'])->name('deleteService');
  Route::get('deleteOtherService/{id}', [OtherServiceController::class, 'delete'])->name('deleteOtherService');
  Route::get('deleteDesign/{id}', [DesignController::class, 'delete'])->name('deleteDesign');
});

// Route::resource('service', ServiceController::class);
// Route::get('deleteGraph/{id}', [GraphController::class, 'delete']);
// Route::resource('graph', GraphController::class);
// Route::resource('order', OrderController::class);
// Route::get('deleteOrder/{id}', [OrderController::class, 'delete']);
// Route::resource('comment', CommentController::class);
