
@extends('layouts.master')

@push('head')
<link href='/css/p4.css' rel='stylesheet'>
@endpush

@section('content')

<h2>Delete Bill #{{ $bill['id'] }}? </h2>



<form method='POST' action='/{{ $bill->id }}'>
  <input type="submit" name="_method" value="delete" class='btn btn-primary btn-small' />
  {{ method_field('delete') }}
  {!! csrf_field() !!}
</form>

<h2><a href='/{{ $bill['id'] }}/update'> No! Take me Back</a> </h2>

@endsection
