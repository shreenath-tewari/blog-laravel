@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">View All Posts</div>
                        <div class="panel-body">
                            @if ($message)
                                <div class="alert alert-success">
                                    <p>{{ $message }}</p>
                                </div>
                            @endif
                            <div class="container">
                                @forelse($posts as $post)
                                    <li>
                                        <a href="{{ route('post.show', ['id' => $post->id]) }}">{{ $post->title }}</a>
                                    </li>
                                @empty
                                    <h4>No Posts to Show</h4>
                                @endforelse
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
