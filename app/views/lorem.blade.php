@extends('layouts.master')

@section('title')
@parent
| Lorem Ipsum
@stop

@section('content')

<h1>Lorem Ipsum</h1>
<hr>

	<div class="btn-group">
		<h2>How many paragraphs do you need?</h2>
		{{ Form::open(array('url' => '/loremtext', 'method' => 'POST')); }}
		{{ Form::label('number', 'Please select a number from the drop-down:') }}
		{{ Form::selectRange('number', 1,5) }}

		{{ Form::submit('Go!') }}
    	{{ Form::close() }}
    </div>

@stop