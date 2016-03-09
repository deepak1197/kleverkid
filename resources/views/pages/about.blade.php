@extends('layout.layout')
@section('title')
	About 
@stop

@section('body')
	<h1>This is about page</h1>
	<p>Company is {{$name}}</p>

	<p>Empoylees are</p>
	@foreach($users as $user)
		<br>{{$user}}
	@endforeach
@stop
	
