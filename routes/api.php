<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CentralTelefonesController;
use App\Http\Controllers\NoticiasController;
use App\Http\Controllers\CanalDaMulherController;
use App\Http\Controllers\EducacaoController;
use App\Http\Controllers\EscolasController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::apiResource('central-telefones', CentralTelefonesController::class);
Route::apiResource('noticias', NoticiasController::class);
Route::apiResource('canal-da-mulher', CanalDaMulherController::class);
Route::apiResource('educacao', EducacaoController::class);
Route::apiResource('escolas', EscolasController::class);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
