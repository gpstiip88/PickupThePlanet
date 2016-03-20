@extends('layouts.master')

@section('content')
  <div class="row">
    <div class="col-sm-4">
        tipo evento
    </div>
    <div class="col-sm-8">
      <h2>{{ $event['title']}}</h2>
      <h3>{{ $event['date']}}</h3>
      <img href="{{ asset($event->user->image }}">
      <p>Organizzato da {{ $event->user->name}}</p>
    </div>
    <div class="row">
      <div class="col-sm-8">
        <p>{{ $event->description }}</p>
      </div>
      <div class="col-sm-4">
        <p>Luogo</p>
        <img href="{{ asset('img/luogo.jpg')}}">
        <p>Partecipanti</p>
        @foreach ($event->users as $user)
          <img href="{{ asset($user->image) }}" class="mini-avatar img-circle pull-left">
        @endforeach
      </div>
    </div>

  </div>
@stop

<div class="panel-nav pull-right" style="margin-top: -7px;">
    <a href="{!! route('events.edit', $event->id) !!}" class="btn btn-default">Edit</a>
    <a href="{!! route('events.index') !!}" class="btn btn-default">Back</a>
</div>
