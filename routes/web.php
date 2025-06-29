<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\TryController;
use App\Http\Controllers\Calculator;




// Default route (optional)
Route::get('/', function () {
    return view('home'); // or 'welcome', as you prefer
});

// Resource route for contacts (creates all 7 RESTful routes)
Route::resource('contacts', ContactController::class);

// Optional: Route for verifying user (custom)
Route::get('/user', function () {
    return view("user_verify");
});

// Optional: POST route for custom user form (if not part of ContactController)
Route::post('/user', [ContactController::class, 'store'])->name('user.store');

Route::get('/about-us/{name}',[AboutController::class,'about']);

Route::get('/login',[AboutController::class,'login']);
Route::get('/try',[TryController::class,'try']);

Route::get('/calculator/view',[Calculator::class,'calculator']);
Route::post('/calculator/calculate',[Calculator::class,'calculate'])->name('calculator');



 ?>

