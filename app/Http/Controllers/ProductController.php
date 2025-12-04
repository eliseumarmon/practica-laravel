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
        Product::create([
            "name" => "GBA",
            "description" => "Consola portátil retro.",
            "price" => "50.25",
            "stock" => 5
        ]);

        Product::create([
            "name" => "PS5",
            "description" => "Consola sobremesa actual.",
            "price" => "399.99",
            "stock" => 27
        ]);

        Product::create([
            "name" => "Steam Box",
            "description" => "PC gamer con SO linux",
            "price" => "699.99",
            "stock" => 0
        ]);

        return redirect()->route("products.index");
    }
}
