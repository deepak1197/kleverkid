@extends('layout.layout')
@section('title')
	About 
@stop

@section('body')
	<h1>This is Contact page</h1>
	{!!Form::text('price')!!}
	{!!Form::text('price','$50',[
		'class'=>'Form-control',
		'placeholder'=>'Give a price'
	])!!}
@stop