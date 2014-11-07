@extends('layouts.master')

@section('title')
@parent
| Random User
@stop

@section('content')

<h1>Random User</h1>
<hr>

	<div class="btn-group">
		<h2>How many users do you need?</h2>
		{{ Form::open(array('url' => '/userlist', 'method' => 'POST')); }}
		{{ Form::label('number', 'Please select a number from the drop-down:') }}
		{{ Form::selectRange('number', 1, 99) }}

		{{ Form::submit("Go!") }}
    	{{ Form::close() }}
	</div>
@stop