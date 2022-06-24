<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Http;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
   function fetch_API(){
$data =Http::get("https://api.openweathermap.org/data/2.5/weather?q=TANGER&appid=0bd0cd1e7d8ab7a578a5a4d28a57d45b")->json();

return view("hello",
[

   "name" =>$data['name'],
   "wind"=>$data['wind']['speed']
]



) ;


}
}
