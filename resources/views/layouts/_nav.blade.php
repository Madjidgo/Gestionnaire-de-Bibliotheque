<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{route('home')}}">LiBrAry</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav">
       <!--  <li class="nav-item active">
          <a class="nav-link" href="{{ route('home') }}">Create <span class="sr-only">(current)</span></a>
        </li> -->

        <div class="dropdown">
    <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      Diff book
    </button>
    <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
      <a class="dropdown-item" href="#">Roman</a>
      <a class="dropdown-item" href="#">Fiction</a>
    </div> 
  </div>
  
        <li class="nav-item nav-left">
          <a class="nav-link" href="{{route('biblis.create')}}"><i class="fa fa-plus-circle fa-2x" aria-hidden="true"></i></a>
        </li>

      </ul>
    </div>
</nav> 