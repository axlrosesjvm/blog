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
    public function index(Request $request){
        	if($request)
        	{
        		$query=trim($request->get('searchText'));
        		$historias=DB::table('historia')->where('nombre','LIKE','%'.$query.'%')
      ->paginate(7);
        		return view('probando.pruebabd.index',["historias"=>$historias,"searchText"=>$query]);
        	}

    }
      
}
