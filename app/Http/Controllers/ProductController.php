<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use DB;

class ProductController extends Controller
{
    public function getIndex(){
        $products = DB::table('products')->orderBy('id', 'DESC')->paginate(12);
        return view('shop.index',['products' => $products]);
    }
}
