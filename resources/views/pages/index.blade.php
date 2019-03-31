@extends('layouts.app')

@section('content')
    <div class="jumbotron text-center">
        <h1 class="jumbotron-heading">Welcome to Laravel!</h1>
        <p class="lead text-muted">This is my Laravel Application.</p>
        <p>
        <a href="/login" class="btn btn-primary my-2">Login</a>
        <a href="/register" class="btn btn-secondary my-2">Register</a>
        </p>
    </div>
@endsection

