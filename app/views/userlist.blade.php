@extends('layouts.master')

@section('title')
@parent
| User List
@stop

@section('content')

<h1>User List</h1>
<hr>
	<div class="well">
		@for($i = 1; $i <= $number; $i++)
             {{ $faker -> name }}
             |  {{ $faker -> address }}
             |  {{ $faker -> phoneNumber }}
             <br>
             <br>
        @endfor
	</div>

@stop