<?php

use App\Http\Controllers\OffreEmploiController;
use App\Http\Controllers\CandidatureController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\OffreEmploiController as AdminOffreEmploiController;
use App\Http\Controllers\Admin\CandidatureOffreController;

Route::redirect('/', '/emplois');
 
Route::get('/emplois', [OffreEmploiController::class, 'index'])
    ->name('emplois.index');
 
Route::get('/emplois/{offreEmploi}', [OffreEmploiController::class, 'show'])
    ->name('emplois.show');

Route::get('/emplois/{offreEmploi}/postuler', [CandidatureController::class, 'create'])
    ->name('candidatures.create');
 
Route::post('/emplois/{offreEmploi}/postuler', [CandidatureController::class, 'store'])
    ->name('candidatures.store');
 

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/offres/{offreEmploi}/candidatures', [CandidatureOffreController::class, 'index'])
        ->name('offres.candidatures.index');

    Route::get('/candidatures/{candidature}/telecharger-cv', [CandidatureOffreController::class, 'download'])
        ->name('offres.candidatures.download');
 
    Route::resource('offres', AdminOffreEmploiController::class)
        ->parameters(['offres' => 'offreEmploi'])
        ->except(['show']);
});