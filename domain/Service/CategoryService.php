<?php

namespace domain\Service;

use App\Models\Category;
use Illuminate\Support\Facades\DB;

class CategoryService
{

    public function __construct()
    {
        $this->Category = new Category();
    }
    public function all()
    {
        return $this->Category::get();
    }

    public function create()
    {
        return $this->Category::get();
    }

    public function addNew($request)
    {

        $request->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $this->Category::create($request->all());
        return $this->Category::get();
    }

    public function getEditId($id)
    {

        return Category::findOrFail($id);
    }
    public function update($request)
    {

        $this->Category->update($request->all());
        return $this->Category::get();
    }
    public function delete($id)
    {
        DB::table('categories')->delete($id);
        return $this->Category::get();
    }
}
