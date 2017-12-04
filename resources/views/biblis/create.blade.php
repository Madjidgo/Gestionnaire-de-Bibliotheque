@extends('layouts.app')

@section('content')

<h1 class="text-center"> Add a Book</h1>

<form action="{{route('biblis.store')}}" method="POST">
	 {{ csrf_field() }}

 		 @include('biblis/_form ')
		
		

	 <button type="submit" class="btn btn-default">Submit</button>

  <a class="btn btn-default" href="{{ route('home') }}"> Retry</a>
</form>

  <script src="//code.jquery.com/jquery.js"></script>
 	 @include('flashy::message')

@stop

