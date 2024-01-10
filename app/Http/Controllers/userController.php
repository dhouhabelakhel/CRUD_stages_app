<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;

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
  redirect()-> route('admin');

  }
}
