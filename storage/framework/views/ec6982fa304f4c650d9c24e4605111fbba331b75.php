<!DOCTYPE html>
<html>
<head>
	<title>
        <?php echo $__env->yieldContent( 'Bill Calculator Tool'); ?>
				Bill Calculator
    </title>

	<meta charset='utf-8'>


<link href="/css/p4.css" type='text/css' rel='stylesheet'>


    <?php echo $__env->yieldPushContent('head'); ?>

</head>
<body>

    <?php if(session('alert')): ?>
        <div class='alert'>
            <?php echo e(session('alert')); ?>

        </div>
    <?php endif; ?>

	<header>
		 <h1> Money Forecasting Tool </h1>

	</header>

	<section>
		<?php echo $__env->yieldContent('content'); ?>
	</section>

	<footer>
		<h2><a href='/'>Balances</h2>
			<h2><a href='/past'>Past Data </h2>
	</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <?php echo $__env->yieldPushContent('body'); ?>

</body>
</html>
