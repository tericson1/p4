
@extends('layouts.master')

@push('head')
    <link href='/css/p4.css' rel='stylesheet'>
@endpush

@section('content')

 <div class="row">
  <!-- <div class="column2" >
<h2>Past Checking Amounts</h2>

@foreach($balances as $balance)


          <p>{{ $balance['amount'] }}</p>
<p>{{ $balance['date'] }}</p>
<a href='/{{ $balance['id'] }}/edit'>Edit - update</a>
        <a href='/{{ $balance['id'] }}/delete'>Delete - update</a>

  @endforeach

<br>
<br>

</div> -->
<div class="column2">
<h2>Edit Bills</h2>
<br>
<br>
@foreach($bills as $bill)


          <p>Amount: {{ $bill['amount'] }} | Due: {{ $bill['due'] }} | Source: {{ $bill['source'] }} | Paid: {{ $bill['paid'] }}</p>

<!-- <p>{{ $balance['date'] }}</p>
<a href='/{{ $balance['id'] }}/edit'>Edit - update</a>
        <a href='/{{ $balance['id'] }}/delete'>Delete - update</a> -->
<a href='/{{ $bill['id'] }}/update'>Update</a>
<a href='/{{ $bill['id'] }}/delete'>Delete</a>
  @endforeach
<br>

</div>
<div class="column2">
<h2>Past Income</h2>
<br>
<br>
@foreach($incomes as $income)


          <p>Amount: {{ $income['amount'] }} | Date Recieved: {{ $income['daterecieved'] }} | Source: {{ $income['source'] }}</p>




  @endforeach
<br>
</div>
</div>





</div>
</div>






@endsection
