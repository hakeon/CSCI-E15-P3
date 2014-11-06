@extends('layouts.master')

@section('title')
@parent
| xlcd
@stop

@section('content')
<h1>xkcd random pass-phrase generator</h1>

	<div class="btn-group">
		<h2>How many words do you want for your pass-phrase?</h2>
		{{ Form::open(array('url' => '/xkcd_display', 'method' => 'POST')); }}
		{{ Form::label('number', 'Please select a number from the drop-down:') }}
		{{ Form::selectRange('number', 1, 5) }}
	</div>
	<hr>
	<div>
		{{ Form::submit('Go!'); }}
    	{{ Form::close() }}
	</div>
@stop