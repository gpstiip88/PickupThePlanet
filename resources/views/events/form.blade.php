@if (count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="form-horizontal">
    @if (isset($model))
        {!! Form::model($model, ['files' => true, 'method' => 'PUT', 'route' => ['events.update', $model->id]]) !!}
    @else
        {!! Form::open(['files' => true, 'route' => 'events.store']) !!}
    @endif
    
	<div class="form-group">
	    {!! Form::label('title', 'Title:', ['class' => 'col-md-2 control-label']) !!}
	    <div class="col-sm-9">
	        {!! Form::text('title', null, ['class' => 'form-control']) !!}
	    </div>
	</div>

	<div class="form-group">
	    {!! Form::label('description', 'Description:', ['class' => 'col-md-2 control-label']) !!}
	    <div class="col-sm-9">
	        {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
	    </div>
	</div>

	<div class="form-group">
	    {!! Form::label('city', 'City:', ['class' => 'col-md-2 control-label']) !!}
	    <div class="col-sm-9">
	        {!! Form::text('city', null, ['class' => 'form-control']) !!}
	    </div>
	</div>

	<div class="form-group">
	    {!! Form::label('date', 'Date:', ['class' => 'col-md-2 control-label']) !!}
	    <div class="col-sm-9">
	        {!! Form::text('date', null, ['class' => 'form-control']) !!}
	    </div>
	</div>

	<div class="form-group">
	    {!! Form::label('user_id', 'User Id:', ['class' => 'col-md-2 control-label']) !!}
	    <div class="col-sm-9">
	        {!! Form::text('user_id', null, ['class' => 'form-control']) !!}
	    </div>
	</div>

    <div class="form-group">
        <label class="col-md-2 control-label"></label>
        <div class="col-sm-9">
            {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
    {!! Form::close() !!}
</div>