@extends('layouts.master')

@section('head')

    <link rel="stylesheet" href="css/welcome.css">

    @include('layouts.background')
@stop

@section('content')

@include('layouts.header')

@if (count($errors) > 0)
    @include('layouts.errors')
@endif

<div class="row">
    <div class="medium-6 columns">
        <p>Sign up for an account below or <a href=/login>log in</a> if you're already registered.</p>

        <form method="POST" action="/register">
            {!! csrf_field() !!}

            <label for="name">Name
                <input type="text" name="name" value="{{ old ('name')}}" placeholder="Enter your name">
            </label>
            <label for="email">Email
                <input type="text" name="email" value="{{ old('email')}}" placeholder="Enter your email">
            </label>
            <label for="password">Password<sup>*</sup>
                <input type="password" name="password" aria-describedby="passwordHelpText" placeholder="Password">
            </label>

            <label for="password_confirmation">Confirm password
                <input type="password" name="password_confirmation" aria-describedby="passwordHelpText">
            </label>

            <p class="help-text" id="passwordHelpText"><sup>*</sup>Password length must be at least 6 characters.</p>

            <button type="submit" class="button">Register</button>
        </form>
    </div>
</div>

@stop
