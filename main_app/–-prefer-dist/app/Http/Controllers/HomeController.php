<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()

    {
       
    
    // $cat ='helloo';   
    $response = json_decode(file_get_contents('https://www.dwa.ma/api/v1/search?word=dolo&type=principes,laboratoires,medicaments,pathologies'), true);
    // $collection = collect($response->json()['data']);
    // $filtered = $collection->whereIn('id', [1, 2, 3, 4]);
    // $arr = json_decode($filtered, true);
    

    
    //  return view('home',compact('arr'));
     return view('home');
     
    }


   
}

