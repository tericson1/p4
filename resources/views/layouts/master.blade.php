<!DOCTYPE html>
<html>
<head>
	<title>
        @yield( 'Bill Calculator Tool')
				Bill Calculator
    </title>

	<meta charset='utf-8'>


<link href="/css/p4.css" type='text/css' rel='stylesheet'>


    @stack('head')

</head>
<body>

    @if(session('alert'))
        <div class='alert'>
            {{ session('alert') }}
        </div>
    @endif

	<header>
		 <h1> Money Forecasting Tool </h1>

	</header>

	<section>
		@yield('content')
	</section>

	<footer>
		<h2><a href='/'>Balances</h2>
			<h2><a href='/past'>Past Data </h2>
	</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    @stack('body')

</body>
</html>
