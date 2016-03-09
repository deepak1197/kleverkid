<?php $__env->startSection('title'); ?>
	About 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
	<h1>This is Contact page</h1>
	<?php echo Form::text('price'); ?>

	<?php echo Form::text('price','$50',[
		'class'=>'Form-control',
		'placeholder'=>'Give a price'
	]); ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>