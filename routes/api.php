<?php

use App\Http\Controllers\bancos\BancosController;
use App\Http\Controllers\contratos\ContratosController;
use App\Http\Controllers\convenios\ConvenioController;
use App\Http\Controllers\convenios\ConvenioServicoController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::get('/contratos',[ContratosController::class,'index']);
Route::get('/contratos/{id}',[ContratosController::class,'getById']);
Route::post('/contratos',[ContratosController::class,'create']);
Route::put('/contratos/{id}',[ContratosController::class,'edit']);
Route::delete('/contratos/{id}',[ContratosController::class,'delete']);

Route::get('/bancos',[BancosController::class,'index']);
Route::post('/bancos',[BancosController::class,'create']);
Route::put('/bancos/{id}',[BancosController::class,'edit']);
Route::delete('/bancos/{id}',[BancosController::class,'delete']);


Route::get('/convenios',[ConvenioController::class,'index']);
Route::post('/convenios',[ConvenioController::class,'create']);
Route::put('/convenios/{id}',[ConvenioController::class,'edit']);
Route::delete('/convenios/{id}',[ConvenioController::class,'delete']);

Route::get('/convenios/servicos',[ConvenioServicoController::class,'index']);
Route::post('/convenios/servicos',[ConvenioServicoController::class,'create']);
Route::put('/convenios/servicos/{id}',[ConvenioServicoController::class,'edit']);
Route::delete('/convenios/servicos/{id}',[ConvenioServicoController::class,'delete']);
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
