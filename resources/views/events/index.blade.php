@extends('layouts.master')

@section('content')
  <div class="panel panel-default">
	<div class="panel-heading">
		All Events
		<div class="panel-nav pull-right" style="margin-top: -7px;">
			<a href="{!! route('events.create') !!}" class="btn btn-default">Add New</a>
		</div>
	</div>
	<table class="table table-stripped table-bordered">
		<thead>
			<th class="text-center">#</th>
			<th>Title</th>
			<th>Description</th>
			<th>City</th>
			<th>Date</th>
			<th>User_id</th>

			<th>Created At</th>
			<th class="text-center">Action</th>
		</thead>
		<tbody>
			@foreach ($events as $event)
				<tr>
					<td class="text-center">{!! $index !!}</td>
					<td>{!! $event->title !!}</td>
					<td>{!! $event->description !!}</td>
					<td>{!! $event->city !!}</td>
					<td>{!! $event->date !!}</td>
					<td>{!! $event->user_id !!}</td>
		
					<td>{!! $event->created_at !!}</td>
					<td class="text-center">
						<div class="btn-group">
							{!! Form::open(['method' => 'DELETE', 'route' => ['events.destroy', $event->id]]) !!}
							<a href="{!! route('events.show', $event->id) !!}" class="btn btn-sm btn-default" title="View" data-toggle="tooltip"><i class="glyphicon glyphicon-eye-open"></i></a>
							<a href="{!! route('events.edit', $event->id) !!}" class="btn btn-sm btn-default" title="Edit" data-toggle="tooltip"><i class="glyphicon glyphicon-edit"></i></a>
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
		<div class="text-center">{!! $events !!}</div>
	</div>
</div>
@stop