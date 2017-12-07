@extends('layouts.app')



@section('content')

<h1 class="text-center">{{$book->title}}</h1>

<form action="{{route('biblis.update',$book)}}" method="POST">
 {{ csrf_field() }}

	{{method_field('PUT')}}

@include('biblis/_form')

 <button type="submit" class="btn btn-default">Submit</button>

  <a class="btn btn-default" href="{{ route('home') }}"> Retry</a>

</form>
	  <script src="//code.jquery.com/jquery.js"></script>
 	 @include('flashy::message')
@stop