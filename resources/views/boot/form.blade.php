@extends('boot.layouts')

@section('title')
Service
@endsection

@section('content')
<div class="container">
	<div class='row'>
		<div class='col-md-5'>
			{{ Form::open(array('route' => 'addform.store', 'style' => '')) }}

			<div class="form-group row">
				{{ Form::label('name', 'Your Name', array('class' => 'col-4 col-form-label')) }}
				<div class="col-8">
				{{ Form::text('name', '', array('class' => 'form-control')) }} <br />
				</div>
			</div>

			<div class="form-group row">
				{{ Form::label('fname', 'Your Father Name', array('class' => 'col-4 col-form-label')) }}
				<div class="col-8">
				{{ Form::text('fname', '', array('class' => 'form-control')) }} <br />
				</div>
			</div>

			<div class="form-group row">
				{{ Form::label('mname', 'Your Mother Name', array('class' => 'col-4 col-form-label')) }}
				<div class="col-8">
				{{ Form::text('mname', '', array('class' => 'form-control')) }} <br />
				</div>
			</div>

			<div class="form-group row">
				{{ Form::label('email', 'Your Email', array('class' => 'col-4 col-form-label')) }}
				<div class="col-8">
				{{ Form::email('email', '', array('class' => 'form-control')) }} <br />
				</div>
			</div>

			<div class="form-group row">
				{{ Form::label('phone', 'Your Phone Number', array('class' => 'col-4 col-form-label')) }}
				<div class="col-8">
				{{ Form::text('phone', '', array('class' => 'form-control')) }} <br />
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






	{{-- Form::selectMonth('month') }}
	{{ Form::selectYear('year', 2013, 2015) }}

	{{ Form::select('age', [
	   'young' => 'Under 18',
	   'adult' => '19 to 30',
	   'adult2' => 'Over 30']
	) }}

	{{ Form::select('feeling', array(
	  'Happy' => array('Joyous', 'Glad', 'Ecstatic'),
	  'Sad' => array('Bereaved', 'Pensive', 'Down'),
	))}}

	{{ Form::textarea('notes') --}}

	
	</div>
</div>
@endsection