@extends('default.layouts.layout')

@section('header')

@endsection

@section('sidebar')

@endsection

@section('content')
    <div class="jumbotron">
        <div class="blog-post-title">{{ $name }}</div>
        {!! $text !!}
    </div>
@endsection