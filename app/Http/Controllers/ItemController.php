<?php

namespace App\Http\Controllers;

use App\Services\ItemService;
use App\Http\Requests\StoreItemRequest;
use App\Services\CategoryService;

class ItemController extends Controller
{

    public function create(CategoryService $categoryService) {

        $categories = $categoryService->getAll();
        return view('items.create',compact('categories'));
    }

    public function store(StoreItemRequest $request,ItemService $itemService) {

        $itemService->add($request);
        return redirect()->back()->with(['success' => 'Item has been added successfully']);
    }
    public function getAll(ItemService $itemService) {

        $items = $itemService->getAll();
        return view('items.item',compact('items'));
    }
}
