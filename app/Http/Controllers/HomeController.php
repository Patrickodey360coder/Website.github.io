<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class HomeController extends Controller
{

    public function index()
    {
        $products = Product::all();
        return view('welcome')->with('products', $products);
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
            'name' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|string',
            'image' => 'required|image|mimes:jpeg,jpg,png,gif',
        ]);

        $products = Product::create($request->all());
        $products->save();
        if ($request->hasFile('image')) {

            $filenameWithExt = $request->file('image')->getClientOriginalName();

            //Get Filename
            $filename = pathinfo($filenameWithExt, PATHINFO_FILENAME);

            //Get just Extension

            $extension = $request->file('image')->getClientOriginalExtension();

            //filename to store
            $fileNameToStore = $filename. '_'. time().'.'.$extension;

            $path = $request->file('image')->storeAs('public/image', $fileNameToStore);
        }
        return redirect('/')->with('success', 'Product added successfully');
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

        Product::find($id)->update($request->all());
        return redirect('/')->with('success', 'Product has been successfully updated');
    }

    public function destroy($id) {
        Product::destroy($id);
         return redirect('/')->with('success', 'Product deleted successfully');
    }
}
