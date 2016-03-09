@extends('layout.layout')
@section('title')
Create a product
@stop

@section('body')
	{!!Form::open(['route'=>'product.store'])!!}
	
	{!!Form::label('name','Name')!!}
	{!!Form::text('name')!!}

	{!!Form::label('price','Price')!!}
	{!!Form::text('price')!!}

	{!!Form::submit('Create')!!}

	{!!Form::close()!!}
@stop