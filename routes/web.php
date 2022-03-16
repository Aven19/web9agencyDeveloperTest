<?php

use App\Http\Controllers\ClothesController;
use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/',[ClothesController::class, 'index']);

Route::post('/get-pack-size', [
    'as' => 'getpacksize',
    'uses' => 'App\Http\Controllers\ClothesController@store'
]);

// Route::resource('photos', PhotoController::class);
Route::group(['prefix' => '', 'middleware' => 'auth', 'as' => 'dashboard'], function () {
    Route::resource('/dashboard', DashboardController::class);
});

Route::get(
    'dashboard',
    [DashboardController::class, 'index']
)->name('dashboard');
// Route::get('/dashboard', DashboardController::class)->middleware(['auth'])->name('dashboard');

require __DIR__ . '/auth.php';
