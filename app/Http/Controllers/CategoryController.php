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
        $response['category'] = CategoryFacade::get($id);

        return view('Pages.Categorys.edit')->with($response);
    }
    public function store(Request $request)
    {
        CategoryFacade::store($request->all());
        return redirect()->route('categories.all');
    }
    public function update(Request $request, $category_id)
    {

        CategoryFacade::update($category_id, $request->all());
        return redirect()->route('categories.all');
    }
    public function delete(Request $request, $id)
    {
        $response['category'] = CategoryFacade::delete($id);
        return redirect()->route('categories.all');
    }
}
