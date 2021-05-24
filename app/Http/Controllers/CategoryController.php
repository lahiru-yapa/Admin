<?php

namespace App\Http\Controllers;
use domain\Facade\CategoryFacade;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index(){
       $response['category'] = CategoryFacade::all();
          return view('Pages.Categorys.all')->with($response);  
           
    }
    
    public function create(){
        return view('Pages.Categorys.new'); 
    }
    public function edit($id){
        return view('Pages.Categorys.edit'); 
    }
    public function store(Request $request){
      dd($request); 
    }
}
