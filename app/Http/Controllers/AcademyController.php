<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
//Model here
use App\Academy;

class AcademyController extends Controller
{
    public function index()
    {
    	//$products=Product::all();
    	// /return $products;
    	//return view('product.index')->with('products',$products);
        $academys = Academy::all();
        //return $academys;
        return view('academy.explore')->with('academys',$academys);
    }

    public function  create(){
    	//return view('product.create');
        return view('academy.create');
    }

    public function store(Request $request){
    	$academy = new Academy;
    	$academy->username = $request->username;
    	$academy->academyname = $request->academyname;
        $academy->phone = $request->phone;
        $academy->email = $request->email;
        $academy->description = $request->description;
        $academy->longitude = $request->longitude;
        $academy->latitude = $request->latitude;

    	$academy->save();
    	return "Something";
    }
}