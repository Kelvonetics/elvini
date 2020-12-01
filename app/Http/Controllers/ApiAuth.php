<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Auth;

class ApiAuth extends Controller
{
    //

  
   function checkAuth()
   {
   	if (Auth::user())
   	{
   		return [
          'message'=>'Currently loggedin',
          'error'=>false,
          'data'=>Auth::user()
   		];      
   	}
   	else
   	{
   		return [
          'message'=>'Session expired.',
          'error'=>true,
          'data'=>null
   		];
   	}
   }
  


}
