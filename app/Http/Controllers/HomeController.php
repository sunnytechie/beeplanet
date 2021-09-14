<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Subscriber;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    //public function __construct()
    //{
    //    $this->middleware('auth');
    //}

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::orderBy('id', 'DESC')->get();
        //best seller
        $productBests = Product::where('category', 1)->orderBy('id', 'DESC')->get();
        //Recent seller
        $productRecents = Product::where('category', 2)->orderBy('id', 'DESC')->get();

        return view('pages.index', compact('productBests', 'productRecents', 'products'));
    }

    public function blog()
    {
        return view('pages.blog');
    }

    public function contact()
    {
        return view('pages.contact');
    }

    public function about()
    {
        return view('pages.about');
    }

    public function wishlist()
    {
        return view('pages.wishlist');
    }

    public function shop()
    {
        $products = Product::orderBy('id', 'DESC')
                                    ->paginate(12);

        return view('pages.shop', compact('products'));
    }

    public function account()
    {
        return view('pages.profile');
    }
    
    public function error() {
        return view('pages.404');
    }
}
