 @extends('layouts.app')

 @section('content')
 
 
 
 <!-- Contacts-->
 <div class="container">

    <div class="row custom-bg customtx">

          <div class="col-12 col-lg 6 text-center">
            
            <h2 class="text-center py-3 text-uppercase"> CONTACT US </h2>
            

          </div>

    </div>



      <div class="row justify-content">

     
          <div class="col-lg-4 col-md-6  customtx my-3">
         
            <p class="h2 text-dark">Gental Pro </p>
            <p>W 56th St.<br>
              Brooklyn, NY 11238<br>
              Phone: 718.622.8020<br>
              Fax: 718.622.8030<br>
              gentalpro@info.com</p>

    

              <div class="footerOpening my-3 leid">
                <p class="h5">Opening Times</p>
                <div class="openingTimes">
                  <div class="footerTitleUnderline"></div>
                  
                  <div class="openingBar tintBackground">
                    <span class="openingDay ">Monday</span> 
                    <span class="openingTime ">9:30am - 8:00pm</span>
                  </div>
        
                  <div class="openingBar">
                    <span class="openingDay">Tuesday</span> 
                    <span class="openingTime"> 9:00am - 8:00pm</span>
                  </div>
        
                  <div class="openingBar tintBackground">
                    <span class="openingDay ">Wednesday</span> 
                    <span class="openingTime "> 9.30am - 5:30pm</span>
                  </div>
        
                  <div class="openingBar">
                    <span class="openingDay">Thursday</span> 
                    <span class="openingTime"> 9:30am - 5:30pm</span>
                  </div>
        
                  <div class="openingBar tintBackground">
                    <span class="openingDay ">Friday</span> 
                    <span class="openingTime "> 8:30am - 5:30pm</span>
                  </div>
        
                  <div class="openingBar">
                    <span class="openingDay">Saturday</span> 
                    <span class="openingTime"> 9:00am - 1:00pm</span>
                  </div>
        
                </div>
              </div>
             

              <a href="https://www.google.com/maps/place/W+56th+St,+New+York,+NY,+Stati+Uniti/data=!4m2!3m1!1s0x89c2585840405e51:0xaaea88a9ec578865?sa=X&ved=2ahUKEwjt8ZzFgJXpAhXoShUIHQBbCLIQ8gEwAHoECAsQAQ">
              <div class="btn custom-nv w-75">Map & Directions </div></a>

            


          </div>


          <div class="col-lg-6 col-md-6 my-3 custom-nv p-5">

            <form>
              <div class="form-group">
                <label for="formGroupExampleInput">Name</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Your name">
              </div>

              <div class="form-group">
                <label for="formGroupExampleInput">Email</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Your email address">
              </div>

              <div class="form-group">
                <label for="formGroupExampleInput">Phone</label>
                <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Your phone number">
              </div>
              
              <div class="form-group">
                <label for="exampleFormControlTextarea1">Your request</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              
              <div class="text-center">
              <div class="btn btn-danger w-50 ">Send</div></a>
            </div>
            </form>

          </div>

          <div class="col-lg-4 col-md-6  customtx my-3">

            

          </div>

  
     






      </div>


</div>

@endsection