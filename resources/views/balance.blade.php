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
			{{ csrf_field() }}
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

	<h2>Starting Balance: ${{$result['amount'] }}  </h2>
<h2>As of Date: {{$result['date'] }}  </h2>
@if(count($errors) > 0)
		<ul>
				@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
				@endforeach
		</ul>
@endif

		<div class="row">
		  <div class="column" >

    <h2> Bills </h2>
    <form method='POST' action='/bills'>
                  {{ csrf_field() }}
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
			{{ csrf_field() }}
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

		@foreach($result2s as $result2)


		          <p>Source: {{ $result2['source'] }}|Amount: {{ $result2['amount'] }} | Date Due: {{ $result2['due'] }} |

							</p>

		  @endforeach
			  <h2>Total Unpaid Bills: ${{  $result2s->sum('amount')  }} </h2>



    <h2>Planned Income</h2>
    <br>
 @foreach($result3s as $result3)


<p>Source: {{ $result3['source'] }}|Amount: {{ $result3['amount'] }} | Planned Recieval Date: {{ $result3['daterecieved'] }}</p>
	@endforeach
<h2>Total Expected Income: ${{  $result3s->sum('amount')  }} </h2>

    <br>
    <br>
    <h2>Amount of Free Spendable Cash: ${{  $resulttotals }}  </h2>


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
