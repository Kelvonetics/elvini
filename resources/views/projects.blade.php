@extends('layouts.app')

@section('content')   {{-- #b99566 --}}


   

  
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{URL::asset('assets/images/project/project6.jpg')}});">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Project</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="{{ route('home') }}">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Project <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>







    {{-- <section class="ftco-section">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="project mb-4 img ftco-animate d-flex justify-content-center align-items-center" 
              style="background-image: url({{URL::asset('assets/images/project/project1.jpg')}});">
              <div class="overlay"></div>
              <a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
              <div class="text text-center p-4">
                <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                <span>Web Design</span>
              </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="project mb-4 img ftco-animate d-flex justify-content-center align-items-center" 
              style="background-image: url({{URL::asset('assets/images/project/project1.jpg')}});">
              <div class="overlay"></div>
              <a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
              <div class="text text-center p-4">
                <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                <span>Web Design</span>
              </div>
            </div>
          </div>
        </div>


        <h3>Project 1 </h3>
        <div class="row text text-center p-4" style="margin-top: -25px">
            Construction of petroleum storage tanks, loading gantry and pipeline works. 
        </div>
      </div>
    </section> --}}






    <section class="ftco-section">
      <div class="container">  <h2 class="mb-4">All Projects</h2>
        <div class="row">
          <div class="col-md-4">
            <div class="project mb-4 img ftco-animate d-flex justify-content-center align-items-center" 
              style="background-image: url({{URL::asset('assets/images/project/project1.jpg')}});">
              <div class="overlay"></div>
              <a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
              {{-- <div class="text text-center p-4">
                <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                <span>Web Design</span>
              </div> --}}
            </div>
          </div>

          <div class="col-md-4">
            <div class="project mb-4 img ftco-animate d-flex justify-content-center align-items-center" 
              style="background-image: url({{URL::asset('assets/images/project/project2.jpg')}});">
              <div class="overlay"></div>
              <a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
              {{-- <div class="text text-center p-4">
                <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                <span>Web Design</span>
              </div> --}}
            </div>
          </div>

          <div class="col-md-4">
            <div class="project mb-4 img ftco-animate d-flex justify-content-center align-items-center" 
              style="background-image: url({{URL::asset('assets/images/project/project3.jpg')}});">
              <div class="overlay"></div>
              <a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
              {{-- <div class="text text-center p-4">
                <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                <span>Web Design</span>
              </div> --}}
            </div>
          </div>

          <div class="col-md-4">
            <div class="project mb-4 img ftco-animate d-flex justify-content-center align-items-center" 
              style="background-image: url({{URL::asset('assets/images/project/project4.jpg')}});">
              <div class="overlay"></div>
              <a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
              {{-- <div class="text text-center p-4">
                <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                <span>Web Design</span>
              </div> --}}
            </div>
          </div>

          <div class="col-md-4">
            <div class="project mb-4 img ftco-animate d-flex justify-content-center align-items-center" 
              style="background-image: url({{URL::asset('assets/images/project/project5.jpg')}});">
              <div class="overlay"></div>
              <a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
              {{-- <div class="text text-center p-4">
                <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                <span>Web Design</span>
              </div> --}}
            </div>
          </div>

          <div class="col-md-4">
            <div class="project mb-4 img ftco-animate d-flex justify-content-center align-items-center" 
              style="background-image: url({{URL::asset('assets/images/project/project6.jpg')}});">
              <div class="overlay"></div>
              <a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
              {{-- <div class="text text-center p-4">
                <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                <span>Web Design</span>
              </div> --}}
            </div>
          </div>

          <div class="col-md-4">
            <div class="project mb-4 img ftco-animate d-flex justify-content-center align-items-center" 
              style="background-image: url({{URL::asset('assets/images/project/project7.jpg')}});">
              <div class="overlay"></div>
              <a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
              {{-- <div class="text text-center p-4">
                <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                <span>Web Design</span>
              </div> --}}
            </div>
          </div>

          <div class="col-md-4">
            <div class="project mb-4 img ftco-animate d-flex justify-content-center align-items-center" 
              style="background-image: url({{URL::asset('assets/images/project/project8.jpg')}});">
              <div class="overlay"></div>
              <a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
              {{-- <div class="text text-center p-4">
                <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                <span>Web Design</span>
              </div> --}}
            </div>
          </div>

          <div class="col-md-4">
            <div class="project mb-4 img ftco-animate d-flex justify-content-center align-items-center" 
              style="background-image: url({{URL::asset('assets/images/project/project9.jpg')}});">
              <div class="overlay"></div>
              <a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
              {{-- <div class="text text-center p-4">
                <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                <span>Web Design</span>
              </div> --}}
            </div>
          </div>

          <div class="col-md-4">
            <div class="project mb-4 img ftco-animate d-flex justify-content-center align-items-center" 
              style="background-image: url({{URL::asset('assets/images/project/project10.jpg')}});">
              <div class="overlay"></div>
              <a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
              {{-- <div class="text text-center p-4">
                <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                <span>Web Design</span>
              </div> --}}
            </div>
          </div>

          <div class="col-md-4">
            <div class="project mb-4 img ftco-animate d-flex justify-content-center align-items-center" 
              style="background-image: url({{URL::asset('assets/images/project/project11.jpg')}});">
              <div class="overlay"></div>
              <a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
              {{-- <div class="text text-center p-4">
                <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                <span>Web Design</span>
              </div> --}}
            </div>
          </div>

          <div class="col-md-4">
            <div class="project mb-4 img ftco-animate d-flex justify-content-center align-items-center" 
              style="background-image: url({{URL::asset('assets/images/project/project12.jpg')}});">
              <div class="overlay"></div>
              <a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
              {{-- <div class="text text-center p-4">
                <h3><a href="#">Branding &amp; Illustration Design</a></h3>
                <span>Web Design</span>
              </div> --}}
            </div>
          </div>
        </div>

        <div class="row mt-5">
          <div class="col text-center">
            <div class="block-27">
              <ul>
                <li><a href="#">&lt;</a></li>
                <li class="active"><span>1</span></li>                
                <li><a href="#">&gt;</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>





    <section class="ftco-section testimony-section">
         <div class="container">
            <div class="row justify-content-center mb-2">
              <div class="col-md-8 text-center heading-section ftco-animate">
                <h2 class="mb-4">Our Clients Says</h2>                
              </div>
            </div>
            <div class="row ftco-animate justify-content-center">
              <div class="col-md-12">
                <div class="carousel-testimony owl-carousel">
                  <div class="item">
                    <div class="testimony-wrap d-flex">
                      <div class="user-img" style="background-image: url({{URL::asset('assets/images/user.png')}})">
                      </div>
                      <div class="text pl-4">
                        <span class="quote d-flex align-items-center justify-content-center">
                          <i class="icon-quote-left"></i>
                        </span>
                        <p>
                            Dear Francis, your handling of our Port Harcourt service station is sure interesting and commendable.  Please liaise with our project manager on the commissioning. Congratulations to Elvini. <br> 
                            <i> - Company Secretary, 
                            Kingdom Global Oil & Gas. </i> 
                        </p> 
                        <p class="name">Austine Agbebo</p>
                        <span class="position">Kingdom Global Oil & Gas</span>
                      </div>
                    </div>
                  </div>
                  <div class="item">
                    <div class="testimony-wrap d-flex">
                      <div class="user-img" style="background-image: url({{URL::asset('assets/images/user.png')}})">
                      </div>
                      <div class="text pl-4">
                        <span class="quote d-flex align-items-center justify-content-center">
                          <i class="icon-quote-left"></i>
                        </span>
                        <p>
                            Roy, your team is encouraging to work with. We look forward to working with you again and hope you will do well also. <br> 
                            <i> Michael on the successful handover of 10,500 square meters warehouse in Warri, Delta State. </i>
                        </p>
                        <p class="name">Michael Asaboro</p>
                        <span class="position">Obedafe Holdings</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </section>





@endsection

{{-- @section('morris') --}}

<script>     
</script>

 