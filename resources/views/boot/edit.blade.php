@extends('boot.layouts')

@section('title')
Service
@endsection

@section('content')
<div class="container">
	<div class='row'>
		<div class='col-md-5 col-md-offset-2'>
			{{ Form::open(array('route' => ['addform.update', $alldata->id], 'style' => '', 'method' => 'PUT')) }}

			<div class="form-group row">
				{{ Form::label('name', 'Your Name', array('class' => 'col-4 col-form-label')) }}
				<div class="col-8">
				{{ Form::text('name', $value=$alldata->name, array('class' => 'form-control')) }} <br />
				</div>
			</div>

			<div class="form-group row">
				{{ Form::label('fname', 'Your Father Name', array('class' => 'col-4 col-form-label')) }}
				<div class="col-8">
				{{ Form::text('fname', $value=$alldata->fname, array('class' => 'form-control')) }} <br />
				</div>
			</div>

			<div class="form-group row">
				{{ Form::label('mname', 'Your Mother Name', array('class' => 'col-4 col-form-label')) }}
				<div class="col-8">
				{{ Form::text('mname', $value=$alldata->mname, array('class' => 'form-control')) }} <br />
				</div>
			</div>

			<div class="form-group row">
				{{ Form::label('email', 'Your Email', array('class' => 'col-4 col-form-label')) }}
				<div class="col-8">
				{{ Form::email('email', $value=$alldata->email, array('class' => 'form-control')) }} <br />
				</div>
			</div>

			<div class="form-group row">
				{{ Form::label('phone', 'Your Phone Number', array('class' => 'col-4 col-form-label')) }}
				<div class="col-8">
				{{ Form::text('phone', $value=$alldata->phone, array('class' => 'form-control')) }} <br />
				</div>
			</div>

			<div class="form-group row">
				<div class="">
					{{ Form::submit(), array('class' => 'col-form-label') }}
					{{ Form::reset('Reset', ['class' => 'col-4 form-button']) }}				
				</div>
			</div>
			{!! Form::close() !!}
		</div>	
	</div>
</div>
@endsection