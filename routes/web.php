<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProdController;
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

Route::get('/', [ProdController::class,'create']);
Route::post('/prodread',[ProdController::class , 'store' ] );
Route::get('/prodview',[ProdController::class , 'index' ] );
Route::post('/prodesearch',[ProdController::class , 'search' ] );

