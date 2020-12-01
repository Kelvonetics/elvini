@extends('layouts.app')

@section('content')   {{-- #b99566 --}}


    <section class="home-slider owl-carousel">
          <div class="slider-item" style="background-image:url({{URL::asset('assets/images/slider/Slider1.jpg')}});">
            <div class="overlay"></div>
            <div class="container">
              <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
              <div class="col-md-7 ftco-animate">
                <span class="subheading">Welcome to ELVINI.</span>
                <h1 class="mb-4"> Engineering & Construction Firm</h1>
                <p><a href="{{ route('services') }}" class="btn btn-primary px-4 py-3 mt-3">Our Services</a></p>
              </div>
            </div>
            </div>
          </div>

          <div class="slider-item" style="background-image:url({{URL::asset('assets/images/slider/Slider2.jpg')}});">
            <div class="overlay"></div>
            <div class="container">
              <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
              <div class="col-md-7 ftco-animate">
                <span class="subheading">Professionalism.</span>
                <h1 class="mb-4">Leading Technology. Diversified Service</h1>
                <p><a href="{{ route('services') }}" class="btn btn-primary px-4 py-3 mt-3">Our Services</a></p>
              </div>
            </div>
            </div>
          </div>

          <div class="slider-item" style="background-image:url({{URL::asset('assets/images/slider/Slider3.jpg')}});">
            <div class="overlay"></div>
            <div class="container">
              <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
              <div class="col-md-7 ftco-animate">
                <span class="subheading">Safety & Environment.</span>
                <h1 class="mb-4">Oil & Gas HSE Service</h1>
                <p><a href="{{ route('services') }}" class="btn btn-primary px-4 py-3 mt-3">Our Services</a></p>
              </div>
            </div>
            </div>
          </div>

          <div class="slider-item" style="background-image:url({{URL::asset('assets/images/slider/Slider6.jpg')}});">
            <div class="overlay"></div>
            <div class="container">
              <div class="row no-gutters slider-text align-items-center justify-content-start" data-scrollax-parent="true">
              <div class="col-md-7 ftco-animate">
                <span class="subheading">Consultancy.</span>
                <h1 class="mb-4">Design & Building</h1>
                <p><a href="{{ route('services') }}" class="btn btn-primary px-4 py-3 mt-3">Our Services</a></p>
              </div>
            </div>
            </div>
          </div>
    </section>



    <section class="ftco-section">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-5 order-md-last wrap-about align-items-stretch">
                    <div class="wrap-about-border ftco-animate">
                        <div class="img" style="background-image: url({{URL::asset('assets/images/img/construction.png')}}); border"></div>
                        <div class="text">
                            <h3>Nigerian Local Content Development</h3>
                            <p>
                                In order to develop local capacity and capabilities, we are committed to robust investments in Systems, People and Processes with a view to deliver prime services. We are focus in creating a world-class institution through core competencies, strategic partnerships and intellectual capital. All these on the long term drive the advancement of local content development in Nigeria. 
                            </p>
                            <p><a href="{{ route('contact-us') }}" class="btn btn-primary py-3 px-4">Contact us</a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-7 wrap-about pr-md-4 ftco-animate">
                    <h2 class="mb-4">Our Features</h2>
                    <p>
                        Our primary clients include manufacturing industries, financial institutions, oil & gas companies, private individuals, corporate bodies, government and public institutions, logistics and distribution companies. Our integral core competence includes design and construction of complex and sustainable systems, infrastructures.
                    </p>
                    <div class="row mt-5">
                        <div class="col-lg-6">
                            <div class="services active text-center">
                                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-collaboration"></span></div>
                                <div class="text media-body">
                                    <h3>Project Development</h3>
                                    <p>Egineering & Construction, Project & Construction Management. </p>
                                </div>
                            </div>
                            <div class="services text-center">
                                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-analysis"></span></div>
                                <div class="text media-body">
                                    <h3>Advisory & Documentation </h3>
                                    <p>Consultancy & Securing Approvals from Regulators.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="services text-center">
                                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-handshake"></span></div>
                                <div class="text media-body">
                                    <h3>Partnership</h3>
                                    <p>Joint Ventures, Public Private Partnership, Strategic Partnership. </p>
                                </div>
                            </div>
                            <div class="services text-center">
                                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-search-engine"></span></div>
                                <div class="text media-body">
                                    <h3>Procurement & Facility Management</h3>
                                    <p>Supply & Installation, Maintainance, Facility Upgrade.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="ftco-intro ftco-no-pb img" style="background-image: url({{URL::asset('assets/images/img/bg_3.jpg')}});">
        <div class="container">
            <div class="row justify-content-center mb-5">
          <div class="col-md-10 text-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-0">Professionalism. Leading Technology. Diversified Service.</h2>
          </div>
        </div>  
        </div>
    </section>

    <section class="ftco-counter" id="section-counter">
        <div class="container">
            <div class="row d-md-flex align-items-center justify-content-center">
                <div class="wrapper">
                    <div class="row d-md-flex align-items-center">
                  <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="icon"><span class="flaticon-doctor"></span></div>
                      <div class="text">
                        <strong class="number" data-number="13">0</strong>
                        <span>Projects Completed</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="icon"><span class="flaticon-doctor"></span></div>
                      <div class="text">
                        <strong class="number" data-number="10">0</strong>
                        <span>Satisfied Customer</span>
                      </div>
                    </div>
                  </div>
                  <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="icon"><span class="flaticon-doctor"></span></div>
                      <div class="text">
                        <strong class="number" data-number="2">0</strong>
                        <span>Awards Received</span>
                      </div>
                    </div>
                  </div>
                  {{-- <div class="col-md d-flex justify-content-center counter-wrap ftco-animate">
                    <div class="block-18">
                        <div class="icon"><span class="flaticon-doctor"></span></div>
                      <div class="text">
                        <strong class="number" data-number="3">0</strong>
                        <span>Years of Experienced</span>
                      </div>
                    </div>
                  </div> --}}
              </div>
          </div>
        </div>
        </div>
    </section>

    <section class="ftco-section">
        <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4">Project Portfolio</h2>
            {{-- <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p> --}}
          </div>
        </div>
            <div class="row no-gutters">
                <div class="col-lg-4 d-flex">
                    <div class="services-2 noborder-left text-center ftco-animate">
                        <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-analysis"></span></div>
                        <div class="text media-body">
                            <h3>Project Management</h3>
                            <p>Engineering, Building, Construction & Procurement.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex">
                    <div class="services-2 text-center ftco-animate">
                        <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-business"></span></div>
                        <div class="text media-body">
                            <h3>Power & Energy Systems</h3>
                            <p>Electrical, Thermal & Processing Systems.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex">
                    <div class="services-2 text-center ftco-animate">
                        <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-insurance"></span></div>
                        <div class="text media-body">
                            <h3>Harbour Projects</h3>
                            <p>Jetty, Shoreline protection, Land Reclamation, Dolphins, Marine & offshore projects</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex">
                    <div class="services-2 noborder-left noborder-bottom text-center ftco-animate">
                        <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-money"></span></div>
                        <div class="text media-body">
                            <h3>Equipment Installations</h3>
                            <p>Machines, Equipment Procurement & Installations</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex">
                    <div class="services-2 text-center noborder-bottom ftco-animate">
                        <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-rating"></span></div>
                        <div class="text media-body">
                            <h3>Oil & Gas Facilities</h3>
                            <p>Tank Farms, Pipelines/Piping & Instrumentation, Refinery & Petrochemical Plants Services</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 d-flex">
                    <div class="services-2 text-center noborder-bottom ftco-animate">
                        <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-search-engine"></span></div>
                        <div class="text media-body">
                            <h3>Infrastructure Projects</h3>
                            <p>Road, Building, Drainages. Bridges & Landscaping</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="ftco-intro ftco-no-pb img" style="background-image: url({{URL::asset('assets/images/img/project-9.jpg')}});">
        <div class="container">
            <div class="row justify-content-center">
          <div class="col-lg-12 col-md-12 d-flex align-items-center heading-section heading-section-white ftco-animate">
            <h2 class="mb-3 mb-md-0">Professionalism. Leading Technology. Diversified Service.</h2>
          </div>
          {{-- <div class="col-lg-3 col-md-4 ftco-animate">
            <p class="mb-0"><a href="#" class="btn btn-white py-3 px-4">Request Quote</a></p>
          </div> --}}
        </div>  
        </div>
    </section>

    <section class="ftco-section ftco-no-pb">
        <div class="container-fluid px-0">
            <div class="row no-gutters justify-content-center mb-5">
                 <div class="col-md-7 text-center heading-section ftco-animate">
                    <h2 class="mb-4">Our Completed Projects</h2>
                    {{-- <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p>
                    <p></p> --}}
                 </div>
            </div>

            <div class="row no-gutters">
                <div class="col-md-3">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" 
                        style="background-image: url({{URL::asset('assets/images/project/project1.jpg')}});">
                        <div class="overlay"></div>
                        <a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
                        <div class="text text-center p-4">
                            <h3><a href="#">Construction of petroleum storage tanks, loading gantry and pipeline works</a></h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" 
                        style="background-image: url({{URL::asset('assets/images/project/project2.jpg')}});">
                        <div class="overlay"></div>
                        <a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
                        <div class="text text-center p-4">
                            <h3><a href="#">Piping network with instrumentation</a></h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" 
                        style="background-image: url({{URL::asset('assets/images/project/project3.jpg')}});">
                        <div class="overlay"></div>
                        <a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
                        <div class="text text-center p-4">
                            <h3><a href="#">Construction of concrete jetty</a></h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" 
                        style="background-image: url({{URL::asset('assets/images/project/project4.jpg')}});">
                        <div class="overlay"></div>
                        <a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
                        <div class="text text-center p-4">
                            <h3><a href="#">Raft foundation on in-situ bored piles for petroleum storage tank</a></h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" 
                        style="background-image: url({{URL::asset('assets/images/project/project5.jpg')}});">
                        <div class="overlay"></div>
                        <a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
                        <div class="text text-center p-4">
                            <h3><a href="#">Office complex development</a></h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" 
                        style="background-image: url({{URL::asset('assets/images/project/project6.jpg')}});">
                        <div class="overlay"></div>
                        <a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
                        <div class="text text-center p-4">
                            <h3><a href="#">Fire control and suppression pumps and piping</a></h3>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" 
                        style="background-image: url({{URL::asset('assets/images/project/project7.jpg')}});">
                        <div class="overlay"></div>
                        <a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
                        <div class="text text-center p-4">
                            <h3><a href="#">Land reclamation work</a></h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="project img ftco-animate d-flex justify-content-center align-items-center" 
                        style="background-image: url({{URL::asset('assets/images/project/project8.jpg')}});">
                        <div class="overlay"></div>
                        <a href="#" class="btn-site d-flex align-items-center justify-content-center"><span class="icon-subdirectory_arrow_right"></span></a>
                        <div class="text text-center p-4">
                            <h3><a href="#">Installation of sheet piles along shoreline</a></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>




    <section class="ftco-section bg-light">
        <div class="container">
            <div class="row justify-content-center mb-5 pb-2">
                <div class="col-md-8 text-center heading-section ftco-animate">
                    <h2 class="mb-4"><span>Recent</span> News</h2>
                    {{-- <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p> --}}
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="blog-entry">
                      <a href="blog-single.html" class="block-20 d-flex align-items-end" 
                        style="background-image: url({{URL::asset('assets/images/hse.jpg')}});">
                                        <div class="meta-date text-center p-2">
                          <span class="day">26</span>
                          <span class="mos">June</span>
                          <span class="yr">2019</span>
                        </div>
                      </a>
                      <div class="text bg-white p-4">
                        <h3 class="heading"><a href="#">Health Safety & Environment</a></h3>
                        <p>
                            Health Safety & Environment ...
                        <div class="d-flex align-items-center mt-4">
                            <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                            <p class="ml-auto mb-0">
                                <a href="#" class="mr-2">Elvini</a>
                                <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                            </p>
                        </div>
                      </div>
                    </div>
                </div>

                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="blog-entry">
                      <a href="blog-single.html" class="block-20 d-flex align-items-end" 
                        style="background-image: url({{URL::asset('assets/images/planning.png')}});">
                                        <div class="meta-date text-center p-2">
                          <span class="day">26</span>
                          <span class="mos">June</span>
                          <span class="yr">2019</span>
                        </div>
                      </a>
                      <div class="text bg-white p-4">
                        <h3 class="heading"><a href="#">Engineering & Construction</a></h3>
                        <p>
                           Successful commissioning of Kingdom Global Oil & Gas 400,000 liters storage capacity petrol service station, Port Hartcourt, Rivers State. 
                        </p>
                        <div class="d-flex align-items-center mt-4">
                            <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                            <p class="ml-auto mb-0">
                                <a href="#" class="mr-2">Admin</a>
                                <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                            </p>
                        </div>
                      </div>
                    </div>
                  </div>
                <div class="col-md-6 col-lg-4 ftco-animate">
                    <div class="blog-entry">
                      <a href="blog-single.html" class="block-20 d-flex align-items-end" 
                        style="background-image: url({{URL::asset('assets/images/GasOil.jpg')}});">
                                        <div class="meta-date text-center p-2">
                          <span class="day">26</span>
                          <span class="mos">June</span>
                          <span class="yr">2019</span>
                        </div>
                      </a>
                      <div class="text bg-white p-4">
                        <h3 class="heading"><a href="#">Community Affairs </a></h3>
                        <p>
                            Successful execution and commissioning of 10,500 square meters composite warehouse facility for Obedafe Holdings, Warri, Delta State.
                        </p>
                        <div class="d-flex align-items-center mt-4">
                            <p class="mb-0"><a href="#" class="btn btn-primary">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                            <p class="ml-auto mb-0">
                                <a href="#" class="mr-2">Admin</a>
                                <a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a>
                            </p>
                        </div>
                      </div>
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

 