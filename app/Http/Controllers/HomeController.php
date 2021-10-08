<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{

    public function index()
    {
        return view('home');
    }

    public function products(){
        $products = Product::all();
        return view('products', [
            'products' => $products
        ]);
    }

    public function show($id)
    {
        $products = Product::find($id);
        return view('show')->with('products', $products);
    }

    public function edit($id)
    {
        $products = Product::find($id);
        return view('edit')->with('products', $products);
    }

    public function update(Request $request, $id) {
        $products = Product::find($id);
        // $products->name = $request->name;
        // $products->description = $request->description;
        // $products->price = $request->price;
        $products->update($request->all());
        $products->save();
        return redirect('/products');
    }
}
