<?php

use App\Http\Controllers\Admin\DrinkController;
use App\Http\Controllers\DrinkController as ControllersDrinkController;
use App\Http\Controllers\DrinkRotaController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PizzaController as ControllersPizzaController;
use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;
use PHPUnit\Framework\MockObject\Rule\InvokedAtIndex;
use SebastianBergmann\CodeCoverage\CrapIndex;

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
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');



Route::get('/',[SiteController::class,'index']);

Route::get('/pizza',[SiteController::class,'pizza']);

Route::get('/drink',[SiteController::class,'drink']);



Route::resource('Pizza',ControllersPizzaController::class)->middleware(['auth']);

Route::resource('Drink',ControllersDrinkController::class);




require __DIR__.'/auth.php';
