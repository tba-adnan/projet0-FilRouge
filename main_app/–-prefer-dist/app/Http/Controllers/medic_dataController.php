<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class medic_dataController extends Controller
{
      /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $medic = DB::table('medic_data')
        ->select("*")
        ->get();
        return view('pages.tableau-categorie' , compact('medic'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.inserte-categorie');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
    
        $nom = $request->input('nom_medic');
        $prix = $request->input('prix_medic');
        $rom = $request->input('rom_medic');
      
      
       
        
        $inserte = DB::insert('insert into medic_data(nom_medic,prix_medic,rom_medic) value(?,?,?)',[$nom,$prix,$rom]);
       if($inserte){
        return redirect('afficher-categorie');
        
     }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $medic = DB::table('medic_data')
        ->where('id_medic',$id)
        ->select("*")
        ->get();
        return view('pages.edit-categorie', compact('medic'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

        $nom = $request->input('nom_medic');
        $prix = $request->input('prix_medic');
        $rom = $request->input('rom_medic');
      
       
       DB::table('medic_data')
       ->where('id_medic',$id)
       ->update(['nom_medic'=>$nom,
        'prix_medic'=>$prix,
        "rom_medic"=>$rom
    ]);
       
       return redirect('afficher-categorie');        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $medic = DB::table('medic_data')
        ->where('id_medic',$id)
        ->select("*")
        ->delete();
       return redirect('afficher-categorie');
    }
}
