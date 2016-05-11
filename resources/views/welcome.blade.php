@extends('layouts.master')

@section('head')
    @include('layouts.background')
@stop

@section('content')

@include('layouts.header')

<div class="row">
    <div class="medium-6 columns">
        <p>Much To-Do is a task manager application that helps organize your tasks into an easily-managed to-do list.
            <br><br>
            <a href="/login">Log in</a> or <a href="register">register</a> to get started.
        </p>
    </div>
</div>
@stop
