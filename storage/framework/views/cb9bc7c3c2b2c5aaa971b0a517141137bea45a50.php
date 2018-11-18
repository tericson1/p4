<?php $__env->startPush('head'); ?>
    <link href='/css/p4.css' rel='stylesheet'>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<h2> testing </h2>
<p2> echo $resu
  lt </p>
<p>Starting Balance: $<?php echo e($result ['amount']); ?></p>



</div>
</div>






<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>