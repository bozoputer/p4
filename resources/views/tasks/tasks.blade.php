@extends('layouts.master')

@section('head')
<link rel="stylesheet" href="/css/tasks.css">
@stop

@section('content')


<div class="row">
    <div class="small-10 small-centered medium-8 columns">


            @if (count($tasks) === 0)
                <p>Yay, nothing to do! Go grab a drink!</p>
            @else
                <p>Open Tasks
                <span class="small">(click task name to edit)</span></p>


        <table border="0">
            @foreach($tasks as $task)
            <tr>
                <td>
                    <a href="/task/edit/{!! $task->id !!}">{!! $task->task !!}</a>
                </td>
                <td><a href="/task/complete/{!! $task->id !!}"><img src="img/complete.png" alt="Mark complete" title="Mark task complete"></td>
                <td><a href="#"><img src="img/delete.png" alt="Delete" title="Delete task"></a></td>
            </tr>
            @endforeach
        </table>
        @endif
    </div>
</div>

<div class="row">
    <div class="small-10 small-centered medium-8 columns">
        <p>Completed Tasks</p>
        <table border="0">
            @foreach($complete as $complete)
            <tr>
                <td class="strike">
                    {!! $complete->task !!}
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

@stop
