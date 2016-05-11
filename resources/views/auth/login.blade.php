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

<form>
    <div class="row">
        <div class="medium-6 columns">
            <label>Email
                <input type="text" placeholder="Enter your email">
            </label>
            <label>Password
                <input type="password" aria-describedby="passwordHelpText" placeholder="Password">
            </label>

            <button type="submit" class="button">Submit</button>
        </div>
    </div>
</form>
@stop
