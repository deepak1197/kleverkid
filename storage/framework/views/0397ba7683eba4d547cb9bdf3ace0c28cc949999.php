;
<?php $__env->startSection('title'); ?>
	All products
<?php $__env->stopSection(); ?>

<?php $__env->startSection('body'); ?>
	<?php foreach($products as $product): ?>
		 <h1><?php echo e($product->name); ?></h1>
		 <h3><?php echo e($product->price); ?></h3>
	<?php endforeach; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>