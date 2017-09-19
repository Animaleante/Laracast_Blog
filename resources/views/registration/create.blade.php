@extends('layouts.master')

@section('content')
    <div class="col-md-8">
        <h1>Register</h1>

        <form method="POST" action="/register">
            {{ csrf_field() }}

            <div class="form-group">
                <label name="name">Name:</label>
                <input class="form-control" type="text" id="name" name="name" required></input>
            </div>

            <div class="form-group">
                <label name="email">Email:</label>
                <input class="form-control" type="email" id="email" name="email" required></input>
            </div>

            <div class="form-group">
                <label name="password">Password:</label>
                <input class="form-control" type="password" id="password" name="password" required></input>
            </div>

            <div class="form-group">
                <label name="password_confirmation">Password Confirmation:</label>
                <input class="form-control" type="password" id="password_confirmation" name="password_confirmation" required></input>
            </div>

            <div class="form-group">
                <button class="btn btn-primary" type="submit">Register</button>
            </div>

            @include('layouts.errors')
        </form>
    </div>
@endsection