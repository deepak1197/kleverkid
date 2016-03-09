<?php $__env->startSection('title'); ?>
	About 
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
	<h1>This is about page</h1>
	<p>Company is <?php echo e($name); ?></p>

	<p>Empoylees are</p>
	<?php foreach($users as $user): ?>
		<br><?php echo e($user); ?>

	<?php endforeach; ?>
<?php $__env->stopSection(); ?>
	

<?php echo $__env->make('layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>