@extends('layout.layout')
@section('title')
Add your academy
@stop

@section('body')
	<div class="container">
		
		<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
			
		</div>
		<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
			<h4>Add Your Academy</h4>
			{!!Form::open(['route'=>'academy.store','class'=>'form','role'=>'form'])!!}
		
			<!--{!!Form::label('username','Username',['class'=>'pull-left'])!!}-->
			{!!Form::text('username',null,['placeholder'=>'User Name'])!!}

			<!--{!!Form::label('academyname','Academy Name',['class'=>'pull-left'])!!}-->
			{!!Form::text('academyname',null,['placeholder'=>'Academy Name'])!!}

			<!--{!!Form::label('phone','Phone No',['class'=>'pull-left'])!!}-->
			{!!Form::text('phone',null,['placeholder'=>'Phone no.'])!!}

			<!--{!!Form::label('email','Email',['class'=>'pull-left'])!!}-->
			{!!Form::text('email',null,['placeholder'=>'Email'])!!}

			<!--{!!Form::label('description','Description',['class'=>'pull-left'])!!}-->
			{!!Form::text('description',null,['placeholder'=>'Description'])!!}

			<!--{!!Form::label('longitude','Longitude',['class'=>'pull-left'])!!}-->
			{!!Form::text('longitude',null,['placeholder'=>'Longitude'])!!}
			
			<!--{!!Form::label('latitude','Latitude',['class'=>'pull-left'])!!}-->
			{!!Form::text('latitude',null,['placeholder'=>'Latitude'])!!}<br>
			
			{!!Form::submit('Add')!!}

			{!!Form::close()!!}
		</div>
		<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
			
		</div>
		
	</div>

@stop