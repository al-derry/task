<?php
namespace App\Services;

use App\Models\Product;
use Illuminate\Support\Facades\DB;

class ItemService {

   public function add($request) {
      $product = Product::create([
         'name' => $request->name,
         'price' => $request->price,
         'description' => $request->description,
         'cate_id' => $request->cate_id,
      ]);
   }
   public function getAll() {

      $item = DB::table('product as pr')
      ->join('category as ca', 'pr.cate_id', '=', 'ca.id')
      ->select('ca.name as categoryName','pr.id','pr.name',
      'pr.price','pr.description')->get();
      return $item;
   } 
}