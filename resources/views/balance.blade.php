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
		<h1> Today's Balance </h1>
		<form method='POST' action='/balval'>
			{{ method_field('put') }}
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

	<h1>Starting Balance: ${{$result['amount'] }}  </h1>
<h1>As of Date: {{$result['date'] }}  </h1>
		<div class="row">
		  <div class="column" >

    <h2> Bills </h2>
    <form method='POST' action='/bills'>
      {{ method_field('put') }}
                  {{ csrf_field() }}
      <!-- <input type="hidden" name="_token" value="eqdTekJ3I57EgxjnxTyI8YK1UX3G79YeixDD3b4g"> -->
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
        <label for="due">Date Due <strong>REQUIRED</strong> </label>
        <input type="text" id="due" name="due">
      </div>
      <br>
      <div>
        <label for="paid">Paid</label>
        <input type="text" id="paid" name="paid"  />
      </div>
      <br>
      <input type = 'submit' class = 'btn btn-primary btn-small' value = 'Enter'>
<br>
<br>
    </form>

    <h2> Incomes </h2>
    <form method='POST' action='/incomes'>
      <br>
      <input type="hidden" name="_token" value="eqdTekJ3I57EgxjnxTyI8YK1UX3G79YeixDD3b4g">
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
<p>
		@foreach($result2s as $result2)


		          <p>Source: {{ $result2['source'] }}|Amount: {{ $result2['amount'] }} | Date Due: {{ $result2['due'] }} | <a href='/update'>Mark Paid</a></p>

		  @endforeach

</p>

    <br>
    <h2>Planned Income</h2>
    <br>
<p> @foreach($result3s as $result3)


<p>Source: {{ $result3['source'] }}|Amount: {{ $result3['amount'] }} | Planned Recieval Date: {{ $result3['daterecieved'] }}</p>
	@endforeach

</p>
    <br>
    <br>
    <h1>Actual Amount of $'s Today </h1>
    <h2> Projected Weekly, Monthly, Quarterly</h2>
  </div>
</div>







	</section>

	<footer>
		<h2><a href='/'>Balances</h2>
			<h2><a href='/past'>Edit Entries </h2>
	</footer>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>

</body>
</html>
