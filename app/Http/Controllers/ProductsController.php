<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\ProductsRequest;

class ProductsController extends Controller
{
    public function getDetail (Request $request) {
        $select_items = $request->price;

        switch ($select_items) {
            case '1':
                $product_items = Products::get();
                break;
            case '2':
                $product_items = Products::orderBy('price', 'desc')->get();
                break;
            case '3':
                $product_items = Products::orderBy('price', 'asc')->get();
                break;
            default :
                $product_items = Products::get();
                break;
        }
        return view('zaiko_detail', compact('select_items', 'product_items'));
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

    public function getSearch (Request $request) {
        $keyword_name = $request->product_name;

        if (!empty($keyword_name)) {
            $query = Products::query();
            $product_items = $query->where('product_name', 'like', '%' . $keyword_name . '%')->get();
            return view('zaiko_search', compact('product_items'));
        } 
    }
}
