@extends('layouts.master')

@section('content')
    <div class="col-md-8">
        <h1>Sign In</h1>

        <form method="POST" action="/login">
            {{ csrf_field()}}

            <div class="form-group">
                <label name="email">Email Address:</label>
                <input class="form-control" type="email" id="email" name="email" required></input>
            </div>

            <div class="form-group">
                <label name="password">Password:</label>
                <input class="form-control" type="password" id="password" name="password" required></input>
            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit">Sign In</button>
            </div>

            @include('layouts.errors')
        </form>
    </div>
@endsection