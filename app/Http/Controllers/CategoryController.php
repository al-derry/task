<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreCategoryRequest;
use App\Services\CategoryService;

class CategoryController extends Controller
{
    public function store(StoreCategoryRequest $request,CategoryService $CategoryService) {

        $CategoryService->add($request);
        return redirect()->back()->with(['success' => 'category has been added successfully']);
    }
    public function create() {
        return view('category.add');
    }
}
