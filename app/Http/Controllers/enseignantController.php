<?php

namespace App\Http\Controllers;
use App\Models\enseignant;
use Illuminate\Http\Request;

class enseignantController extends Controller
{
   public function ouvrirAjoutEnsg(){
    return view('ajouterEnseignant');
   }
   public function ajouter(Request $request){
    $data=$request->validate([
'matricule'=>'required',
'nom_ensg'=>'required',
'prenom_ensg'=>'required',
    ]
    );
    $nouvEnseignant=enseignant::create($data);
    if($nouvEnseignant){
        echo"Ajout avec succes!";
return redirect()->route('addEnsg');
    }

else echo"ajout non efectuer!!";
   }
   public function afficher(){
    return view('listeEnseignant',['ensg'=>enseignant::all()]);
   }
   public function openUpdate(enseignant $enseignant){
    return view ('modifierEnseignant',['ensg'=>$enseignant]);
   }
   public function editEnsg(Request $request,enseignant $enseignant){
    $data=$request->validate([
        'matricule'=>'required',
        'nom_ensg'=>'required',
        'prenom_ensg'=>'required'
    ]);
    $enseignant->update($data);
   }
   public function deleteEnsg(enseignant $enseignant){
    $enseignant->delete();
    return redirect()->route('teachers');
   }
}
