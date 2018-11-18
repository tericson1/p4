@extends('layouts.master')

@push('head')
    <link href='/css/book/show.css' rel='stylesheet'>
@endpush

@section('title')
    {{ $book->title }}
@endsection

@section('content')

    <h2>{{ $book['title'] }} has been succesfully deleted</h2>


@endsection
