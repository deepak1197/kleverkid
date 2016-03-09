<?php

	//namespace App;

	use Illuminate\Database\Eloquent\Model;
	
	class vendor extends Eloquent
	{
		
		protected $fillable = ['title','lat','lng'];
	}