<?php $__env->startPush('head'); ?>
<link href='/css/p4.css' rel='stylesheet'>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<div class="row">
  <!-- <div class="column2" >
  <h2>Past Checking Amounts</h2>

  <?php $__currentLoopData = $balances; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $balance): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


  <p><?php echo e($balance['amount']); ?></p>
  <p><?php echo e($balance['date']); ?></p>
  <a href='/<?php echo e($balance['id']); ?>/edit'>Edit - update</a>
  <a href='/<?php echo e($balance['id']); ?>/delete'>Delete - update</a>

  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

  <br>
  <br>

</div> -->
<div class="column2">
  <h2>Edit Bills</h2>
  <br>
  <br>
  <?php $__currentLoopData = $bills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


  <p>Amount: <?php echo e($bill['amount']); ?> | Due: <?php echo e($bill['due']); ?> | Source: <?php echo e($bill['source']); ?> | Paid: <?php echo e($bill['paid']); ?></p>

  <!-- <p><?php echo e($balance['date']); ?></p>
  <a href='/<?php echo e($balance['id']); ?>/edit'>Edit - update</a>
  <a href='/<?php echo e($balance['id']); ?>/delete'>Delete - update</a> -->
  <a href='/<?php echo e($bill['id']); ?>/update'>Update</a>
  <a href='/<?php echo e($bill['id']); ?>/delete'>Delete</a>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <br>

</div>
<div class="column2">
  <h2>Past Income</h2>
  <br>
  <br>
  <?php $__currentLoopData = $incomes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $income): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


  <p>Amount: <?php echo e($income['amount']); ?> | Date Recieved: <?php echo e($income['daterecieved']); ?> | Source: <?php echo e($income['source']); ?></p>




  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <br>
</div>
</div>





</div>
</div>






<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>