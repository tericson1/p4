
@extends('layouts.master')

@push('head')
<link href='/css/p4.css' rel='stylesheet'>
@endpush

@section('content')

<h2> Update Balance Bill #{{ $bill['id'] }} </h2>

<form method='POST' action='/{{$bill->id}}'>
  {{ method_field('put') }}

  {{ csrf_field() }}


  <div>
    <br>
    <label for="amount">Bll Total Amount <strong>REQUIRED</strong> </label>
    <input type="text" id="amount" name="amount" value = '{{old ('amount', $bill ->amount)}}'>
  </div>
  <br>
  <div>
    <label for="source">Source <strong>REQUIRED</strong> </label>
    <input type="text" id="source" name="source" value = '{{old ('source', $bill ->source)}}'>
  </div>
  <br>
  <div>
    <label for="due">Date Due <strong>REQUIRED</strong> </label>
    <input type="text" id="due" name="due" value = '{{old ('due', $bill ->due)}}'>
  </div>
  <br>
  <div>
    <label for="paid">Paid</label>
    <input type="text" id="paid" name="paid" value = '{{old ('paid', $bill ->paid)}}'>
  </div>
  <br>
  <br><label for="categogories">Categories</label>
  @foreach ($categoriesForCheckboxes as $id => $name)
  <input
  id ='categorie'
  type='checkbox'
  value='{{ $id }}'
  name='categories[]'
  {{ (isset($categoriesForThisBill) and in_array($name, $categoriesForThisBill)) ? 'CHECKED' : '' }}
  >
  {{ $name }} <br>
  @endforeach
  <br>
  <input type = 'submit' class = 'btn btn-primary btn-small' value = 'Enter'>
  <br>
  <br>

</form>


<h2><a href='/{{ $bill['id'] }}/delete'>Delete</a></h2>

</div>
</div>






@endsection
