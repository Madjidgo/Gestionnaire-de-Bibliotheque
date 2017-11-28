@extends('layouts.app')

@section('content')
	<h1 class="text-center">{{$bibli->title}}</h1>

<div class="row">
  <div class="col-sm-6">
    <div class="card text-center" style="width: 20rem;"">
      <div class="card-body">
        <h4 class="card-title">{{$bibli->author}}</h4>
        <p class="card-text">{{$bibli->resume}}.</p>
        <p class="card-text">{{$bibli->category}}</p>
        <p class="card-text">{{$bibli->date}}</p>
      <a href="{{route('home')}}" class="btn btn-primary">Home</a>
      </div>
    </div>
  </div>
 
</div>
	




@stop 

  