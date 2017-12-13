@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>
                <div class="panel-body">
                    <h3>Welcome</h3>
                    <h4>Choose Your Pick</h4>
                    <ul>
                        <li><a href="{{ route('post.index') }}">View All Posts</a></li>
                        <li><a href="{{ route('post.create') }}">Create New Post</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
