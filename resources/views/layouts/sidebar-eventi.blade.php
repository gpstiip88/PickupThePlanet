<div id="sidebar-eventi" class="col-sm-3 sfondo-bianco center-block padded-updown">
  <!-- Sidebar Eventi -->

  	<div class="row">
  		<div class="col-xs-12 sfondo-arancio">
		  <span class="icone icone-foglio pull-left"></span>
		    <h3 class="panel-title testo-grande">&nbsp;eventi @if($user->level == 10) organizzati @else consigliati@endif</h3>
		</div>
		  <div class="col-xs-12">
		    @if(isset($events))
	  		@foreach($events as $event)
        <?php if($user->level == 10 && $event->user_id != $user->id) continue; ?>
	  		<div class="evento">
		  		<div class="row" style="display:table;">
		  			<div class="col-xs-6 @if($event->type_id == 1)sfondo-arancio @else sfondo-blu @endif same-height">
		  				<h3 class="testo-bianco">{{ $event->type->name }}</h3>
		  			</div>
		  			<div class="col-xs-6 no-padding same-height">
		  				<img class="img-responsive" src="{{ asset($event->image) }}" />
		  			</div>
		  		</div>
		  		<div class="row">
		  			<div class="col-xs-12">
		  				<h2>{{ $event->title }}</h2>
		  			</div>
		  			<div class="col-xs-12">
		  				{{ date('d|m|Y H:i', strtotime($event->date)) }}
		  			</div>
		  		</div>
		  		<div class="row no-padding">
		  			<div class="col-xs-6">
		  				<strong class="text-uppercase">{{ $event->city }}</strong>
		  			</div>
		  			<div class="col-xs-6">
		  				<a href="{!! route('events.show', $event->id) !!}" class="btn sfondo-arancio testo-bianco">ISCRIVITI</a>
		  			</div>
		  		</div>
		  	</div>
	  		@endforeach
	  		@endif
		  </div>
  	</div>
</div>
