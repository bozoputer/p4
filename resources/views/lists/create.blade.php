@extends('layouts.master')

@section('head')
<link rel="stylesheet" href="/css/tasks.css">
@stop

@section('content')

<div class="row">
    <div class="small-10 small-centered medium-8 columns">
        <p>Looks like you don't have a list yet!<br>
            Create one by typing a name in the field below.
        </p>

        <form method="POST" action="/list/create">
            {!! csrf_field() !!}

            <label for="list_name">
                <input type="text" name="list_name" placeholder="List Name">
            </label>

            <button type="submit" class="button">Submit</button>
        </form>

    </div>
</div>

@stop
