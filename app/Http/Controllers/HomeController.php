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

    public function create() {
        return view('create');
    }

    public function store(Request $request) {
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);

        Product::create($request->all());
        return view('products')->with('success', 'Product added successfully');
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
        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'price' => 'required'
        ]);

        $products = Product::find($id);
        $products->update($request->all());
        $products->save();
        return redirect('/products')->with('success', 'Product has been successfully updated');
    }

    public function destroy($id) {
        Product::destroy($id);
         return redirect('/products')->with('success', 'Product deleted successfully');
    }
}
