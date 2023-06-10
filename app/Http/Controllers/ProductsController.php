<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\DB;

class ProductsController extends Controller
{
    public function getDetail () {
        $product_items = Products::all();
        return view('zaiko_detail', compact('product_items'));
    }
}
