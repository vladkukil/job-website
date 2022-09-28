<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;
use App\Http\Controllers\ListingController;
use App\Http\Controllers\UserController;

//All Listings
Route::get('/', [ListingController::class, 'index']);

//Show Create Form
Route::get('/listings/create', [ListingController::class, 'create']);

//Store Listing
Route::post('/listings', [ListingController::class, 'store']);

//Show Edit Form
Route::get('/listings/{listing}/edit', [ListingController::class, 'edit']);

//Update Listing
Route::put('/listings/{listing}', [ListingController::class, 'update']);

//Delete Listing
Route::delete('/listings/{listing}', [ListingController::class, 'destroy']);

//Single Listing Data
Route::get('/listings/{listing}', [ListingController::class, 'show']);

//Show Register Form
Route::get('/register', [UserController::class, 'create']);

//Store New User
Route::post('/users', [UserController::class, 'store']);

//Show Login Form
Route::get('/login', [UserController::class, 'login']);

//LogOut
Route::post('/logout', [UserController::class, 'logout']);

//Log in User
Route::post('/users/authenticate', [UserController::class, 'authenticate']);
