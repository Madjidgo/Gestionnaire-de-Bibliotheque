@extends ('layouts/app')



@section('content')


  	<h1 class="text-center">TITLE :{{$user->name}}</h1>
      <div class="container">
      <div class="row">
        <div class="col-sm-6">
          <div class="card text-center" style="width: 20rem;"">
            <div class="card-body text-cente">
              <h4 class="card-title r">Number:{{$user->number}}</h4>


          	 <a href="{{route('home')}}" class="btn btn-outline-primary"><i class="fa fa-home" aria-hidden="true"></i>
                Home</a>
          
              

            </div>
          </div>
        </div >
       
      </div>
    </div>

@stop