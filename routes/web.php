<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\etudiantcontroller;
use App\Http\Controllers\enseignantController;
use App\Http\Controllers\soutenanceController;
Route::get('/', function () {
    return view('welcome');
});
Route::prefix('admin')->group(function(){
    Route::get('/',function(){
        return view ('adminHomepage');
    })->name('adminhome');
    Route::prefix('Etudiant')->group(function(){
        Route::get('/list',[etudiantcontroller::class,'listEtudiant'])->name('students');
        Route::get('/ajouter',[etudiantcontroller::class,'create'])->name('add student');
        Route::post('/ajouter',[etudiantcontroller::class,'ajouterEtudiant'])->name('add');
        Route::get('/modifer/{etudiant}',[etudiantcontroller::class,'update_view'])->name('update');
        Route::put('/modifier/{etudiant}',[etudiantcontroller::class,'modifier'])->name('updateE');
        Route::delete('/supprimer/{etudiant}',[etudiantcontroller::class,'supprimer'])->name('delete');
    })->name('student');
   Route::prefix('Enseignant')->group(function(){
        Route::get('/ajouter',[enseignantController::class,'ouvrirAjoutEnsg'])->name('addEnsg');
        Route::post('/ajouer',[enseignantController::class,'ajouter'])->name('ajouterEnsg');
   })->name('Enseignant');
  Route::prefix('Soutenance')->group(function(){
       Route::get('/ajout',[soutenanceController::class,'ouvrirformSoutenance'])->name('addSoutanance');
       Route::post('/ajout',[soutenanceController::class,'addS'])->name('addS');
       Route::get('/liste',[soutenanceController::class,'getSoutenance'])->name('listeS');
       Route::delete('/supprimer/{soutenance}',[soutenanceController::class,'supprimer'])->name('deleteS');
       Route::put('/modifier/{soutenance}',[soutenanceController::class,'modifier'])->name('updateS');
       Route::get('/modifier/{soutenance}',[soutenanceController::class,'updateview'])->name('updateSoutenance');
  })->name('soutenance');
   
});

