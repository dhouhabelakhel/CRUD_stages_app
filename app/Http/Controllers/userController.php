<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\loginRequest;

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
  return redirect()-> route('adminhome');

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
}
