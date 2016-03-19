@extends('layouts.master')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            Show Post
            <div class="panel-nav pull-right" style="margin-top: -7px;">
                <a href="{!! route('posts.edit', $post->id) !!}" class="btn btn-default">Edit</a>
                <a href="{!! route('posts.index') !!}" class="btn btn-default">Back</a>
            </div>
        </div>
        <table class="table table-stripped table-bordered">
            <tr>
                <td><b>ID</b></td>
                <td>{!! $post->id !!}</td>
            </tr>

			
            <tr>
                <td><b>Content</b></td>
                <td>{!! $post->content !!}</td>
            </tr>			
            <tr>
                <td><b>Image</b></td>
                <td>{!! $post->image !!}</td>
            </tr>			
            <tr>
                <td><b>User_id</b></td>
                <td>{!! $post->user_id !!}</td>
            </tr>

            <tr>
                <td><b>Created At</b></td>
                <td>{!! $post->created_at !!}</td>
            </tr>
        </table>
    </div>
@stop