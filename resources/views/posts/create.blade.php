@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New Post</div>
                    <div class="panel-body">
                        <form action="{{ route('post.store') }}" method="post" class="form-horizontal">
                            <div class="form-group">
                                <label for="title" class="col-sm-3 control-label">Title</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" placeholder="Enter Title Here" name="title">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="content" class="col-sm-3 control-label">Content</label>
                                <div class="col-sm-9">
                                    <textarea name="content" rows="4" class="form-control" placeholder="Enter Blog Content Here"></textarea>
                                </div>
                            </div>
                            <div class="form-group col-sm-6 col-sm-push-3">
                                <button class="btn btn-primary" type="submit">Submit</button>
                                <button class="btn btn-default" type="reset">Reset</button>
                            </div>
                            <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
