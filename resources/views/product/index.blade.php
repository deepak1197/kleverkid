@extends('layout.layout');
@section('title')
	All products
@stop

@section('body')
	@foreach($products as $product)
		 <h1>{{$product->name}}</h1>
		 <h3>{{$product->price}}</h3>
	@endforeach
@stop