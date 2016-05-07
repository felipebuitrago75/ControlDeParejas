<?php

namespace appDiocesis\Http\Controllers;

use Illuminate\Http\Request;

use appDiocesis\Http\Requests;

class FrontController extends Controller
{
    /**
    *
    *
    *@return respuesta
    */
    public function index(){

    	return view('index');
    }
      /**
    *
    *
    *@return respuesta
    */
    public function registro(){

    	return view('registro');
    }
      /**
    *
    *
    *@return respuesta
    */
    public function entrevista(){
    	return view('entrevista');

    	
    }
         /**
    *
    *
    *@return respuesta
    */
    public function contacto(){
        return view('contacto');

        
    }
          /**
    *
    *
    *@return respuesta
    */
    public function nosotros(){
        return view('nosotros');

        
    }
}
