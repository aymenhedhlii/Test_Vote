<?php $__env->startSection('content'); ?>


<?php if(\Session::has('error')): ?>
<div class="alert alert-danger">
<?php echo e(\Session::get('error')); ?>

</div>
<?php endif; ?>
<?php echo e(Cookie::get('name')); ?>

             
 
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.defaults', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>