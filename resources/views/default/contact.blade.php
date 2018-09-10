@extends('default.layouts.layout')

@section('content')
    <div class="col-md-9">

        {{--{{ S }}--}}
        <div class="">
            <h2>Conact us!</h2>
        </div>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid consectetur culpa ea maxime minus molestiae numquam odit, sequi tempore temporibus ut voluptas voluptate, voluptatem! Atque consectetur dolore nulla repellendus sit.</p>
        {{ dump($errors) }}
        @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form method="post" action="{{ route('contact') }}">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="exampleInputName">Name</label>
                <input type="text" class="form-control" id="exampleInputName" placeholder="Name" name="name" value="{{ old('name') }}">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email" value="{{ old('email') }}">
            </div>
            <div class="form-group">
                <label for="exampleInputSite">Site</label>
                <input type="text" class="form-control" id="exampleInputSite" placeholder="Site" name="site" value="{{ old('site') }}">
            </div>
            <div class="form-group">
                <label for="exampleInputText">Text</label>
                <textarea name="text" id="text" cols="30" rows="10">{{ old('text') }}</textarea>
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
    </div>
@endsection