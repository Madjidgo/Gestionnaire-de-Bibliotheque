@extends('layouts.app')

  @section('content')
      	<h1 class="text-center">TITLE BOOK :{{$book->title}}</h1>
      <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="card text-center" style="width: 20rem;">
            <div class="card-body">
              <h4 class="card-title">Author:{{$book->author}}</h4>
              <p class="card-text">Resume:{{$book->resume}}.</p>
              <p class="card-text">Category:{{$book->category}}</p>

              @if($book->borrow == 1)
              <p class="card-text">borrow by:{{$book->user->name}}</p>
              <p class="card-text">date:{{$book->date}}</p>
              <p class="card-text">user: {{$book->user->name}}</p>
              @endif

                <a href="{{route('home')}}" class="btn btn-outline-primary"><i class="fa fa-home" aria-hidden="true"></i>
                Home</a>
                 <a href="{{route('biblis.edit',$book)}}" class="btn btn-outline-secondary"><i class="fa fa-pencil" aria-hidden="true"></i>
                Update</a>

                <!-- form delete -->
                
               <form action="{{route('biblis.destroy',$book)}}" method="POST"  onsubmit=" return confirm('Are you sur ?');">
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
