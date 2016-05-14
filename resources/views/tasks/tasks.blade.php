@extends('layouts.master')

@section('head')
<link rel="stylesheet" href="/css/tasks.css">
@stop

@section('content')


<div class="row">
    <div class="small-10 small-centered medium-8 columns">


            @if (count($tasks) === 0)
                <p class="allDone">Yay, nothing to do! Go grab a drink!</p>
            @else
                <p class="open">Open Tasks</p>

        <table>
            <tr>
                <th>Task <span class="small">(click to edit)</span></th>
                <th>Created</th>
                <th>Complete</th>
                <th>Delete</th>
            </tr>
            @foreach($tasks as $task)
            <tr>
                <td>
                    <a href="/task/edit/{!! $task->id !!}">{!! $task->task !!}</a>
                </td>
                <td>
                    {!! $task->created_at !!}
                </td>

                <td><a href="/task/complete/{!! $task->id !!}"><img src="img/complete.png" alt="Mark complete" title="Mark task complete"></a></td>

                <td><a href="/task/delete/{!! $task->id !!}"><img src="img/delete.png" alt="Delete" title="Delete task"></a></td>
            </tr>
            @endforeach
        </table>
        @endif
    </div>
</div>

<div class="row">
    <div class="small-10 small-centered medium-8 columns">
        <p class="complete">Completed Tasks</p>
        <table>
            <tr>
                <th>Task</th>
                <th>Completion Date</th>
            </tr>
            @foreach($complete as $complete)
            <tr>
                <td class="strike">
                    {!! $complete->task !!}
                </td>
                <td>
                    {!! $complete->updated_at !!}
                </td>
            </tr>
            @endforeach
        </table>
    </div>
</div>

@stop
