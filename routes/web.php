<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FoodController;

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

// Route::get('/jfc', function () {
//     $arrFastFood = ['Fried Chickin', 'Root Biir'];
//     $photoPath = ['https://i.ibb.co/hVFZQDB/image-removebg-preview-1.png', 'https://i.ibb.co/P9tpbdH/image-removebg-preview-3.png'];
//     $description = ['This fried chickin will smack your tounge like a bee.','This rootbiir kinda makes u feel dizzy and lazy.'];
//     $stock = ['25', '0'];
//     return view('fastfood/menu')
//     ->with('fastfood', $arrFastFood)
//     ->with('photo', $photoPath)
//     ->with('description', $description)
//     ->with('stocks', $stock);
// });

Route::get('/jfc', [FoodController::class, 'index']);