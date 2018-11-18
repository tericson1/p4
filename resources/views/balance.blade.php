<!DOCTYPE html>
<html>
<head>
	<title>
Tubby Lardy Calc </title>

	<meta charset='utf-8'>


<link href="/css/p3.css" type='text/css' rel='stylesheet'>


    <link href='/css/p4.css' rel='stylesheet'>


</head>
<body>

	<header>
		 <h1> Day 1 Tummy </h1>
<h2> Assumes 18 Hour Day</h2>
	</header>

	<section>
		<h2> Calorie Max </h2>
		<form method='POST' action='/balval'>
			{{ csrf_field() }}
			<div>
				<br>
				<label for="amount">Today's Calorie Goal Max<strong>REQUIRED</strong></label>

				<input type="text" id="amount" name="amount" >
			</div>
			<div>
				<br>
				<label for="hourday">Current Hour of the day <strong>REQUIRED</strong></label>

				<input type="text" id="hourday" name="hourday" >
			</div>
			<br>
			<!-- <div>
				<label for="date">Today's Date <strong>REQUIRED</strong> </label>

				<input type="text" id="date" name="date" value ='2017-12-10'>
			</div> -->
			<br>
			<input type = 'submit' class = 'btn btn-primary btn-small' value = 'Post'>
			<br>
			<br>
		</form>

	<h2>Stay Under: {{$result['amount'] }} Calories </h2>
<!-- <h2>As of Date: {{$result['date'] }}  </h2> -->
@if(count($errors) > 0)
		<ul>
				@foreach ($errors->all() as $error)
						<li>{{ $error }}</li>
				@endforeach
		</ul>
@endif

		<div class="row">
		  <div class="column" >

    <h2> Add Calories </h2>
    <form method='POST' action='/bills'>
                  {{ csrf_field() }}
      <div>
        <br>
        <label for="amount">Calorie Amount <strong>REQUIRED</strong> </label>
        <input type="text" id="amount" name="amount">
      </div>
      <br>
      <div>
        <label for="source">Food <strong>REQUIRED</strong> </label>
        <input type="text" id="source" name="source">
      </div>
      <br>
			<div>
				<br>
				<label for="houreaten">Hour Eaten <strong>REQUIRED</strong></label>

				<input type="text" id="houreaten" name="houreaten" >
			</div>
      <!-- <div>
        <label for="due"> Time Eaten? Date Due <strong>REQUIRED</strong> Format:YYYY-MM-DD </label>
        <input type="text" id="due" name="due">
      </div> -->
      <br>

    <!-- <div>
        <label for="paid">Paid **Enter 0 for NO, 1 for YES**</label>
        <input type="text" id="paid" name="paid"  />
      </div> -->
      <br>
      <input type = 'submit' class = 'btn btn-primary btn-small' value = 'Enter'>
<br>
<br>
    </form>

    <h2> Exercise </h2>

    <form method='POST' action='/incomes'>
			{{ csrf_field() }}
      <br>
      <div>
        <label for="amount">Calories Burned <strong>REQUIRED</strong> </label>
        <input type="text" id="amount" name="amount">
      </div>
      <br>
      <div>
        <label for="source">Exercise Type <strong>REQUIRED</strong> </label>
        <input type="text" id="source" name="source">
      </div>
      <br>

			<div>
				<br>
				<label for="hourexercise">Hour Eaten <strong>REQUIRED</strong></label>

				<input type="text" id="hourexercised" name="hourexercise" >
			</div>

      <!-- <div>
        <label for="daterecieved">Time? Date Received (could be future) <strong>REQUIRED</strong> </label>
        <input type="text" id="daterecieved" name="daterecieved">
      </div> -->
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


    <h2>Total Calories </h2>
    <br>

		@foreach($result2s as $result2)


		          <p>Source: {{ $result2['source'] }}|Amount: {{ $result2['amount'] }} | Date Due: {{ $result2['due'] }} |

							</p>

		  @endforeach
			  <h2>Total Calories In: {{  $result2s->sum('amount')  }} </h2>



    <h2>Exercies</h2>
    <br>
 @foreach($result3s as $result3)


<p>Source: {{ $result3['source'] }}|Amount: {{ $result3['amount'] }} | Planned Recieval Date: {{ $result3['daterecieved'] }}</p>
	@endforeach
<h2>Total Calories Out: {{  $result3s->sum('amount')  }} </h2>

    <br>
    <br>
<h2>Calories Remaining for Day: {{  $resulttotals }}  </h2>
<h2>Over/Underage for Hour of Day(In red or in green):   </h2>
<h2>0 out at X Time  </h2>
<h2> insert visual of stomach </h2>
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
