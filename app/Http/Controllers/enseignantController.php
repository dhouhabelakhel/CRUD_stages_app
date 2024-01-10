<?php

namespace App\Http\Controllers;
use App\Models\enseignant;
use App\Models\soutenance;
use Illuminate\Http\Request;
use App\Http\Requests\teacherRequest;
class enseignantController extends Controller
{
   public function ouvrirAjoutEnsg(){
    return view('/Enseignants/ajouterEnseignant');
   }
   public function ajouter(teacherRequest $request){
    $data=$request->validated();
   
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
   public function editEnsg(teacherRequest $request,enseignant $enseignant){
    $data=$request->validated();
    $enseignant->update($data);
   }
   public function deleteEnsg(enseignant $enseignant){
    $enseignant->delete();
 return redirect()->route('teachers');
   }
}
