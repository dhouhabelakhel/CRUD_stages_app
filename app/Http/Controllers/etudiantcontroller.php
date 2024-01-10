<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\etudiant;
use App\Http\Requests\studentRequest;
class etudiantcontroller extends Controller
{
    public function getEtudiant(){
        return response()->json(etudiant::all(),200);
    }
    public function listEtudiant(){
        $etudiant=etudiant::all();
        return view('/Etudiants/listeEtudiant',['etudiant'=>$etudiant]);

    }
    public function create(){
        return view('/Etudiants/ajouterEtudiant');
    }
    public function ajouterEtudiant(studentRequest $request){
        $data=$request->validated();
        $nouvEtudiant=etudiant::create($data);
        if($nouvEtudiant){
            echo"Ajout avec succes!";
return redirect()->route('students');
        }

    else echo"ajout non efectuer!!";
    }

   public function update_view(etudiant $etudiant){
    return view('/Etudiants/modifierEtudian',['e'=>$etudiant]);
   }
   public function modifier(etudiant $etudiant,  studentRequest $request)
   {
       $data = $request->validated();
       $etudiant->update($data);   
       return redirect()->route('students');
   }
  public function supprimer(etudiant $etudiant){
$etudiant->delete();
return redirect()->route('students');

  }
   
}
