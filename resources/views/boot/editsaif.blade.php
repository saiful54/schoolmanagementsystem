@extends('boot.layouts')

@section('title')
practise
@endsection

@section('content')
<div class="container">
	<div class='row'>
	<div class='col-md-8 col-md-offset-2' style="margin-top:10px">
	{{ Form::open(array('route' => ['saif.update', $editdata->id], 'style' => 'margin-top:70px', 'method' => 'PUT')) }}

		<div class="form-group row">
			{{ Form::label('name', 'Your Name', array('class' => 'col-4 col-form-label')) }}
			<div class="col-8">
			{{ Form::text('name', $value= $editdata->name, array('class' => 'form-control')) }} <br />
			</div>
		</div>

		<div class="form-group row">
			{{ Form::label('fname', 'Gender', array('class' => 'col-4 col-form-label')) }}
			<div class="col-8">
			{{ Form::text('gender', $value= $editdata->gender, array('class' => 'form-control')) }} <br />
			</div>
		</div>

		<div class="form-group row">
			{{ Form::label('mname', 'Education', array('class' => 'col-4 col-form-label')) }}
			<div class="col-8">
			{{ Form::text('education', $value= $editdata->education, array('class' => 'form-control')) }} <br />
			</div>
		</div>

		<div class="form-group row">
			<div class="col-4 col-sm-offset-4">
				{{ Form::submit(), array('class' => 'col-form-label') }}
				{{ Form::reset('Reset', ['class' => 'col-4 form-button']) }}				
			</div>
		</div>
	{!! Form::close() !!}
</div>
@endsection
