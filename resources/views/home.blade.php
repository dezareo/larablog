@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }} | {{ __('You are logged in!') }}</div>

                <div class="card-body">
                    <a href="/posts/create" class="btn btn-primary mt-2 mb-3">Create Post</a>
                    <h3>Your Blog Posts</h3>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
