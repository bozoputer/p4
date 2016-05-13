@extends('layouts.master')

@section('head')
<link rel="stylesheet" href="/css/tasks.css">
@stop

@section('content')


@foreach($tasks as $task)

<p class="task">{!! $task->task !!}</p>
@endforeach

@stop
