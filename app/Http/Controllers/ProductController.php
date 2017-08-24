<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Cart;
use Session;
use DB;

class ProductController extends Controller
{
    public function getIndex(){
        $products = DB::table('products')->orderBy('id', 'DESC')->paginate(3);
        return view('shop.index',['products' => $products]);
    }

    public function getAddToCart(Request $request, $id) {
        $product = Product::find($id);
        $oldCart = Session::has('cart') ? Session::get('cart') : null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart', $cart);
        //dd($request->session()->get('cart'));
        return redirect()->route('product.index');
    }

    public function getCart() {
        if (!Session::has('cart')) {
            return view('shop.shopping-cart', ['products' => null]);
        }
        $oldCart = Session::get('cart');
        $cart  = new Cart($oldCart);
        return view('shop.shopping-cart',['products' => $cart->items, 'totalPrice' => $cart->totalPrice]);
    }

    public function getCheckout() {
        if (!Session::has('cart')) {
            return view('shop.shopping-cart', ['products' => null]);
        }
        $oldCart = Session::get('cart');
        $cart = new Cart($oldCart);
        $total = $cart->totalPrice;
        return view('shop.check', ['total' => $total]);
    }
}
