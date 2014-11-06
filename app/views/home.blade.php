@extends('layouts.master')

@section('title')
@parent
| Home
@stop

@section('content')
<h1>The Developer's Best Friend</h1>
<h4>At this site, you will find a Lorem Ipsum generator for text filler
and a random user generator to populate your sample site. Some handy tools free for your use
that will make your mock-ups easier and quicker to take from idea to presentation.</h4>
<hr>
<h1 class=""><a href="{{{ URL::to('/lorem') }}}">Lorem Ipsum</a></h1>
<br>
<h1 class=""><a href="{{{ URL::to('/user') }}}">Random User</a></h1>

@stop