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


            try {
                $data=$request->validated();
                $nouvEtudiant=etudiant::create($data);
                if($nouvEtudiant){
                return redirect()->route('students');}
                else return redirect()->back()->withErrors($validator)->withInput();

            } catch (\Throwable $th) {
                 return redirect()->back()->withErrors(['constraint'=>'NCE existe déjà'])->withInput();

            }
        }


   public function update_view(etudiant $etudiant){
    return view('/Etudiants/modifierEtudian',['e'=>$etudiant]);
   }
   public function modifier(etudiant $etudiant,  studentRequest $request)
   {
    try {
        $data = $request->validated();
        $etudiant->update($data);
        if($etudiant)
        return redirect()->route('students');
    else return redirect()->back()->withErrors($validator)->withInput();
    } catch (\Throwable $th) {
       return redirect()->back()->withErrors(['constraint'=>'NCEexiste déjà!'])->withInput();
    }

   }
  public function supprimer(etudiant $etudiant){
$etudiant->delete();
return redirect()->route('students');

  }

}
