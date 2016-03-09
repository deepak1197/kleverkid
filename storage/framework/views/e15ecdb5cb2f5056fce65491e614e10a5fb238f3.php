    <style>
    </style>
<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<script type="text/javascript" src="https://code.jquery.com/jquery-2.2.1.js"></script>
<!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCyB6K1CFUQRwVJ-nyXxd6W0rfiIBe12Q&libraries=places"></script>-->
<!--<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB7XUrdTNE5YJUyeC_b53cZepwd2jGuduo&libraries=places"></script>-->
<script type="text/javascript"></script>
<div class="container">
	<div class="col-sm-4">
		<h1>Add Acadmey</h1>
		<?php echo e(Form::open(array('url' => 'academy/add'))); ?>

    			<div class="form-group">
			<label for="">Username</label>
			<input type="text" class="form-control input-sm" name="uname">
		</div>

		<div class="form-group">
			<label for="">Academy name</label>
			<input type="text" class="form-control input-sm" name="academy">
		</div>

		<div class="form-group">
			<label for="">Email</label>
			<input type="email" class="form-control input-sm" name="email">
		</div>
		
		<div class="form-group">
			<label for="">Phone</label>
			<input type="text" class="form-control input-sm" name="phone">
		</div>

		<div class="form-group">
			<label for="">latitude</label>
			<input type="number" class="form-control input-sm" name="lat">
		</div>
		
		<div class="form-group">
			<label for="">Longitude</label>
			<input type="number" class="form-control input-sm" name="long">
		</div>

		<button class="btn btn-sm btn-danger">submit</button>
		<?php echo e(Form::close()); ?>

	</div>	
</div>
<script type="text/javascript">

</script>