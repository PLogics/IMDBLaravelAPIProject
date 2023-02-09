<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\IMDBController;

//route for index page with random movies
Route::get('/', [IMDBController::class, 'index']);

//route to show searched movie
Route::post('/search_movie', [IMDBController::class, 'search']);

//detail view of movie
Route::get('detailView', [IMDBController::class, 'detail_View_Display']);
Route::get('details{id}', [IMDBController::class, 'details']);
