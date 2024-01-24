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
use App\Http\Controllers\userController;
Route::get('/', function () {
    return view('welcome');
})->name('index');
Route::post('login',[userController::class,'authentifier'])->name('auth');

Route::prefix('adminDashboard')->middleware('auth')->group(function(){
    Route::get('/',function(){
        return view ('adminHomepage');
    })->name('adminhome');
    Route::get('profil',function(){
        return view ('components/adminprofil');
    })->name('profile');
    Route::get('modifer', function () {return view('modifierprofil');})->name('modifierprofil');
    Route::prefix('admins')->controller(userController::class)->group(function(){
        Route::get('/','getUsers')->name('listAdmins');
        Route::put('modifier','modifier')->name('modifierUser');
        Route::get('modifier/{admin}','interfacemodifierAdmin')->name('modifierAdmin');
        Route::put('/{admin}','modifierAdmin')->name('modifierAdminInfos');
        Route::get('ajouterAdmin','openAddview')->name('addAdmin');
        Route::post('ajouterAdmin','addAdmin')->name('addAdmin');
        Route::delete('/{admin}','delete')->name('deleteAdmin');
    })->name("admins");

    Route::delete('logout',[userController::class,'logout'])->name('logout');
    Route::prefix('Etudiant')->controller(etudiantcontroller::class)->group(function(){
        Route::get('/','listEtudiant')->name('students');
        Route::get('/ajouter','create')->name('add student');
        Route::post('/ajouter','ajouterEtudiant')->name('add');
        Route::get('/modifer/{etudiant}','update_view')->name('update');
        Route::put('/modifier/{etudiant}','modifier')->name('updateE');
        Route::delete('/supprimer/{etudiant}','supprimer')->name('delete');
    })->name('student');
   Route::prefix('Enseignant')->controller(enseignantController::class)->group(function(){
        Route::get('/','afficher')->name('teachers');
        Route::get('/edit/{enseignant}','openUpdate')->name('updateEnsg');
        Route::put('/edit/{enseignant}','editEnsg')->name('updateEnsgenaint');
        Route::delete('/delete/{enseignant}','deleteEnsg')->name('deleteEnsg');

        Route::get('/ajouter','ouvrirAjoutEnsg')->name('addEnsg');
        Route::post('/ajouer','ajouter')->name('ajouterEnsg');
   })->name('Enseignant');
  Route::prefix('Soutenance')->controller(soutenanceController::class)->group(function(){
       Route::get('/ajout','ouvrirformSoutenance')->name('addSoutanance');
       Route::post('/ajout','addS')->name('addS');
       Route::get('/','getSoutenance')->name('listeS');
       Route::delete('/supprimer/{soutenance}','supprimer')->name('deleteS');
       Route::put('/modifier/{soutenance}','modifier')->name('updateS');
       Route::get('/modifier/{soutenance}','updateview')->name('updateSoutenance');
  })->name('soutenance');

});

