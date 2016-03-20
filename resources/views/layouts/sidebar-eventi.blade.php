<div class="col-sm-3">
  <!-- Sidebar Eventi -->
  
  	<div class="row">
  		<div class="panel panel-default">
		  <div class="panel-heading"><span class="icone icone-foglio pull-left"></span>
		    <h3 class="panel-title">&nbsp;eventi consigliati</h3>
		  </div>
		  <div class="panel-body">
		    @if(isset($events))
	  		@foreach($events as $event)
	  		<div class="row">
	  			<div class="col-lg-12">
	  				<img class="img-responsive" src="{{ $event->image }}" />
	  				
	  			</div>
	  		</div>
	  		@endforeach
	  		@endif
		  </div>
		</div>
  		
  	</div>
</div>
