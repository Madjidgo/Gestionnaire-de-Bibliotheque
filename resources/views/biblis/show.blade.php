@extends('layouts.app')

  @section('content')
      	<h1 class="text-center">TITLE BOOK :{{$bibli->title}}</h1>
      <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="card text-center" style="width: 20rem;">
            <div class="card-body">
              <h4 class="card-title">Author:{{$bibli->author}}</h4>
              <p class="card-text">Resume:{{$bibli->resume}}.</p>
              <p class="card-text">Category:{{$bibli->category}}</p>

              @if($bibli->borrow == 1)
              <p class="card-text">borrow by:{{$bibli->user->name}}</p>
              <p class="card-text">date:{{$bibli->date}}</p>
              <p class="card-text">user: {{$bibli->user->name}}</p>
              @endif

                <a href="{{route('home')}}" class="btn btn-outline-primary"><i class="fa fa-home" aria-hidden="true"></i>
                Home</a>
                 <a href="{{route('biblis.edit',$bibli)}}" class="btn btn-outline-secondary"><i class="fa fa-pencil" aria-hidden="true"></i>
                Update</a>

                <!-- form delete -->
                
               <form action="{{route('biblis.destroy',$bibli)}}" method="POST"  onsubmit=" return confirm('Are you sûr ?')">
               {{ csrf_field() }}
               {{ method_field('DELETE') }}
               <button type="submit" class="btn btn-outline-danger"><i class="fa fa-trash-o fa-lg"></i> Delete</button>
              </form>



            </div>
          </div>
        </div>

      </div>
    	</div>
@endsection
