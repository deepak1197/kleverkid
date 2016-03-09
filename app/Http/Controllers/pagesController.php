<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class pagesController extends Controller
{
	public function getIndex(){
		return view('welcome ');
	}	
	public function getAbout(){
		//passing variable to a view
		$company = "Awidit Systems";
		$isUserRegistered = false;

		$users = array("Deepak","Vikram","Anuj");
		return view('pages.about')
			   ->with("name",$company)
			   ->with("isUserRegistered",$isUserRegistered)
			   ->with("users",$users);
	}
	public function getContact(){
		return view('pages.contact');
	}


}
