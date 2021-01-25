@extends('layouts.app')

@section('content')
    <h1>{{ $post->title }}</h1>
    <div class="mt-3 mb-1">
        {!! $post->body !!}
    </div>
    <hr>
    <small>Written on {{ $post->created_at }} by {{ $post->user->name }}</small>
    <br>
    @if(Auth::user() == $post->user)
        <div class="row ml-1">
            <a href="/posts" class="btn btn-outline-secondary btn-sm mt-1">Go Back</a> 
            <a href="/posts/{{ $post->id }}/edit" class="btn btn-outline-success btn-sm mt-1 ml-2">Edit</a>
            {!! Form::open(['action' => ['App\Http\Controllers\PostsController@destroy', $post->id], 'method' => 'POST', 'class' => 'ml-auto']) !!}
                {{ Form::hidden('_method', 'DELETE') }}
                {{ Form::submit('Delete', ['class' => 'btn btn-outline-danger btn-sm mt-1 pull-right']) }}
            {!! Form::close() !!}
        </div>
    @endif
@endsection