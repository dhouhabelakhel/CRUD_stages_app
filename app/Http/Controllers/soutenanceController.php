<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\soutenanceRequest;
use App\Models\etudiant;
use App\Models\enseignant;
use App\Models\soutenance;
class soutenanceController extends Controller
{


  public function  ouvrirformSoutenance(){
    $etudiant=etudiant::all();
    $ensg=enseignant::all();

    return view('/Soutenances/ajoutersoutenance',['etudiants'=>$etudiant,'ensg'=>$ensg]);
  }
  public function addS(soutenanceRequest $request){
    try {
        $data= $request->validated();
if($soutenance=soutenance::create($data))
return redirect()->route('listeS');
    } catch (\Throwable $th) {
       return redirect()->back()->withErrors(['constraint'=>'ajout non valide'])->withInput();
    }

}
  public function getSoutenance(){
    $soutenances=soutenance::all();
    return view('/Soutenances/listeSoutenance',['soutenances'=>$soutenances]);
  }
public function supprimer(soutenance $soutenance){
  $soutenance->delete();
  return redirect()->route('listeS');
}
public function updateview(soutenance $soutenance){
  return view('/Soutenances/updateSoutenance',['soutenance'=>$soutenance]);
}
public function modifier(soutenance $soutenance,soutenanceRequest $request){
    try {
        $data=$request->validated();
        if( $soutenance->update($data))

       return redirect()->route('listeS');    }
        catch (\Throwable $th) {
       return redirect()->back()->withErrors(['constraint'=>'ajout non valide'])->withInput();
    }



}

}
