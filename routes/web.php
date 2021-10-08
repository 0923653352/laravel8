<?php

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

require __DIR__ . '/auth.php';

Route::middleware(['auth', 'role:admin,teacher'])->group(function () {
    Route::get('/teacher', function () {
        return view('teacher');
    });
});

Route::get("/student", function () {
    return view("student");
});


Route::get('/table', function () {
    return view('table');
});


// Route::resource('profile', 'ProfileController');
// Route::resource('user', 'UserController');
// Route::resource('vehicle', 'VehicleController');

// use App\Http\Controllers\ProfileController;
// use App\Http\Controllers\UserController;
// use App\Http\Controllers\VehicleController;

// Route::resource('profile', ProfileController::class);
// Route::resource('user', UserController::class);
// Route::resource('vehicle', VehicleController::class);

use App\Http\Controllers\OrderController; //เขียนเพิ่ม
use App\Http\Controllers\PaymentController; //เขียนเพิ่ม
use App\Http\Controllers\OrderProductController; //เขียนเพิ่ม
use App\Http\Controllers\ProductController; //เขียนเพิ่ม
Route::middleware(['auth'])->group(function () {
    Route::resource('order', OrderController::class);
    Route::resource('payment', PaymentController::class);
    Route::resource('order-product', OrderProductController::class);
});

// Route::get('/example/pdf', [ExampleController::class, 'pdf_index']);
Route::get('/product/pdf', [ProductController::class, 'pdf_index']);
Route::resource('product', ProductController::class);
