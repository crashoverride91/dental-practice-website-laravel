<!--Navbar-->

      
 <nav class="navbar navbar-expand-xl custom-nv">
  <i class="fas fa-tooth text-white mx-2"></i>
    <a class="navbar-brand text-white">Gental Pro</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample06" aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon "><i class="fas fa-bars text-white"></i></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarsExample06">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{route('homepage')}}">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('team')}}">Team</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('services')}}">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('technology')}}">Technology</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('contacts')}}">Contacts</a>
        </li>
       
      </ul>
      <form class="form-inline my-2 my-md-0">
        <input class="form-control" type="text" placeholder="Search">
      </form>
    </div>
  </nav>

