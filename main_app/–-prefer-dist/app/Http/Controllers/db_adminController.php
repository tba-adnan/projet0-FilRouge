<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class db_adminController extends Controller
{

function db_login(Request $request){

$email = $request->input('email');
   $data  = DB::table('db_admin')
   ->select("*")
   ->get();
   foreach ($data as  $value) {}
   $email_admin= $value->email;
  
        if($email == $email_admin){

            // return view('home');
            return redirect("afficher-categorie");
        }
        else{
            
            return redirect("eir_db");
        }
}


}
