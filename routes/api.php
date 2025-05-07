<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PlatsController;
use App\Http\Controllers\EmployeController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\CommandeController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


Route::get('/employe', [EmployeController::class, "liste"]);
Route::post('/employe/authentification', [EmployeController::class, "authentifierEmployer"]);

Route::get('/plats', [PlatsController::class, "liste"]);
Route::put('/plats/{id}', [PlatsController::class, "update"]);

Route::post('/ajoutCommande', [CommandeController::class, "ajouter"]);
Route::post('/ajoutProduits', [CommandeController::class, 'ajouterProduits']);

Route::get('/messages', [MessageController::class, "liste"]);
Route::post('/messages', [MessageController::class, "ajouter"]);
