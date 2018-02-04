<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;



use App\Prueba;
use Illuminate\Support\Facades\Redirect;
use App\Http\Requests\PruebaFormRequest;
use DB;

class PruebaController extends Controller
{
    //
  	public function __construct(){
    }
    public function index(){

        		return view('probando.pruebabd.index');
        

    }
      
}
