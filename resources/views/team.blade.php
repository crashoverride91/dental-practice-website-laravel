@extends('layouts.app')

@section('content')
    
<section class="page-section custom-bg customtx" id="team">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6 text-center">
                <h2 class=" my-3 text-uppercase">The team</h2>
                <p>The team treats all general and restorative dentistry needs, such as teeth cleanings, dental fillings, root canals, and toothaches, in their office. Patients seeking relief from periodontal disease, temporomandibular joint (TMJ) disorder, or sleep apnea can also find treatment options.</p>
            </div>
        </div>
  

            <div class="row justify-content-center">
                @foreach($team as $member)
                <div class="col-12 col-lg-3">

                    
                    <div class="card border-0 shadow">
                    <img src="{{$member['img']}}" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <h5 class="card-title mb-0">{{$member['name']." ".$member['surname']}}</h5>
                            <div class="card-text text-black-50">{{$member['role']}} 
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                


            </div>
    </div>
</section>




@endsection