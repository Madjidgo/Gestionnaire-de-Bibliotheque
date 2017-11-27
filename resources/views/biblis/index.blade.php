@extends('layouts.app')

@section('content')
	<h1 class="text-center">Bibliothèque</h1>


	@if(count($biblis) >0)
	<ul>
	@foreach($biblis as $bibli)
	<li>
		<a href="{{route('biblis.show',$bibli)}}">
		{{$bibli->title}}</a>
	</li>
	@endforeach
	</ul>
	@endif

@stop 