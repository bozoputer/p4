@extends('layouts.master')

@section('head')
<link rel="stylesheet" href="css/welcome.css">

@include('layouts.background')
@stop

@section('content')

@include('layouts.header')

<div class="row">
    <div class="medium-6 columns">
        <p>Sign in with your email and password or <a href=/register>register</a> to create a new account.</p>
    </div>
</div>

<form method="POST" action="/login">
    {!! csrf_field() !!}
    <div class="row">
        <div class="medium-6 columns">
            <label for="email">Email
                <input type="text" name="email" value="{{ old('email')}}" placeholder="Enter your email">
            </label>
            <label for="password">Password
                <input type="password" name="password" aria-describedby="passwordHelpText" placeholder="Password">
            </label>

            <label for="remember">Remember Me
                <input type="checkbox" name="remember">
            </label>

            <button type="submit" class="button">Submit</button>
        </div>
    </div>
</form>
@stop
