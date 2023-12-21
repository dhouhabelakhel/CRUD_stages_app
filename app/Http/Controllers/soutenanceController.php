<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\etudiant;
use App\Models\enseignant;
use App\Models\soutenance;
class soutenanceController extends Controller
{
  

  public function  ouvrirformSoutenance(){
    $etudiant=etudiant::all();
    $ensg=enseignant::all();

    return view('ajoutersoutenance',['etudiants'=>$etudiant,'ensg'=>$ensg]);
  }
  public function addS(Request $request){
   $data= $request->validate([
'numjury'=>'required',
'note'=>'required',
'datesoutenance'=>'required',
'student_id'=>'required',
'enseg_id'=>'required'
    ]);
$soutenance=soutenance::create($data);
if($data)
echo"insertion valide";
return redirect()->route('listeS');
}
  public function getSoutenance(){
    $soutenances=soutenance::all();
    return view('listeSoutenance',['soutenances'=>$soutenances]);
  }
public function supprimer(soutenance $soutenance){
  $soutenance->delete();
  return redirect()->route('listeS');
}
public function updateview(soutenance $soutenance){
  return view('updateSoutenance',['soutenance'=>$soutenance]);
}
public function modifier(soutenance $soutenance,Request $request){
  $data=$request->validate([
    'numjury'=>'required',
    'note'=>'required',
    'datesoutenance'=>'required',
    'student_id'=>'required',
    'enseg_id'=>'required'
  ]);
 if( $soutenance->update($data))
 echo"modification valide";
return redirect()->route('listeS');
echo"impossible de modifier";
  
}

}
