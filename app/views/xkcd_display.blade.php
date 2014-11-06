@extends('layouts.master')

@section('title')
@parent
| xlcd
@stop

@section('content')
<h1>xkcd random pass-phrase generator</h1>

	    @for($i = 0; $i < $number; $i++)
			<?php
			$selected_words = [];
            $max = count($words) -1;
            $rand = rand(0, $max);
                $word = $words[$rand];
                array_push($selected_words, $word);
            ?>
        @endfor

        @foreach ($selected_words as $index => $word)
                {{ $password = join($selected_words) }}
		@endforeach

		<h2>Your pass-phrase is:</h2>
		{{ $password }}

@stop