<?php
namespace App\Services;

use App\Models\Category;

class CategoryService {

    public function getAll() {

        $category = Category::all();
        return $category;
    }
    public function add($request) {

        Category::create(['name' => $request->name]);
    }

}