<?php

namespace App\Http\Controllers;
use \App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index() {
        $productos = Product::all();
        return view("products.index", compact("productos"));
    }
    public function create() {
        return view("products.create");
    }
    public function store(Request $request) {
        Product::create($request->all());
        return redirect()->route("product.index");
    }
    public function show(Product $producto) {
        return view("products.show", compact("producto"));
    }

    public function edit(Product $producto) {
        return view("products.edit", compact("producto"));
    }

    public function update(Request $request, Product $producto) {
        $producto->update($request->all());
        return redirect()->route("product.index");
    }

    public function destroy(Product $producto){
        $producto->delete();
        return redirect()->route("product.index");
    }
}
