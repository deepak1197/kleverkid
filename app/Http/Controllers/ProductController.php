<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

use App\Product;

class ProductController extends Controller
{
    public function index()
    {
    	$products=Product::all();
    	// /return $products;
    	return view('product.index')->with('products',$products);
    }

    public function  create(){
    	return view('product.create');
    }

    public function store(Request $resquest){
    	$product = new Product;
    	$product->name = $resquest->name;
    	$product->price = $resquest->price;
    	$product->save();

    	return "Something";
    }
}
