@extends('layouts.master')

@section('content')
  <div class="sfondo-bianco">
    <div class="row" style="display: table;padding: 0 16px;">
      <div class="col-sm-4 same-height sfondo-arancio testo-bianco testo-grande text-uppercase">
            {{ $event->type->name }}
      </div>
      <div class="col-sm-8 same-height">
        <h2>{{ $event['title'] }}</h2>
        <h3>{{ $event['date'] }}</h3>
        <div class="row">
          <div class="col-sm-3">
            <img src="{{ asset($event->user->image) }}" class="mini-avatar img-circle pull-left">
          </div>
          <div class="col-sm-9 v-center">
            <p class="content">Organizzato da {{ $event->user->name }}</p>
          </div>
        </div>

      </div>
    </div>
    <div class="row" style="padding: 16px;">
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
      <div class="col-sm-offset-1 col-sm-10" style="border-bottom: 1px solid orange;"></div>
    </div>
  </div>
@stop
