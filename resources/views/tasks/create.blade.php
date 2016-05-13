@extends('layouts.master')

@section('head')
<link rel="stylesheet" href="/css/tasks.css">
@stop

@section('content')
<div class="row">
    <div class="small-10 small-centered medium-8 columns">
        <p>Add a new task to your list.</p>

        <form method="POST" action="/task/create">
            {!! csrf_field() !!}

            <label for="task">
                <input type="text" name="task" placeholder="What needs to be done?">
            </label>

            <button type="submit" class="button">Submit</button>
        </form>

    </div>
</div>
@stop
