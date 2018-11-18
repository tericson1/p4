<?php $__env->startPush('head'); ?>
<link href='/css/p4.css' rel='stylesheet'>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<h2>Delete Bill #<?php echo e($bill['id']); ?>? </h2>



<form method='POST' action='/<?php echo e($bill->id); ?>'>
  <input type="submit" name="_method" value="delete" class='btn btn-primary btn-small' />
  <?php echo e(method_field('delete')); ?>

  <?php echo csrf_field(); ?>

</form>

<h2><a href='/<?php echo e($bill['id']); ?>/update'> No! Take me Back</a> </h2>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>