@extends('layouts.master')

@section('content')
    <div class="col-sm-8 blog-main">
        <h1>Publish a post</h1>
        <hr>
        <form method="POST" action="/posts">
            {{ csrf_field() }}
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" name="title" class="form-control" id="title" required>
            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <textarea id="body" name="body" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit">Publish</button>
            </div>

            @include('layouts.errors')
        </form>
    </div>
@endsection