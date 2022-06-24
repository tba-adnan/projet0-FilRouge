<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class admincontroller extends Controller
{
    public function login(Request $request)
    {
        $email = $request->input("email");
        // $password = $request->input("password");

        
        $user= DB::table('users')
        ->select("*")
        // ->where([
        //     ["email",'=',$email],
        //     ["password",'=',$password]
        //     ])
        ->get();

foreach($user as $value){};
         

        if($email == $value->email){
            return redirect('afficher-endroit');
        }
// if (!empty($user) {
//     # code...
//     return redirect('afficher-categorie');
// }
    }
}
