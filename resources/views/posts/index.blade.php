@extends('layouts.master')

@section('content')
  @if(isset($posts))
  @foreach($posts as $post)
  <div class="col-xs-12 sfondo-bianco" style="margin-bottom: 16px;">
  	<div class="row">
	  	<div class="col-xs-12" style="padding: 8px">
	  		<img src="{{ asset('uploads/images/utente.jpg') }}" class="img-responsive pull-left img-circle mini-avatar" />
	  		<span class="pull-left text-middle" 
	  		style="line-height: 60px; padding: 0 16px;color: grey; font-size: 20px">Cosa vuoi seminare oggi?</span>
	  		<span class="pull-right icone icone-appunti" style="transform: scale(2.5);margin: 24px 16px 0 0;"></span>
	  	</div>
	  </div>
  </div>
  <div class="col-xs-12 sfondo-bianco">
	  <div class="row">
	  	<div class="col-xs-12" style="padding: 8px">
	  		<img src="{{ asset($post->user->image) }}" class="img-responsive pull-left img-circle mini-avatar" />
	  		<span class="pull-left text-middle" style="line-height: 60px; padding: 0 16px;">{{ $post->user->name }}</span>
	  		<span class="pull-left icone icone-semi-verde" style="transform: scale(0.5);"></span>
	  	</div>
	  </div>
	  <div class="row">
	  	<div class="col-xs-12">
	  		{{ $post->content }}
	  	</div>
	  </div>
	  @if(isset($post->image))
	  <div class="row">
	  	<div class="col-xs-12" style="margin: 16px;">
	  		<img src="{{ asset($post->image) }}" class="img-responsive" />
	  	</div>
	  </div>
	  @endif
	  <div class="row" style="margin: 16px;">
	  	<div class="col-xs-2"><span class="icone icone-connect text-left"></span></div>
	  	<div class="col-xs-offset-3 col-xs-2"><span class="icone icone-cuore text-center"></span></div>
	  	<div class="col-xs-offset-4 col-xs-1"><span class="icone icone-comment text-right" data-textarea="text-{{ $post->id }}"></span></div>
	  </div>
    <div class="row" style="display:none;" id="text-{{ $post->id }}">
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
  @endforeach
  @endif
@stop
