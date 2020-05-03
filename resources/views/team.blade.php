@extends('layouts.app')

@section('content')
    
<section class="page-section custom-bg customtx" id="team">
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 col-lg-12 my-1">
                <h2 class=" text-uppercase text-center">The team</h2>
                <p class="my-3">The team treats all general and restorative dentistry needs, such as teeth cleanings, dental fillings, root canals, and toothaches, in their office. Patients seeking relief from periodontal disease, temporomandibular joint (TMJ) disorder, or sleep apnea can also find treatment options.</p>
            </div>
        </div>
  

            <div class="row justify-content-center">
                @foreach($team as $member)
                <div class="col-12 col-lg-3">

                    
                    <div class="card border-0 shadow">
                    <img src="{{$member['img']}}" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-0">{{$member['name']." ".$member['surname']}}</h5>
                            <div class="card-text text-black-50">{{$member['role']}}<br>
                                <p>{{$member['description']}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                


            </div>
    </div>
</section>




@endsection