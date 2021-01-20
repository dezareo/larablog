@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>
    <div class="mt-3 mb-1">
        {!! $post->body !!}
    </div>
    <hr>
    <small>Written on {{ $post->created_at }}</small>
    <br>
    <a href="/posts" class="btn btn-outline-secondary btn-sm mt-1">Go Back</a>
@endsection