<?php $__env->startPush('head'); ?>
<link href='/css/p4.css' rel='stylesheet'>
<?php $__env->stopPush(); ?>

<?php $__env->startSection('content'); ?>

<h2> Update Balance Bill #<?php echo e($bill['id']); ?> </h2>

<form method='POST' action='/<?php echo e($bill->id); ?>'>
  <?php echo e(method_field('put')); ?>


  <?php echo e(csrf_field()); ?>



  <div>
    <br>
    <label for="amount">Bll Total Amount <strong>REQUIRED</strong> </label>
    <input type="text" id="amount" name="amount" value = '<?php echo e(old ('amount', $bill ->amount)); ?>'>
  </div>
  <br>
  <div>
    <label for="source">Source <strong>REQUIRED</strong> </label>
    <input type="text" id="source" name="source" value = '<?php echo e(old ('source', $bill ->source)); ?>'>
  </div>
  <br>
  <div>
    <label for="due">Date Due <strong>REQUIRED</strong> </label>
    <input type="text" id="due" name="due" value = '<?php echo e(old ('due', $bill ->due)); ?>'>
  </div>
  <br>
  <div>
    <label for="paid">Paid</label>
    <input type="text" id="paid" name="paid" value = '<?php echo e(old ('paid', $bill ->paid)); ?>'>
  </div>
  <br>
  <br><label for="categogories">Categories</label>
  <?php $__currentLoopData = $categoriesForCheckboxes; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $name): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
  <input
  id ='categorie'
  type='checkbox'
  value='<?php echo e($id); ?>'
  name='categories[]'
  <?php echo e((isset($categoriesForThisBill) and in_array($name, $categoriesForThisBill)) ? 'CHECKED' : ''); ?>

  >
  <?php echo e($name); ?> <br>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
  <br>
  <input type = 'submit' class = 'btn btn-primary btn-small' value = 'Enter'>
  <br>
  <br>

</form>


<h2><a href='/<?php echo e($bill['id']); ?>/delete'>Delete</a></h2>

</div>
</div>






<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>