@extends('layouts.master')

@push('head')
    <link href='/css/book/index.css' rel='stylesheet'>
    <link href='/css/book/_book.css' rel='stylesheet'>
@endpush

@section('title')
    All books
@endsection

@section('content')

    <h1>Balances</h1>


    @foreach($balances as $balance)


            <h2>{{ $balance['amount'] }}</h2>
        


    @endforeach

@endsection
