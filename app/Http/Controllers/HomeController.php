<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Cookie\CookieJar;
use Cookie;



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

   /* public function setCookie(Request $request){
      $minutes = 60;
      $response = new Response('Set Cookie');
      $response->withCookie(cookie('id', auth()->user()->id, $minutes));
      return $response;
   }

     public function getCookie(Request $request){
      $value = $request->cookie('name');
      echo "gggggggggggggggggggggggggggggggggggggg".$value;
   }*/

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(CookieJar $cookieJar,  Request $request)
    {
     
  //if ($request->referrer){

$cookieJar->queue(cookie('name', auth()->user()->id, 45000));

//}

//$uid = Cookie::get('name');
  return view('home');
    }
}
