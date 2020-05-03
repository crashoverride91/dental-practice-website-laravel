<!--Technology-->

@extends('layouts.app')

@section('content')
      


<div class="container-fluid page-section customtx ">
    
    <div class="row justify-content-center custom-bg">

        <h2 class="text-center py-2 text-uppercase"> Technology</h2>

    </div>
    
    
    <div class="row my-5 custom-bg customtx">

     @foreach($technology as $machine)
      <div class="col-12 col-lg-3 my-4">
        <div class="card border-0 shadow h-100">
          <a href="" class="text-decoration-none">
          <img src="{{$machine['img']}}" class="card-img-top" alt="...">
          <div class="card-body text-center">
            <h5 class="card-title mb-0 customtx">{{$machine['name']}}</h5>
            <div class="card-text text-black-50">{{$machine['description']}}</div>
          </div>
        </a>
        </div>
      </div>
   
     
      @endforeach

      
  
    </div>

</div>

@endsection