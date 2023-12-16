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
Route::get('/', function () {
    return view('welcome');
});
Route::get('/listEtudiant',[etudiantcontroller::class,'listEtudiant'])->name('students');

Route::get('/ajouterEtudiant',[etudiantcontroller::class,'create'])->name('add student');
Route::post('/ajouterEtudiant',[etudiantcontroller::class,'ajouterEtudiant'])->name('add');
Route::get('/modifer/{etudiant}',[etudiantcontroller::class,'update_view'])->name('update');
Route::put('/modifier/{etudiant}',[etudiant::class,'modifier'])->name('updateE');