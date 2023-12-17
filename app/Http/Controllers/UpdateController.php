<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class UpdateController extends Controller
{
    public function update(){
        return view("update_product");
   }
    public function update_product(Request $request ){
        $this->validate($request, [
            'product_name' => 'required',
            'product_price' => 'required',
            'product_stock' => 'required',
            'product_category' => '',
            'user_id' => '',
        ]);
        DB::table('products')
        ->where('id', $request->product_id)
        ->update([
            'product_name' => $request->product_name,
            'price' => $request->product_price,
            'stock' => $request->product_stock,
            'category_id' => $request->product_category,
            'user_id' => $request->user_id
        ]);
        return redirect()->back()->with('update', 'update Added Successfully');
    }
}
