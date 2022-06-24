<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       
        $categorie = DB::table('categories')
        ->select("*")
        ->get();
        return view('pages.tableau-categorie' , compact('categorie'));
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
       $nom = $request->input('name_categorie');
      
      
       if($request->hasfile('photo_categorie'))
        {
            $file = $request->file('photo_categorie');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('img', $filename);
            // $file->move('../../src/code-public/public/assets/images/places',$filename);
           $photo = $filename;
        }
       
    //    $photo = $request->input('photo_categorie');
       $inserte = DB::insert('insert into categories(nom_categorie,photo_categorie) value(?,?)',[$nom,$photo]);
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
        $edit = DB::table('categories')
        ->select('*')
        ->where('id_categorie',$id)
        ->get();
        
        return view('pages.edit-categorie', compact('edit'));

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
       $name=$request->input('name_categorie');


       if ( $request->hasFile('photo_categorie')) {
        $file = $request->file('photo_categorie');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('img', $filename);
            $image = $filename;
         }
       else{
           $image= $request->input("img");
      } 
      
      DB::table('categories')
      ->where('id_categorie',$id)
      ->update(['name_categorie'=>$name, 'photo_categorie'=>$image]);
      
      return redirect('afficher-categorie');

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('categories')
        ->where('id_categorie',$id)
        ->delete();

        return redirect('afficher-categorie');
       
    }
}
