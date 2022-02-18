<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;


class ProductsController extends Controller
{
    public function index(){
        
        $products = Product::all();

        // in this way, we'll send it to index view
        return view('products.index', compact('products'));
    }

    // this function is to create products
    public function create()
    {
        return view('products.create');
    }
}
