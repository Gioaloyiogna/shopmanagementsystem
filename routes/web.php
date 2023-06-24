<?php

use App\Http\Controllers\RouteController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');
// product route

Route::get('/products', [RouteController::class, 'product'])->name('products');
//online sales 
Route::get('/onlinesales', [RouteController::class, 'onlineSales'])->name('onlinesales');
//physical sales 
Route::get('/physicalsales', [RouteController::class, 'physicalSales'])->name('physicalsales');
Route::get('/userprofile', [RouteController::class, 'userProfile'])->name('userprofile');
require __DIR__ . '/auth.php';