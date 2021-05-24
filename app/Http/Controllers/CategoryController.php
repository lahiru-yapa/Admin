<?php

namespace App\Http\Controllers;

use domain\Facade\CategoryFacade;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        $response['category'] = CategoryFacade::all();
        return view('Pages.Categorys.all')->with($response);
    }

    public function create()
    {
        return view('Pages.Categorys.new');
    }
    public function edit($id)
    {
        $response['category'] = CategoryFacade::getEditId($id);

        return view('Pages.Categorys.edit')->with($response);
    }
    public function store(Request $request)
    {
        $response['category'] = CategoryFacade::addNew($request);
        return view('Pages.Categorys.all')->with($response);
    }
    public function update(Request $request)
    {

        $response['category'] = CategoryFacade::update($request);
        return view('Pages.Categorys.all')->with($response);
    }
    public function delete(Request $request, $id)
    {
        $response['category'] = CategoryFacade::delete($id);
        return view('Pages.Categorys.all')->with($response);
    }
}
