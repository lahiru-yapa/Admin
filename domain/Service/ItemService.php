<?php

namespace domain\Service;

use App\Models\Item;
use App\Models\Category;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\DB;
use infrastructure\Facades\ItemFacade;
use infrastructure\Facades\CategoryFacade;
use infrastructure\Facades\ImagesFacade;

class ItemService
{

    public function __construct()
    {
        $this->item = new Item();
        $this->category = new Category();
    }

    public function all(): ?Collection
    {
        return $this->item->all();
    }

    public function getcategory(): ?Collection
    {
        return $this->category->all();
    }


    public function get($id): ?item
    {
        return $this->item->find($id);
    }

    public function store($request)
    {

        if (isset($request['images'])) {
            $image = ImagesFacade::store($request['images'], [1, 2, 3, 4, 5]);
            $request['image'] = $image['created_images']->id;
        }
        return $this->item->create($request);
    }

    public function update($item_id, $request): void
    {

        if (isset($request['images'])) {
            $image = ImagesFacade::store($request['images'], [1, 2, 3, 4, 5]);
            $request['image'] = $image['created_images']->id;
        }
        $item = $this->item->find($item_id);
        $item->update($this->edit($item, $request));
    }

    protected function edit(Item $item, $data): array
    {
        return array_merge($item->toArray(), $data);
    }

    public function delete($id): void
    {
        $this->item->find($id)->delete();
    }
}
