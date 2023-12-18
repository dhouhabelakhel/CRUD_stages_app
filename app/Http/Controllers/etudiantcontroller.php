<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\etudiant;

class etudiantcontroller extends Controller
{
    public function getEtudiant(){
        return response()->json(etudiant::all(),200);
    }
    public function listEtudiant(){
        $etudiant=etudiant::all();
        return view('listeEtudiant',['etudiant'=>$etudiant]);

    }
    public function create(){
        return view('ajouterEtudiant');
    }
    public function ajouterEtudiant(Request $request){
        $data=$request->validate([
            'NCE'=>'required',
        'nom'=>'required',
        'prenom'=>'required',
        'classe'=>'required'
        ]);
        $nouvEtudiant=etudiant::create($data);
        if($nouvEtudiant){
            echo"Ajout avec succes!";
return redirect()->route('students');
        }

    else echo"ajout non efectuer!!";
    }

   public function update_view(etudiant $etudiant){
    return view('modifierEtudian',['e'=>$etudiant]);
   }
   public function modifier(etudiant $etudiant, Request $request)
   {
       $data = $request->validate([
           'NCE' => 'required',
           'nom' => 'required',
           'prenom' => 'required',
           'classe' => 'required'
       ]);
   
       $etudiant->update($data);
   
       session()->flash('success', 'Modification réussie!');
   
       return redirect()->route('students');
   }
  public function supprimer(etudiant $etudiant){
$etudiant->delete();
return redirect()->route('students');

  }
   
}
