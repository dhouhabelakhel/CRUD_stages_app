<?php

namespace App\Http\Controllers;
use App\Models\enseignant;
use App\Models\soutenance;
use Illuminate\Http\Request;

class enseignantController extends Controller
{
   public function ouvrirAjoutEnsg(){
    return view('/Enseignants/ajouterEnseignant');
   }
   public function ajouter(Request $request){
    $data=$request->validate([
'matricule'=>'required',
'nom_ensg'=>'required',
'prenom_ensg'=>'required',
    ]
    );
   
    if( $nouvEnseignant=enseignant::create($data)){
      
return redirect()->route('teachers');
    }

else echo"ajout non efectuer!!";
   }
   public function afficher(){
    return view('/Enseignants/listeEnseignant',['ensg'=>enseignant::all()]);
   }
   public function openUpdate(enseignant $enseignant){
    return view ('/Enseignants/modifierEnseignant',['ensg'=>$enseignant]);
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
