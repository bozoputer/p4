@extends('layouts.master')

@section('head')
<link rel="stylesheet" href="/css/tasks.css">
@stop

@section('content')


@foreach($tasks as $task)

<a href="/task/edit/{!! $task->id !!}" class="task">{!! $task->task !!}</a><br>
@endforeach

@stop
