<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\loginRequest;
use App\Http\Requests\adminsRequest;

class userController extends Controller
{
  public function  openAddview(){
    return view('/Admins/ajouterAdmin');
  }
  function addAdmin(Request $request){
    $data=$request->validate([
        'name'=>"required",
        'email'=>"required|email",
        'password'=>"required|min:4"
    ]);
    $data['password']=Hash::make($data['password']);
   if(User::create($data))
  return redirect()-> route('listAdmins');

  }
  public function authentifier(loginRequest $request){
    $data=$request->validated();
   if( Auth::attempt($data,$remember=true)){
    $request->session()->regenerate();
    return redirect()->route('adminhome');
   }
   return to_route('auth')->withErrors([
"email"=>"email invalide"
   ]);
  }
  public function logout(){
    Auth::logout();
    return redirect()->route('index');
  }
  public function modifier(adminsRequest $request){
    try {
        $data=$request->validated();
        if(Hash::check($data['password'], Auth::user()->password)){
        if( Auth::user()->update($data))
            return redirect()->route('profile');}
            return redirect()->back()->withErrors(['password'=>'mot de passe invalide'])->withInput();
    } catch (\Throwable $th) {
return redirect()->back()->withErrors(['constraint'=>'modification non valide'])->withInput();
    }

  }
  public function getUsers(){
    return view('Admins.admins',["admins"=>User::all()]);
  }
  public function interfacemodifierAdmin(User $admin)
  {
return view('admins.adminUpdate',["admin"=>$admin]);
  }
  public function delete(User $admin){
$admin->delete();
return redirect()->back();
  }
  public function modifierAdmin(request $request, user $admin){

        $data=$request->validate([
            'name'=>'required',
            'email'=>'required|email'
        ]);
       if( $admin->update($data))
      return redirect()->route('listAdmins');
     return redirect()->back()->withErrors($validator)->withInput();


  }
}
