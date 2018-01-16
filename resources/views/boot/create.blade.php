@extends('boot.layouts')

@section('title')
practise
@endsection

@section('content')
<div class="container">
	<div class='well'>
	<div class='col-md-8 col-md-offset-2' style="margin-top:10px">
	{{ Form::open(array('route' => 'saif.store', 'style' => 'margin-top:70px')) }}

		<div class="form-group row">
			{{ Form::label('name', 'Your Name', array('class' => 'col-4 col-form-label')) }}
			<div class="col-8">
			{{ Form::date('name', '', array('class' => 'form-control')) }} <br />
			</div>
		</div>

		<div class="form-group row">
			{{ Form::label('gender', 'Gender', array('class' => 'col-4 col-form-label')) }}
			<div class="col-8">
			{{ Form::radio('gender', 'Male', true) }} Male {{ Form::radio('gender', 'Female', true) }} Female
			</div>
		</div>

		<div class="form-group row">
			{{ Form::label('mname', 'Education', array('class' => 'col-4 col-form-label')) }}
			<div class="col-8">
			{{ Form::text('education', '', array('class' => 'form-control')) }} <br />
			</div>
		</div>

		<div class="form-group row">
			{{ Form::label('edu', 'Background', array('class' => 'col-4 col-form-label')) }}
			<div class="col-8">
			{{ Form::checkbox('edu', 'SSC', true) }} SSC {{ Form::checkbox('edu', 'HSC', true) }} HSC {{ Form::checkbox('edu', 'BSC', true) }} BSC 
			</div>
		</div>

		<div class="form-group row">
			{{ Form::label('class', 'Class', array('class' => 'col-4 col-form-label')) }}
			<div class="col-8">
			{{ Form::number('class', 'value') }} <br />
			</div>
		</div>

		<div class="form-group row">
			{{ Form::label('image', 'Photo', array('class' => 'col-4 col-form-label')) }}
			<div class="col-8">
			{{ Form::file('image') }} 
			</div>
		</div>

		<div class="form-group row">
			{{ Form::label('size', 'Shirt', array('class' => 'col-4 col-form-label')) }}
			<div class="col-8">
			{{ Form::select('size', array('L' => 'Large', 'S' => 'Small')) }} <br />
			</div>
		</div>

		<div class="form-group row">
			{{ Form::label('age', 'Age', array('class' => 'col-4 col-form-label')) }}
			<div class="col-8">
			{{ Form::selectRange('age', 10, 20) }} <br />
			</div>
		</div>

		<div class="form-group row">
			{{ Form::label('month', 'Month', array('class' => 'col-4 col-form-label')) }}
			<div class="col-8">
			{{ Form::selectMonth('month') }} <br />
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
