@extends('layouts.master')

@section('title')
@parent
| Lorem Ipsum
@stop

@section('content')

<h1>Lorem Ipsum</h1>
<h3>Simply copy and paste the text below.</h3>
<hr>
	<div class="well">
		{{ $text }}
	</div>

@stop