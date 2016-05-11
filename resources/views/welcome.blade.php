@extends('layouts.master')

@section('head')
    @include('layouts.background')
@stop

@section('content')
<div class="row">
    <header class="medium-6 columns">
        <img src="img/clock.gif" alt="clock logo">
        <h1>Welcome to <span>Much To-Do</span></h1>
        <h4>The to-do app for super-busy people</h4>
    </header>
</div>

<div class="row">
    <div class="medium-6 columns">
        <p>Much To-Do is a task manager application that helps you organize your tasks into an easily-managed to-do list.
            <br><br>
            <a href="/login">Log in</a> or <a href="register">register</a> to get started.
        </p>
    </div>
</div>
@stop
