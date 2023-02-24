<?php

<<<<<<< HEAD
use App\Http\Controllers\AnimalController;
use App\Models\Animal;
=======
use App\Http\Controllers\OwnerController;
>>>>>>> 90391fbb0338e78ce44df1183e72984a96d81f9e
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

<<<<<<< HEAD
Route::get('/animals', [AnimalController::class, 'index'])->name('animals.animal');
=======

Route::get('/owner',[OwnerController::class, 'index'])->name('owner.index');
>>>>>>> 90391fbb0338e78ce44df1183e72984a96d81f9e
