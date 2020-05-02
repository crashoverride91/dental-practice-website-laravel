
<!--Nav 

<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top py-3" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">Start Bootstrap</a><button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto my-2 my-lg-0">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="">About</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="">Services</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>

Comment-->



<!--Navbar-->

      
 <nav class="navbar navbar-expand-xl custom-nv">
    <a class="navbar-brand" href="#">Gental Pro</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample06" aria-controls="navbarsExample06" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon "><i class="fas fa-bars text-white"></i></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarsExample06">
      <ul class="navbar-nav">
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

