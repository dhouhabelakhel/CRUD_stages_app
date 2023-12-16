<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\etudiant;

class etudiantcontroller extends Controller
{
    public function ajouterEtudiant(Request $request){
        $data=$request->validate([
            'NCE'=>'required',
        'nom'=>'required',
        'prenom'=>'required',
        'classe'=>'required'
        ]);
        $nouvEtudiant=etudiant::create($data);
        if($nouvEtudiant)
        echo"Ajout avec succes!";
    else echo"ajout non efectuer!!";
    }
    public function create(){
        return view('ajouterEtudiant');
    }
  
}
