

@extends('layouts.app')

@section('content')

	<h1 class="text-center"> {{$books->count()}} {{ str_plural('BOOK',$books->count()) }}</h1>


	@if(count($books) >0)
	<h2>LisTing</h2>
	<ul>
	@foreach($books as $book)
	<li>
		<a href="{{route('biblis.show',$book)}}"></a>

	@if( $book->borrow == 1)
	Book :{{$book->title}} borrow by: {{ $book->user->name}}
	@endif


	
	</li>
	@endforeach

		{{-- $biblis->links('vendor.pagination.bootstrap-4') --}} 
	</ul>
	@endif

  <section class="main w3-container w3-margin container text-center table-responsive">
     <table class="w3-table-all table table-striped table-bordered ">

		<thead>
          	<tr>
            	<th>#</th>
            	<th>Title</th>
	    		<th>Borrow by	</th>
	    		<th>Action</th>
        	</tr>
		</thead>

		<tbody>
			@foreach($books as $book)
 			<tr>
	    
	    		<td>
	      			<a href="{{route('biblis.show',$book)}}">{{$book->id}}</a>
	    		</td>

	    		<td>
	      			<a href="{{route('biblis.show',$book)}}">{{$book->title}}</a>
	    		</td>

	    		<td>
	    		@if($book->borrow == 1)
	      			<a href="{{route('users.show',$book)}}">{{$book->user->name}}</a>
	    		@else
	    		    <a href="{{route('home')}} btn btn-danger">available</a>
	    		
	    		@endif
	    		</td>

	    		<td class="row">
	    		
	      			  <a href="{{route('biblis.show',$book)}}" class="btn btn-outline-primary "><i class="fa fa-eye" aria-hidden="true"></i></a>
             			<a href="{{route('biblis.edit',$book)}}" class="btn btn-outline-secondary "><i class="fa fa-pencil" aria-hidden="true"></i></a>

            <!-- form delete -->
		           <form action="{{route('biblis.destroy',$book)}}" method="POST" '>
		           {{ csrf_field() }}
		           {{ method_field('DELETE') }}
		           <button type="submit" class="btn btn-outline-danger"><i class="fa fa-trash-o fa-lg"></i></button>
		          </form>
		      	
	    		</td>


				</tr>
				@endforeach
			</tbody>
		</table>
	</section>

@endsection