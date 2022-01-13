<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function register(){
      return  view('register');
    }
    public function register_store(Request $request){
      $data['firstname']= $request->firstname;
      $data['lastname']= $request->lastname;
      $data['email']= $request->email;
      $data['password']= $request->password;
      $data['confirm_password']= $request->confirm_password;
      $insert = DB::table('registers')->insert($data);
      if($insert){
        return redirect()->route('/');
      }else{
        return back();
      }
    }
    
}
