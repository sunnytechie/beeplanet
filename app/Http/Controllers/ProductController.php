<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Product;
use App\Models\Subscriber;
use App\Models\Contact;

class ProductController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index() {
        if (Auth::user()->user_type == 0) {
            return redirect()->route('auth.error')->with('Errormsg', 'You dont have the Authorization to view this file !!!');
        }
        $products = Product::orderBy('id', 'DESC')->get();
        //Subscribers
        $emails = Subscriber::orderBy('id', 'DESC')->get();
        //Contacts
        $contacts = Contact::orderBy('id', 'DESC')->get();

        return view('admin.product.index', compact('products', 'emails', 'contacts'));
    }

    public function show() {
        
    }

    public function new() {
        // Not in use as at the moment...
    }

    public function store(Request $request) {
        if (Auth::user()->user_type == 0) {
            return redirect()->route('auth.error')->with('Errormsg', 'You dont have the Authorization to view this file !!!');
        }

        $data = request()->validate([
            'avatar' => ['required', 'image'],
            'title' => 'required',
            'category' => 'required',
            'category2' => '',
            'badge' => '',
            'price' => '',
            'sku' => '',
            'tags' => '',
            'description' => '',
        ]);

        //dd($data);

        //Images for Thumbnails 300x300
        $thumbnailPath = cloudinary()->upload($request->file('avatar')->getRealPath(), [
            'folder' => 'beesmartplanet',
            'transformation' => [
                'width' => 650,
                'height' => 773,
                "crop" => "crop"
            ]
        ])->getSecurePath();


        Product::create([
            'thumbnail' => $thumbnailPath,
            'title' => $data['title'],
            'category' => $data['category'],
            'category2' => $data['category2'],
            'badge' => $data['badge'],
            'price' => $data['price'],
            'sku' => $data['sku'],
            'tags' => $data['tags'],
            'description' => $data['description'],
            ]);

            return redirect('/admin/product')->with('status', 'Product published successfully!');

    }

    public function edit() {
        
    }

    public function update() {
        
    }

    public function delete(Product $product) {
        $productID = $product->id;
        $product = Product::find($productID);
        $product->delete(); //returns true/false

        return redirect()->back()->with('status', 'Product has been deleted from the database!');
    }
}
