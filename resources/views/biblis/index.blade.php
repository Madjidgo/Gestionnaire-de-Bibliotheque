@extends('layouts.app')

@section('content')
	<h1 class="text-center"> {{$biblis->count()}} {{ str_plural('BOOK',$biblis->count()) }}</h1>


	@if(count($biblis) >0)
	<ul>
	@foreach($biblis as $bibli)
	<li>
		<a href="{{route('biblis.show',$bibli)}}">
		{{$bibli->title}}</a>
	</li>
	@endforeach

		{{ $biblis->links('vendor.pagination.bootstrap-4') }} 
	</ul>
	@endif
	
	
@stop 