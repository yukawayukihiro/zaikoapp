<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProductsRequest;

class ProductsController extends Controller
{
    public function getDetail () {
        $product_items = Products::all();
        return view('zaiko_detail', compact('product_items'));
    }

    public function getAdd (Request $request) {
        return view('zaiko_create');
    }

    public function getCreate (ProductsRequest $request) {
        $param_items = [
            'company_id' => $request->company_id,
            'product_name' => $request->product_name,
            'price' => $request->price,
            'stock' => $request->stock,
            'comment' => $request->comment,
        ];
        DB::table('test_products')->insert($param_items);
        return redirect('/zaiko.add');
    }

    public function getTopEdit () {
        $product_items = Products::all();
        return view('zaiko_topedit', compact('product_items'));
    }
    
    public function getEdit ($id) {
        $product_items = Products::find($id);
        return view('zaiko_edit', compact('product_items'));
    }

    public function getUpdate (ProductsRequest $request) {
        Products::find($request->id)->update([
            'company_id' => $request->company_id,
            'product_name' => $request->product_name,
            'price' => $request->price,
            'stock' => $request->stock,
            'comment' => $request->comment,
        ]);
        return redirect('/zaiko.topedit');
    }

    public function getList () {
        $product_items = Products::all();
        return view('zaiko_list', compact('product_items'));
    }

    public function getDelete ($id) {
        Products::where('id', $id)->delete();
        return redirect('/zaiko.list');
    }
}
