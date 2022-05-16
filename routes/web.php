<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\JWTController;
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
Route::get("/", function(){
    return redirect()->route('home');
});

Route::get('/home', function () {
    $greeting = 'Welcome to Home Page !';
    return view('greeting')->with('greeting', $greeting);
})->name('home');

Route::get("/about", function(){
    $sentence = "This is a practice to learn Laravel for Web PK2MABA Project";
    return view("about")->with('sentence', $sentence);
});

Route::post('/addBook', [BookController::class, 'addBook']);

Route::prefix('/customer')->group(function () {
    Route::get('/login', [CustomerController::class, 'vLogin']);
    Route::post('/login', [CustomerController::class, 'login']);
    Route::get('/signup', [CustomerController::class, 'vAddCustomer']);
    Route::post('/signup', [CustomerController::class, 'addCustomer']);
    Route::get("/getcustomers", [CustomerController::class, 'getAllCustomer'])->middleware('isCustomer');
    Route::get("/getcustomer/{id}", [CustomerController::class, 'getCustomerById'])->middleware('isCustomer');
    Route::delete("/delete/{id}",[CustomerController::class, 'deleteCustomer'])->middleware('isCustomer');
    Route::patch("/update/{id}",[CustomerController::class, 'updateCustomer'])->middleware('isCustomer');
});
