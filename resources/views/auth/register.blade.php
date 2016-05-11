@extends('layouts.master')

@section('head')
    @include('layouts.background')
@stop

@section('content')

@include('layouts.header')

<div class="row">
    <div class="medium-6 columns">
        <p>Sign up for an account below or <a href=/login>log in</a> if you're already registered.</p>
    </div>
</div>

<form>
    <div class="row">
        <div class="medium-6 columns">
            <label>Email
                <input type="text" placeholder="Enter your email">
            </label>
            <label>Password<sup>*</sup>
                <input type="password" aria-describedby="passwordHelpText" placeholder="Password">
            </label>

            <label>Confirm password
                <input type="password" aria-describedby="passwordHelpText">
            </label>

            <p class="help-text" id="passwordHelpText"><sup>*</sup>Password length must be at least 8 characters.</p>

            <button type="submit" class="button">Submit</button>
        </div>
    </div>
</form>
@stop
