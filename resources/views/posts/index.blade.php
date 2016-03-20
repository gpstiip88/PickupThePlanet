@extends('layouts.master')

@section('content')
  @if(isset($posts))
  @foreach($posts as $post)
  <div class="post sfondo-bianco">
	  <div class="row">
	  	<div class="col-xs-12">
	  		<img src="{{ asset($post->user->image) }}" class="img-responsive pull-left img-circle mini-avatar" />
	  		<span class="pull-left text-middle">{{ $post->user->name }}</span>
	  		<span class="pull-left icone icone-semi-verde"></span>
	  	</div>
	  </div>
	  <div class="row">
	  	<div class="col-xs-12" style="margin: 16px;">
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
	  	<div class="col-xs-offset-4 col-xs-1"><span class="icone icone-comment text-right"></span></div>
	  </div>
	</div>
  @endforeach
  @endif
@stop