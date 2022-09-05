<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\Listing;

//All Listings
Route::get('/', [\App\Http\Controllers\ListingController::class, 'index']);

//Show Create Form
Route::get('/listings/create', [\App\Http\Controllers\ListingController::class, 'create']);

//Store Listing
Route::post('/listings', [\App\Http\Controllers\ListingController::class, 'store']);

//Single Listing Data
Route::get('/listings/{listing}',
    [\App\Http\Controllers\ListingController::class, 'show']);
