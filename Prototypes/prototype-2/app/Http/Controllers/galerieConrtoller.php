<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class galerieConrtoller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $galerie = DB::table('galeries')
        ->select("*")
        ->join('places','galeries.id_place','=' ,'places.id_place')
        ->get();
        return view('pages.tableau-galerie' , compact('galerie'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $places =DB::table('places')
        ->select('*')
        ->get();
        return view('pages.inserte-galerie', compact('places'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        if($request->hasfile('photo_place'))
         {
             $file = $request->file('photo_place');
             $extenstion = $file->getClientOriginalExtension();
             $filename = time().'.'.$extenstion;
             $file->move('assets/galerie', $filename);
            $photo = $filename;
         }
        
        $id_place=$request->input('id_place');
         $inserte = DB::insert('insert into galeries(photos,id_place) value(?,?)',[$photo,$id_place]);
         if($inserte){
          return redirect('afficher-galerie');
          
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
        $edit=DB::table('galeries')
        ->where('id_galerie',$id)
        ->select('*')
        ->join("places","galeries.id_place","=",'places.id_place')
        ->get();
        $place = DB::table('places')
          ->select("*")
          ->get();
        return view('pages.edit-galerie', compact('edit','place'));
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
        if ( $request->hasFile('photo_place')) {
            $file = $request->file('photo_place');
                $extenstion = $file->getClientOriginalExtension();
                $filename = time().'.'.$extenstion;
                $file->move('assets/galerie', $filename);
                $image = $filename;
             }
           else{
               $image= $request->input("img");
          }
          
        $id_place= $request->input('id_place');
       


       DB::table('galeries')
       ->where('id_galerie',$id)
       -> update(['photos'=>$image,'id_place'=>$id_place ]); 


       return redirect('afficher-galerie');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $inserte=DB::table('galeries')
      ->where('id_galerie',$id)
      ->delete();
      if ($inserte) {
         return redirect('afficher-galerie');
      }
    }
}
