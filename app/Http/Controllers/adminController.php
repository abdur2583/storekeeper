<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class adminController extends Controller {
    public function index() {
        $data = DB::table('products')->get();
        $sold_item = DB::table('sold_items')
        ->join('products', 'sold_items.product_id', '=', 'products.id')
        ->limit(5)
        ->get();
        return view( 'admin',compact('data','sold_item') );
    }
    public function add_new(){
         return view("add_product");
    }
    public function store(Request $request){
        $this->validate($request, [
            'product_name' => 'required',
            'product_price' => 'required',
            'product_stock' => 'required',
            'product_category' => '',
            'user_id' => '',
        ]);
        DB::table('products')->insert([
            'product_name' => $request->product_name,
            'price' => $request->product_price,
            'stock' => $request->product_stock,
            'category_id' => $request->product_category,
            'user_id' => $request->user_id
        ]);
        return redirect()->back()->with('message', 'Product Added Successfully');
    }
    public function add_user(){
      return view("add_user");
    }
    public function store_user(Request $request){
        $this->validate($request, [
            'user_name' => 'required',
            'email' => 'required',
        ]);
        DB::table('users')->insert([
            'name' => $request->user_name,
            'email' => $request->email,
        ]);
        return redirect()->back()->with('message', 'User Added Successfully');
    }
}
