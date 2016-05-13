@extends('layouts.master')

@section('head')
<link rel="stylesheet" href="/css/tasks.css">
@stop

@if (count($errors) > 0)
    @include('layouts.errors')
@endif

@section('content')
<div class="row">
    <div class="small-10 small-centered medium-8 columns">
        <p>Add a new task to: "List Name"</p>

        <form method="POST" action="/tasks/edit/{!! $task->id !!}">
            {!! csrf_field() !!}

            <label for="task">
                <input type="text" name="task" value="{!! $task->task !!}">
            </label>

            <button type="submit" class="button">Submit</button>
        </form>

    </div>
</div>
@stop
