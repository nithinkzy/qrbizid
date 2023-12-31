<?php

use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\BusinessCardController;
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

// All Listings
Route::get('/', [BusinessCardController::class, 'index']);

// Show Create Business Card Form
Route::get('/create', [BusinessCardController::class, 'create'])->middleware('auth');

// Store Listing Data
Route::post('/bizcard', [BusinessCardController::class, 'store'])->middleware('auth');

//Show Edit Form
Route::get('/edit/{business_Card}', [BusinessCardController::class, 'edit'])->middleware('auth');

//Show Download Form
Route::get('/download/{business_Card}', [BusinessCardController::class, 'download'])->middleware('auth');
Route::get('/download/card/{business_Card}', [BusinessCardController::class, 'downloadCard'])->middleware('auth');

//Update listing
Route::put('/bizcard/{business_Card}', [BusinessCardController::class, 'update'])->middleware('auth');

//Delete listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// Manage Listings
Route::get('/my-account', [BusinessCardController::class, 'manage'])->middleware('auth');

// Single Listing
Route::get('/bizcard/{unique_id}', [BusinessCardController::class, 'show']);

// Show register create form
Route::get('/register', [UserController::class, 'create'])->middleware('guest');

// Create New User
Route::post('/users', [UserController::class, 'store']);

// Log user out
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');

// Show login form
Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');

// Login user
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

Route::get('/download-vcard/{business_Card}', [BusinessCardController::class, 'downloadVCard'])->name('download.vcard');
