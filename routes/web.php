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
Route::get('/listEtudiant',[etudiantcontroller::class,'listEtudiant'])->name('students');
Route::get('/ajouterEtudiant',[etudiantcontroller::class,'create'])->name('add student');
Route::post('/ajouterEtudiant',[etudiantcontroller::class,'ajouterEtudiant'])->name('add');
Route::get('/modifer/{etudiant}',[etudiantcontroller::class,'update_view'])->name('update');
Route::put('/modifier/{etudiant}',[etudiantcontroller::class,'modifier'])->name('updateE');
Route::delete('/delete/{etudiant}',[etudiantcontroller::class,'supprimer'])->name('delete');
Route::get('/ajouterEnsg',[enseignantController::class,'ouvrirAjoutEnsg'])->name('addEnsg');
Route::post('/ajoutEnsg',[enseignantsController::class,'ajouter'])->name('ajouterEnsg');
Route::get('/ajoutSoutenance',[soutenanceController::class,'ouvrirformSoutenance'])->name('addSoutanance');
Route::post('/ajouterSoutenance',[soutenanceController::class,'addS'])->name('addS');
Route::get('/listeSoutenance',[soutenanceController::class,'getSoutenance'])->name('listeS');