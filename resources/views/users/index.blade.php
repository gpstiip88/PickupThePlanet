@extends('layouts.master')

@section('content')
  <div class="panel panel-default">
	<div class="panel-heading">
		All Users
		<div class="panel-nav pull-right" style="margin-top: -7px;">
			<a href="{!! route('users.create') !!}" class="btn btn-default">Add New</a>
		</div>
	</div>
	<table class="table table-stripped table-bordered">
		<thead>
			<th class="text-center">#</th>
			<th>Username</th>
			<th>Password</th>
			<th>Email</th>
			<th>Level</th>
			<th>Name</th>
			<th>City</th>

			<th>Created At</th>
			<th class="text-center">Action</th>
		</thead>
		<tbody>
			@foreach ($users as $user)
				<tr>
					<td class="text-center">{!! $index !!}</td>
					<td>{!! $user->username !!}</td>
					<td>{!! $user->password !!}</td>
					<td>{!! $user->email !!}</td>
					<td>{!! $user->level !!}</td>
					<td>{!! $user->name !!}</td>
					<td>{!! $user->city !!}</td>
		
					<td>{!! $user->created_at !!}</td>
					<td class="text-center">
						<div class="btn-group">
							{!! Form::open(['method' => 'DELETE', 'route' => ['users.destroy', $user->id]]) !!}
							<a href="{!! route('users.show', $user->id) !!}" class="btn btn-sm btn-default" title="View" data-toggle="tooltip"><i class="glyphicon glyphicon-eye-open"></i></a>
							<a href="{!! route('users.edit', $user->id) !!}" class="btn btn-sm btn-default" title="Edit" data-toggle="tooltip"><i class="glyphicon glyphicon-edit"></i></a>
							<button type="submit" class="btn btn-sm btn-default" title="Delete" data-toggle="tooltip"><i class="glyphicon glyphicon-trash"></i></button>
							{!! Form::close() !!}
						</div>
					</td>
				</tr>
				<?php $index++; ?>
			@endforeach
		</tbody>
	</table>
	<div class="panel-footer">
		<div class="text-center">{!! $users !!}</div>
	</div>
</div>
@stop