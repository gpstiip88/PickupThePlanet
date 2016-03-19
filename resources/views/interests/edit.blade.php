@extends('layouts.master')

@section('content')

    <div class="panel panel-default">
        <div class="panel-heading">
            Edit Interest
            <div class="panel-nav pull-right" style="margin-top: -7px;">
                <a href="{!! route('interests.index') !!}" class="btn btn-default">Back</a>
            </div>
        </div>
        <div class="panel-body">
            @include('interests.form', ['model' => $interest])
        </div>
    </div>

@stop