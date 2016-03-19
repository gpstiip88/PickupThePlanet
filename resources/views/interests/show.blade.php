@extends('layouts.master')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Show Interest
            <div class="panel-nav pull-right" style="margin-top: -7px;">
                <a href="{!! route('interests.edit', $interest->id) !!}" class="btn btn-default">Edit</a>
                <a href="{!! route('interests.index') !!}" class="btn btn-default">Back</a>
            </div>
        </div>
        <table class="table table-stripped table-bordered">
            <tr>
                <td><b>ID</b></td>
                <td>{!! $interest->id !!}</td>
            </tr>

			
            <tr>
                <td><b>Name</b></td>
                <td>{!! $interest->name !!}</td>
            </tr>			
            <tr>
                <td><b>Description</b></td>
                <td>{!! $interest->description !!}</td>
            </tr>

            <tr>
                <td><b>Created At</b></td>
                <td>{!! $interest->created_at !!}</td>
            </tr>
        </table>
    </div>
@stop