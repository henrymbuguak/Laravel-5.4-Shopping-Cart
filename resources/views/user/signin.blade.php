@extends('layouts.master')

@section('title')
    User Login
@endsection

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h1>Login in</h1>
            @if(count($errors) > 0)
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                </div>
            @endif
            <form action="{{ route('user.signin') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="email">E-mail: </label>
                    <input type="text" id="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password: </label>
                    <input type="password" id="password" name="password" class="form-control">
                </div>
                <button class="btn btn-primary">Login</button>
            </form>
            <p>Don't have an account yet? <a href="{{ route('user.signup') }}"> Sign up</a></p>
        </div>
    </div>
@endsection
