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
       
    
    
    $response = Http::get("https://www.dwa.ma/api/v1/search?word=doli&type=principes,laboratoires,medicaments,pathologies")->json();
   
    return view('home',[


        // "ppv"=>$response["data"]["all"]["hits"]["total"] ,
        "data"=>$response["data"]["all"]["hits"]["hits"],

    ]);
   
    // $collection = collect($response->json()['data']);
    // $filtered = $collection->whereIn('id', [1, 2, 3, 4]);
    // $arr = json_decode($filtered, true);
    

    
    //  return view('home',compact('arr'));
    
     
    }


// 


public function search(Request $keyword) {
// if($keyword){
//     'hello  ';
// }

$keywords = $keyword->input("search");

    $response = Http::get("https://www.dwa.ma/api/v1/search?word={$keywords}&type=principes,laboratoires,medicaments,pathologies")->json();
    // $response = Http::get("https://www.dwa.ma/api/v1/search?word=doli&type=principes,laboratoires,medicaments,pathologies")->json();

    return view('home',[
        // "ppv"=>$response["data"]["all"]["hits"]["total"] ,
        "data"=>$response["data"]["all"]["hits"]["hits"],
        // "tags"=>$response["data"]["all"]["hits"]["hits"],
        // "data"=>$response["data"]["metadata"]["meta"]["items"],

    ]);



} 













   
}

