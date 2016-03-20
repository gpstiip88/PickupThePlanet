<div id="sidebar-eventi" class="col-sm-3 sfondo-bianco center-block">
  <!-- Sidebar Eventi -->

  	<div class="row">
  		<div class="panel panel-default">
		  <div class="panel-heading sfondo-arancio"><span class="icone icone-foglio pull-left"></span>
		    <h3 class="panel-title">&nbsp;eventi consigliati</h3>
		  </div>
		  <div class="panel-body">
		    @if(isset($events))
	  		@foreach($events as $event)
	  		<div class="row">
	  			<div class="col-xs-6 sfondo-arancio">
	  				<h3 class="testo-bianco">{{ $event->type }}</h3>	  				
	  			</div>
	  			<div class="col-xs-6 no-padding">
	  				<img class="img-responsive" src="{{ asset($event->image) }}" />	  				
	  			</div>
	  		</div>
	  		<div class="row">
	  			<div class="col-xs-12">
	  				<h2>{{ $event->title }}</h2>
	  			</div>
	  			<div class="col-xs-12">
	  				{{ date('d|m|Y', strtotime($event->date)) }}
	  			</div>
	  		</div>
	  		@endforeach
	  		@endif
		  </div>
		</div>
  		
  	</div>
</div>
