<?php

namespace App\Http\Controllers;

use App\Models\crudLaravel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CrudLaravelController extends Controller
{
public function afficher(){
    $person = crudLaravel::all();
    return view("pages.tableau",compact('person'));
}

        public function ajouter (Request $request){
         $person = new crudLaravel();
         $person->name=$request->input('name');
         $person->email=$request->input('email');
         $person->message=$request->input('message');
         $insert=$person->save();

         if($insert){
            return redirect('table');
         }
    }

    public function suprimer($id){

      crudLaravel::find($id)->delete();
       return redirect('table');


    }

    public function modifier_afficher($id){
      
        $person = crudLaravel::all()->where('id',$id);
  
        return view('pages.modifier', compact('person'));
    }

    public function modifier(Request $request) {
        
        DB::table('crud_laravels')
         ->where('id',$request->input('id'))
         ->update([
            'name'=>$request->input('name'),
            'email'=>$request->input('email'),
            'message'=>$request->input('message')

         ]);
       return redirect('table');
        
    }
}
