@extends('layouts.master')

@section('title')
@parent
| User List
@stop

@section('content')

<h1>User List</h1>
<hr>
	<div class="well">
		{{ $user }}
	</div>

@stop