<?php $__env->startSection('title'); ?>
Add your academy
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
	<div class="container">
		
		<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
			
		</div>
		<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
			<h4>Add Your Academy</h4>
			<?php echo Form::open(['route'=>'academy.store','class'=>'form','role'=>'form']); ?>

		
			<!--<?php echo Form::label('username','Username',['class'=>'pull-left']); ?>-->
			<?php echo Form::text('username',null,['placeholder'=>'User Name']); ?>


			<!--<?php echo Form::label('academyname','Academy Name',['class'=>'pull-left']); ?>-->
			<?php echo Form::text('academyname',null,['placeholder'=>'Academy Name']); ?>


			<!--<?php echo Form::label('phone','Phone No',['class'=>'pull-left']); ?>-->
			<?php echo Form::text('phone',null,['placeholder'=>'Phone no.']); ?>


			<!--<?php echo Form::label('email','Email',['class'=>'pull-left']); ?>-->
			<?php echo Form::text('email',null,['placeholder'=>'Email']); ?>


			<!--<?php echo Form::label('description','Description',['class'=>'pull-left']); ?>-->
			<?php echo Form::text('description',null,['placeholder'=>'Description']); ?>


			<!--<?php echo Form::label('longitude','Longitude',['class'=>'pull-left']); ?>-->
			<?php echo Form::text('longitude',null,['placeholder'=>'Longitude']); ?>

			
			<!--<?php echo Form::label('latitude','Latitude',['class'=>'pull-left']); ?>-->
			<?php echo Form::text('latitude',null,['placeholder'=>'Latitude']); ?><br>
			
			<?php echo Form::submit('Add'); ?>


			<?php echo Form::close(); ?>

		</div>
		<div class="col-md-4 col-lg-4 col-sm-4 col-xs-4">
			
		</div>
		
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>