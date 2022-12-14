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

use App\Http\Controllers\ComicController;

Route::get("/comics/lista", "ComicController@index")->name("comics.index");
Route::get("/comics/crea", "ComicController@create")->name("comics.create");
Route::get("/comics/mostra/{comic}", "ComicController@show")->name("comics.show");
Route::post("/comics/store", "ComicController@store")->name("comics.store");
