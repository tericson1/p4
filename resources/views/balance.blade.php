
@extends('layouts.master')

@push('head')
    <link href='/css/p4.css' rel='stylesheet'>

@endpush

@section('content')
@php ($test = 'test')


<div class="row">
  <div class="column" >
<h2> Today's Balance </h2>
<form method='GET' action='/balval'>
    {{ csrf_field() }}
  <div>
    <br>
      <label for="amount">Today's Balance <strong>REQUIRED</strong></label>

      <input type="text" id="amount" name="amount" >
  </div>
<br>
  <div>
      <label for="date">Today's Date <strong>REQUIRED</strong> </label>

      <input type="text" id="date" name="date" value="<?php echo date("M j, Y "); ?>" >
      <?php
      echo "Today's date is " . date("m/d/Y") . "<br>";
      ?>
</div>
<br>
  <input type = 'submit' class = 'btn btn-primary btn-small' value = 'Post'>

</form>

<h2> Bills </h2>
<form method='GET' action='/bills'>
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
    <label for="due">Date Due <strong>REQUIRED</strong> </label>
    <input type="text" id="due" name="due">
</div>
<br>
  <div>
      <label for="paid">Paid</label>
      <input type="checkbox" id="paid" name="paid" value="No" />
  </div>
  <br>
  <input type = 'submit' class = 'btn btn-primary btn-small' value = 'Enter'>
</form>

<h2> Incomes </h2>
<form method='GET' action='/nums'>
  <br>
    {{ csrf_field() }}
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
  <input type = 'submit' class = 'btn btn-primary btn-small' value = 'Enter'>

</form>
</div>

<div class="column" >

  <div>
<p> {{ old('$amount')}} </p>
  </div>
  @if(count($errors) > 0)
      <ul>
          @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
          @endforeach
      </ul>
  @endif
<h2>Starting Balance </h2>
<br>
<p>X</p> <p>To Edit - Update Balance </p>
<br>
<br>
<br>
<h2>Current Bills Listing </h2>
<br>
<p>Entry</p> <p>Edit </p><p>Delete </p><p>Mark Paid </p>
<br>
<br>
<h2>Planned Income</h2>
<br>
<p>Entry</p> <p>Edit </p><p>Delete </p>
<br>
<br>
<h1>Actual Amount of $'s Today </h1>
<h2> Projected Weekly, Monthly, Quarterly</h2>
</div>
</div>







@endsection
