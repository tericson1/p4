<!DOCTYPE html>
<html>
<head>
	<title>
        				Bill Calculator
    </title>

	<meta charset='utf-8'>


<link href="/css/p3.css" type='text/css' rel='stylesheet'>


    <link href='/css/p4.css' rel='stylesheet'>


</head>
<body>

	<header>
		 <h1> Money Forecasting Tool </h1>

	</header>

	<section>
		<h2> Today's Balance </h2>
		<form method='POST' action='/balval'>
			<?php echo e(csrf_field()); ?>

			<div>
				<br>
				<label for="amount">Today's Balance <strong>REQUIRED</strong></label>

				<input type="text" id="amount" name="amount" >
			</div>
			<br>
			<div>
				<label for="date">Today's Date <strong>REQUIRED</strong> </label>

				<input type="text" id="date" name="date" value ='2017-12-10'>
			</div>
			<br>
			<input type = 'submit' class = 'btn btn-primary btn-small' value = 'Post'>
			<br>
			<br>
		</form>

	<h2>Starting Balance: $<?php echo e($result['amount']); ?>  </h2>
<h2>As of Date: <?php echo e($result['date']); ?>  </h2>
<?php if(count($errors) > 0): ?>
		<ul>
				<?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<li><?php echo e($error); ?></li>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</ul>
<?php endif; ?>

		<div class="row">
		  <div class="column" >

    <h2> Bills </h2>
    <form method='POST' action='/bills'>
                  <?php echo e(csrf_field()); ?>

      <div>
        <br>
        <label for="amount">Bll Total Amount <strong>REQUIRED</strong> </label>
        <input type="text" id="amount" name="amount">
      </div>
      <br>
      <div>
        <label for="source">Source <strong>REQUIRED</strong> </label>
        <input type="text" id="source" name="source">
      </div>
      <br>
      <div>
        <label for="due">Date Due <strong>REQUIRED</strong> Format:YYYY-MM-DD </label>
        <input type="text" id="due" name="due">
      </div>
      <br>

      <div>
        <label for="paid">Paid **Enter 0 for NO, 1 for YES**</label>
        <input type="text" id="paid" name="paid"  />
      </div>
      <br>
      <input type = 'submit' class = 'btn btn-primary btn-small' value = 'Enter'>
<br>
<br>
    </form>

    <h2> Incomes </h2>

    <form method='POST' action='/incomes'>
			<?php echo e(csrf_field()); ?>

      <br>
      <div>
        <label for="amount">Amount <strong>REQUIRED</strong> </label>
        <input type="text" id="amount" name="amount">
      </div>
      <br>
      <div>
        <label for="source">Income Source <strong>REQUIRED</strong> </label>
        <input type="text" id="source" name="source">
      </div>
      <br>
      <div>
        <label for="daterecieved">Date Received (could be future) <strong>REQUIRED</strong> </label>
        <input type="text" id="daterecieved" name="daterecieved">
      </div>
      <br>
        <br>

      <input type = 'submit' class = 'btn btn-primary btn-small' value = 'Enter'>
<br>
  <br>
    </form>
    <br>
      <br>

  </div>
	<div>

	</div>

	<br>


  <div class="column" >


    <h2>Unpaid Bills Listing </h2>
    <br>

		<?php $__currentLoopData = $result2s; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result2): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


		          <p>Source: <?php echo e($result2['source']); ?>|Amount: <?php echo e($result2['amount']); ?> | Date Due: <?php echo e($result2['due']); ?> |

							</p>

		  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
			  <h2>Total Unpaid Bills: $<?php echo e($result2s->sum('amount')); ?> </h2>



    <h2>Planned Income</h2>
    <br>
 <?php $__currentLoopData = $result3s; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $result3): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>


<p>Source: <?php echo e($result3['source']); ?>|Amount: <?php echo e($result3['amount']); ?> | Planned Recieval Date: <?php echo e($result3['daterecieved']); ?></p>
	<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<h2>Total Expected Income: $<?php echo e($result3s->sum('amount')); ?> </h2>

    <br>
    <br>
    <h2>Amount of Free Spendable Cash: $<?php echo e($resulttotals); ?>  </h2>


  </div>
</div>


	</section>

	<footer>
		<h2><a href='/'>Balances</a></h2>
			<h2><a href='/past'>Edit Entries</a> </h2>
	</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

</body>
</html>
