@extends('layouts.app')

@section('content')
<div class="jumbotron text-center">
    <h1>{{ $title }}</h1>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ea veritatis delectus sit ratione quia animi eveniet velit corrupti omnis possimus!</p>
    <p><a href="/login" class="btn btn-primary btn-lg" role="button">Login</a> <a class="btn btn-success btn-lg" href="/register" role="button">Register</a></p>
</div>
@endsection