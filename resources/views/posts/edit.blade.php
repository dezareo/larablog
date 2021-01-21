@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    {!! Form::open(['action' => ['App\Http\Controllers\PostsController@update', $post->id], 'method' => 'POST']) !!}
       <div class="form-group">
           {{ Form::label('title', 'Title') }}
           {{ Form::text('title', $post->title, ['class' => 'form-control', 'placeholder' => 'Title']) }}
       </div>
       <div class="form-group">
        {{ Form::label('body'), 'Body' }}
        {{ Form::textarea('body', $post->body, ['class' => 'description', 'placeholder' => 'Body Text']) }}
      </div>
      {{ Form::hidden('_method', 'PUT') }}
       {{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
    {!! Form::close() !!}

    <script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script>
		<script>
		    tinymce.init({
		        selector:'textarea.description',
		        width: 900,
		        height: 300
		    });
		</script>

      

@endsection

