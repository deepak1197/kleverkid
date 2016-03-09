@extends('layout.layout')
@section('title')
	All Academys
@stop

@section('body')
	<div class="container">
		<div class="col-md-2 col-lg-2 col-sm-2col-xs-2">
			
		</div>
		<div class="col-md6 col-lg6 col-sm-6 col-xs6">
			<h4>Showing All Academys</h4>
			<div id="map"></div>
		</div>
		<div class="col-md-2 col-lg-2 col-sm-42col-xs-2">
			
		</div>
		
	</div>
	

	<script type="text/javascript">
		var map = new google.maps.Map(document.getElementById('map'),{
			center:{
				lat:28.54,
				lng:77.21
			},
			zoom:15
		});


		var marker = new google.maps.Marker({
			position:{
				lat:28.54,
				lng:77.21
			},
			map:map
		})
	</script>
@stop