@extends('layouts.app')

  @section('content')
  	<h1 class="text-center">{{$bibli->title}}</h1>
  <div class="container">
  <div class="row">
    <div class="col-sm-6">
      <div class="card text-center" style="width: 20rem;"">
        <div class="card-body">
          <h4 class="card-title">{{$bibli->author}}</h4>
          <p class="card-text">{{$bibli->resume}}.</p>
          <p class="card-text">{{$bibli->category}}</p>
          <p class="card-text">{{$bibli->date}}</p>
            <a href="{{route('home')}}" class="btn btn-outline-primary"><i class="fa fa-home" aria-hidden="true"></i>
            Home</a>
             <a href="{{route('biblis.edit',$bibli)}}" class="btn btn-outline-secondary"><i class="fa fa-pencil" aria-hidden="true"></i>
            Update</a>

            <!-- form delete -->
           <form action="{{route('biblis.destroy',$bibli)}}" method="POST">
           {{ csrf_field() }}
           {{ method_field('DELETE') }}
           <button type="submit" class="btn btn-outline-danger"><i class="fa fa-trash-o fa-lg"></i> Delete</button>
          </form>


        </div>
      </div>
    </div>
   
  </div>
	</div>
@stop 

  