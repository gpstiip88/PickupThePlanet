@extends('layouts.master')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Add New EventType
            <div class="panel-nav pull-right" style="margin-top: -7px;">
                <a href="{!! route('event_types.index') !!}" class="btn btn-default">Back</a>
            </div>
        </div>
        <div class="panel-body">
            @include('event_types.form')
        </div>
    </div>

@stop