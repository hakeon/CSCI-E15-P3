@extends('layouts.master')

@section('title')
@parent
| Lorem Ipsum
@stop

@section('content')

<h1>Lorem Ipsum</h1>

<div class="loremContent">
<?php
$generator = new Badcow\LoremIpsum\Generator();
$paragraphs = $generator->getParagraphs(5);
echo implode('<p>', $paragraphs);
?>
</div>
@stop