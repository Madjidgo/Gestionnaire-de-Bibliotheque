@extends('layouts.app')

@section('content')
	<h1 class="text-center"> {{$biblis->count()}} {{ str_plural('LIBRARY',$biblis->count()) }}</h1>


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