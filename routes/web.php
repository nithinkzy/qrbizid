<?php

use App\Http\Controllers\BusinessCardController;
use App\Models\Listing;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ListingController;
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
Route::get('/bizcard/create', [BusinessCardController::class, 'create'])->middleware('auth');

// Store Listing Data
Route::post('/bizcard', [BusinessCardController::class, 'store'])->middleware('auth');

//Delete listing

// Manage Listings
Route::get('/bizcard/manage', [BusinessCardController::class, 'manage'])->middleware('auth');
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

// Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

// Show Create Form
Route::get('/listings/create', [ListingController::class, 'create'])->middleware('auth');

// Store Listing Data
Route::post('/listings', [ListingController::class, 'store'])->middleware('auth');

//Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit'])->middleware('auth');

//Update listing
Route::put('/listings/{listing}', [ListingController::class, 'update'])->middleware('auth');

//Delete listing
Route::delete('/bizcard/{bizcard}', [BusinessCardController::class, 'destroy'])->middleware('auth');
Route::delete('/listings/{listing}', [ListingController::class, 'destroy'])->middleware('auth');

// Manage Listings
Route::get('/listings/manage', [ListingController::class, 'manage'])->middleware('auth');

// Single Listing
Route::get('/listings/{listing}', [ListingController::class, 'show']);

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
