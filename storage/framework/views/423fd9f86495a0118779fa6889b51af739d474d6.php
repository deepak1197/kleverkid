    <style>
      #map-canvas {
        width: 500px;
        height: 400px;
      }
    </style>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.1.js"></script>
<!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyB6K1CFUQRwVJ-nyXxd6W0rfiIBe12Q&libraries=places"></script>-->
<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7XUrdTNE5YJUyeC_b53cZepwd2jGuduo&libraries=places"></script>
<script type="text/javascript"></script>
<div class="container">
	<div class="col-sm-4">
		<h1>Add Acadmey</h1>
		<?php echo e(Form::open(array('url'=>'/vender/add','files'=>true))); ?>

		<div class="form-group">
			<label for="">Title</label>
			<input type="text" class="form-control input-sm" name="title">
		</div>

		<div class="form-group">
			<label for="">Map</label>
			<input type="text" id="searchmap">
			<div id="map-canvas"></div>
		</div>

		<div class="form-group">
			<label for="">Lat</label>
			<input type="text" class="form-control input-sm" name="lat" id="lat">
		</div>
		
		<div class="form-group">
			<label for="">Long</label>
			<input type="text" class="form-control input-sm" name="l ng" id="lng">
		</div>

		<button class="btn btn-sm btn-danger">submit</button>
		<?php echo e(Form::close()); ?> 
	</div>	
</div>
<script type="text/javascript">
	var map = new google.maps.Map(document.getElementById('map-canvas'),{
		center:{
			lat:27.72,
			lng:85.36
		},
		zoom:15
	});
	var marker = new google.maps.Marker({
		position:{
			lat:27.72,
			lng:85.36
		},
		map:map,
		draggable:true
	});
	var searchBox = new google.maps.places.SearchBox(document.getElementById('searchmap' ));

	google.maps.event.addListener(searchBox,'places_changed',function(){
		var places = searchBox.getPlaces ();
		var bounds = new google.maps.LatLngBounds();
		var i,place;

		for (var i = 0; place=places[i]; i++) {
			bounds.extend(place.geometry.location);
			marker.setPosition(place.geometry.location);
		};
		map.fitBounds(bounds);
		map.setZoom(15);
	});

	google.maps.event.addListener(marker,'position_changed',function(){
		
		var lat = marker.getPosition().lat();
		var lng = marker.getPosition().lng();
		
		$('#lat').val(lat);
		$('#lng').val(lng);
	});
</script>