<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ShopController extends Controller
{
    public function category1(Request $request) {
        //<option value="1">Smart Switches.</option>
        //<option value="2">Cameras</option>
        //<option value="3">Smartlocks</option>
        //<option value="4">Smart Sockets</option>
        //<option value="5">Smart bolds</option>
        //<option value="6">Smart remote controls</option>
        //$Products = Product::find($shop);
        $productId = 1;
        
        $products = Product::where('category2', $productId)
                            ->paginate('12');
        return view('shop.category1', compact('products'));
    }

    public function category2(Request $request) {
        //<option value="1">Smart Switches.</option>
        //<option value="2">Cameras</option>
        //<option value="3">Smartlocks</option>
        //<option value="4">Smart Sockets</option>
        //<option value="5">Smart bolds</option>
        //<option value="6">Smart remote controls</option>
        //$Products = Product::find($shop);
        $productId = 2;
        
        $products = Product::where('category2', $productId)
                            ->paginate('12');
        return view('shop.category2', compact('products'));
    }

    public function category3(Request $request) {
        //<option value="1">Smart Switches.</option>
        //<option value="2">Cameras</option>
        //<option value="3">Smartlocks</option>
        //<option value="4">Smart Sockets</option>
        //<option value="5">Smart bolds</option>
        //<option value="6">Smart remote controls</option>
        //$Products = Product::find($shop);
        $productId = 3;
        
        $products = Product::where('category2', $productId)
                            ->paginate('12');
        return view('shop.category3', compact('products'));
    }

    public function category4(Request $request) {
        //<option value="1">Smart Switches.</option>
        //<option value="2">Cameras</option>
        //<option value="3">Smartlocks</option>
        //<option value="4">Smart Sockets</option>
        //<option value="5">Smart bolds</option>
        //<option value="6">Smart remote controls</option>
        //$Products = Product::find($shop);
        $productId = 4;
        
        $products = Product::where('category2', $productId)
                            ->paginate('12');
        return view('shop.category4', compact('products'));
    }

    public function category5(Request $request) {
        //<option value="1">Smart Switches.</option>
        //<option value="2">Cameras</option>
        //<option value="3">Smartlocks</option>
        //<option value="4">Smart Sockets</option>
        //<option value="5">Smart bolds</option>
        //<option value="6">Smart remote controls</option>
        //$Products = Product::find($shop);
        $productId = 5;
        
        $products = Product::where('category2', $productId)
                            ->paginate('12');
        return view('shop.category5', compact('products'));
    }

    public function category6(Request $request) {
        //<option value="1">Smart Switches.</option>
        //<option value="2">Cameras</option>
        //<option value="3">Smartlocks</option>
        //<option value="4">Smart Sockets</option>
        //<option value="5">Smart bolds</option>
        //<option value="6">Smart remote controls</option>
        //$Products = Product::find($shop);
        $productId = 6;
        
        $products = Product::where('category2', $productId)
                            ->paginate('12');
        return view('shop.category6', compact('products'));
    }
}
