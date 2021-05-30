<?php

namespace domain\Service;

use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use infrastructure\Facades\ImagesFacade;

class CategoryService
{

    public function __construct()
    {
        $this->category = new Category();
    }

    public function all(): ?Collection
    {
        return $this->category->all();
    }


    public function store($request)
    {

        if (isset($request['images'])) {
            $image = ImagesFacade::store($request['images'], [1, 2, 3, 4, 5]);
            $request['image'] = $image['created_images']->id;
        }

        $this->category->create($request);
    }

    public function get($id): ?Category
    {
        return $this->category->find($id);
    }

    public function update($category_id, $request): void
    {

        if (isset($request['images'])) {
            $image = ImagesFacade::store($request['images'], [1, 2, 3, 4, 5]);
            $request['image'] = $image['created_images']->id;
        }
        $category = $this->category->find($category_id);
        $category->update($this->edit($category, $request));
    }

    protected function edit(Category $category, $data): array
    {
        return array_merge($category->toArray(), $data);
    }

    public function delete($id): void
    {
        $this->category->find($id)->delete();
    }

    public function changeStatus($category_id): int
    {
        $category = $this->category->find($category_id);

        if ($category->status == 0) {
            $category->status = 1;
            $category->update();
            return 1;
        } else {
            $category->status = 0;
            $category->update();
            return 0;
        }
    }
}
