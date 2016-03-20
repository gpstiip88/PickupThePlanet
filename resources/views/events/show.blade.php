@extends('layouts.master')

@section('content')
  <div class="sfondo-bianco">
    <div class="row" style="display: table;padding: 0 16px;">
      <div class="col-sm-4 same-height @if($event->type_id == 1)sfondo-verde @elseif($event->type_id == 3)sfondo-viola @else sfondo-celeste @endif testo-bianco testo-grande text-uppercase">
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
            <p class="content">Organizzato da @if($event->user->level == 10)<a href="{{ url('farmers/'.$event->user->id) }}">@endif{{ $event->user->name }}@if($event->user->level == 10)</a>@endif</p>
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
        <img class=" img-circle mini-avatar " src="{{ asset('uploads/images/mappe.gif') }}">
        <p>Partecipanti</p>
        
          <img style="margin-bottom: 8px;" src="{{ asset(App\User::find(1)->image) }}" class="img-responsive mini-avatar img-circle pull-left">
        
      </div>
      <div class="col-sm-offset-1 col-sm-10" style="margin-bottom: 10px; border-bottom: 1px solid orange;"></div>
      <div class="row" style="margin: 16px;">
      <div class="col-xs-2"><span class="icone icone-connect text-left"></span></div>
      <div class="col-xs-offset-3 col-xs-2"><span class="icone icone-cuore text-center"></span></div>
      <div class="col-xs-offset-4 col-xs-1"><span class="icone icone-comment text-right" data-textarea="text-{{ $event->id }}"></span></div>
    </div>
      <div class="row" style="display:none;" id="text-{{ $event->id }}">
      <div class="col-xs-12">
        <form>
          <div class="form-group">
            <textarea style="width: 100%" placeholder="Scrivi il tuo commento..."></textarea>
            <a class="btn sfondo-arancio testo-bianco" href="#">INVIA</a>
          </div>
        </form>
      </div>
    </div>
    </div>
  </div>
@stop
