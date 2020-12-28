<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Application;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\http\Request;

class DeveloperController extends Controller
{
     //no funciona este middleware
    public function __construct()
    {
        $this->middleware('developer');
    }

    /*public function index(){
        return view('aplicaciones.index');
        
    }

    public function create(){
        return view('aplicaciones.create');
    }

    public function store(Request $request){
      return $request -> all();
    }

    /*public function validator(Request $data)
    {
         return Validator::make($data, [
            'category_application' => ['required', 'string'],
            'name_application' => ['required', 'string'],
            'sale_price_application' => ['required', 'integer'],
           
            
        ]);
    } */


    /*public function store(Request $data) {

          $this -> validate($data,[
            'category_application' => 'required',
            'name_application' => 'required',
            'sale_price_application' => 'required',
          ]);

           $app= new Application();
           $app -> category_application = $data-> category_application;
           $app -> name_application= $data-> name_application;
           $app -> sale_price_application= $data-> sale_price_application;
           $app -> image_logo_application= $data-> image_logo_application;
           $app-> save();
           return $app;

          Application::create([
            'category_application' => $data['category'],
            'name_application' => $data['name'],
            'sale_price_application'=> $data['price'],
            'image_logo_application' => $data['image'],
         ]); 

        //return dd($data);

     }*/
       
        
    
 }
