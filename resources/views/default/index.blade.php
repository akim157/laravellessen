@extends('default.layouts.layout')

@section('navbar')
    @parent
@endsection

@section('header')
    @parent
@endsection

@section('sidebar')
    @parent
    <div>
        <h2>БЛОК</h2>
    </div>
@endsection

@section('content')
    @include('default.content')
@endsection