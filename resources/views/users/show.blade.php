@extends ('layouts/app')



@section('content')


  	<h1 class="text-center">Name :{{$user->name}}</h1>
      <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="card text-center" style="width: 20rem;"">
            <div class="card-body text-cente">
              <h4 class="card-title r">Number CARD:{{$user->number}}</h4>


          	 <a href="{{route('home')}}" class="btn btn-outline-primary text-center"><i class="fa fa-home" aria-hidden="true"></i>
                Home</a>
          
              

            </div>
          </div>
        </div >
       
      </div>
    </div>

@stop