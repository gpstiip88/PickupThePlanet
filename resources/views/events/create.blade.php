@extends('layouts.master')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Add New Event
            <div class="panel-nav pull-right" style="margin-top: -7px;">
                <a href="{!! route('events.index') !!}" class="btn btn-default">Back</a>
            </div>
        </div>
        <div class="panel-body">
            @include('events.form')
        </div>
    </div>

@stop