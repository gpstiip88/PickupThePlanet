@extends('layouts.master')

@section('content')
  <div class="sfondo-bianco">
    <div class="row">
      <div class="col-sm-4">
          <div class="same-height sfondo-arancio testo-bianco testo-grande text-uppercase">
            tipo evento
          </div>
      </div>
      <div class="col-sm-8">
        <h2>{{ $event['title'] }}</h2>
        <h3>{{ $event['date'] }}</h3>
        <img src="{{ asset($event->user->image) }}" class="mini-avatar img-circle pull-left">
        <p>Organizzato da {{ $event->user->name }}</p>
      </div>
    </div>
    <div class="row" style="border-bottom: 1px solid orange">
      <div class="col-sm-8">
        <p>{{ $event->description }}</p>
      </div>
      <div class="col-sm-4">
        <p>Luogo</p>
        <img href="{{ asset('img/luogo.jpg') }}">
        <p>Partecipanti</p>
        @foreach ($event->users as $user)
          <img src="{{ asset($user->image) }}" class="mini-avatar img-circle pull-left">
        @endforeach
      </div>
    </div>
  </div>
@stop
