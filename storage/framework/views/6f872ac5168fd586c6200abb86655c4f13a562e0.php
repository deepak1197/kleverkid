<?php $__env->startSection('title'); ?>
Create a product
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
	<?php echo Form::open(['route'=>'product.store']); ?>

	
	<?php echo Form::label('name','Name'); ?>

	<?php echo Form::text('name'); ?>


	<?php echo Form::label('price','Price'); ?>

	<?php echo Form::text('price'); ?>


	<?php echo Form::submit('Create'); ?>


	<?php echo Form::close(); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>