<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use domain\Facade\ItemFacade;
use domain\Facade\CategoryFacade;

class ItemController extends Controller
{
    public function index()
    {

        $response['item'] = ItemFacade::all();
        return view('Pages.Item.all')->with($response);
    }
    public function create()
    {
        // $response['category'] = CategoryFacade::all();
        $response['category'] = ItemFacade::getcategory();

        return view('Pages.Item.new')->with($response);
    }

    public function store(Request $request)
    {

        $response['item'] = ItemFacade::store($request->all());
        $response['category'] = ItemFacade::getcategory();

        return view('Pages.Item.edit')->with($response);
    }

    public function edit(int $id)
    {
        $response['category'] = ItemFacade::getcategory();
        $response['item'] = ItemFacade::get($id);

        return view('Pages.Item.edit')->with($response);
    }

    public function update(Request $request, int $item_id)
    {


        ItemFacade::update($item_id, $request->all());
        return redirect()->route('item.all');
    }

    public function delete(int $id)
    {
        ItemFacade::delete($id);
        return redirect()->route('item.all');
    }
}
