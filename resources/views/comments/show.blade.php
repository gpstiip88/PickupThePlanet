@extends('layouts.master')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Show Comment
            <div class="panel-nav pull-right" style="margin-top: -7px;">
                <a href="{!! route('comments.edit', $comment->id) !!}" class="btn btn-default">Edit</a>
                <a href="{!! route('comments.index') !!}" class="btn btn-default">Back</a>
            </div>
        </div>
        <table class="table table-stripped table-bordered">
            <tr>
                <td><b>ID</b></td>
                <td>{!! $comment->id !!}</td>
            </tr>

			
            <tr>
                <td><b>Content</b></td>
                <td>{!! $comment->content !!}</td>
            </tr>			
            <tr>
                <td><b>Post_id</b></td>
                <td>{!! $comment->post_id !!}</td>
            </tr>			
            <tr>
                <td><b>User_id</b></td>
                <td>{!! $comment->user_id !!}</td>
            </tr>

            <tr>
                <td><b>Created At</b></td>
                <td>{!! $comment->created_at !!}</td>
            </tr>
        </table>
    </div>
@stop