@extends('layouts.master')

@section('title')
@parent
| Lorem Ipsum
@stop

@section('content')

<h1>Lorem Ipsum</h1>

		<form action="{{ url('/lorem') }}" method="POST">
			<fieldset>
			<!--<legend>Lorem Ipsum</legend>-->

			<label name="count">First, how many paragraphs do you need?</label>
			<select name="count">
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
			</select><br>

		</fieldset>
		<input type="submit" class="btn btn-info" name="submit" value="Then, click here..."/>
		</form>
		<br>

	<h3>...and finally, simply copy and paste it where ya need it.</h3>
	<div class="loremContent">
		<?php
		$generator = new Badcow\LoremIpsum\Generator();
		$paragraphs = $generator->getParagraphs(0);
		echo implode('<p>', $paragraphs);
		?>
	</div>
@stop