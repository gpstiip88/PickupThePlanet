@extends('layouts.master')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Show Event
            <div class="panel-nav pull-right" style="margin-top: -7px;">
                <a href="{!! route('events.edit', $event->id) !!}" class="btn btn-default">Edit</a>
                <a href="{!! route('events.index') !!}" class="btn btn-default">Back</a>
            </div>
        </div>
        <table class="table table-stripped table-bordered">
            <tr>
                <td><b>ID</b></td>
                <td>{!! $event->id !!}</td>
            </tr>

			
            <tr>
                <td><b>Title</b></td>
                <td>{!! $event->title !!}</td>
            </tr>			
            <tr>
                <td><b>Description</b></td>
                <td>{!! $event->description !!}</td>
            </tr>			
            <tr>
                <td><b>City</b></td>
                <td>{!! $event->city !!}</td>
            </tr>			
            <tr>
                <td><b>Date</b></td>
                <td>{!! $event->date !!}</td>
            </tr>			
            <tr>
                <td><b>User_id</b></td>
                <td>{!! $event->user_id !!}</td>
            </tr>

            <tr>
                <td><b>Created At</b></td>
                <td>{!! $event->created_at !!}</td>
            </tr>
        </table>
    </div>
@stop