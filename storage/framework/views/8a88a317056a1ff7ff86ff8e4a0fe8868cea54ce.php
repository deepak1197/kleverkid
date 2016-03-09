<?php $__env->startSection('content'); ?>
	<?php foreach($cards as $card): ?>
		<?php echo e($card->title); ?>

	<?php endforeach; ?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>