@extends('layouts.app')

@section('content')   {{-- #b99566 --}}


    
    
    <section class="hero-wrap hero-wrap-2" style="background-image: url({{URL::asset('assets/images/project/project3.jpg')}});">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-center justify-content-center">
          <div class="col-md-9 ftco-animate text-center">
            <h1 class="mb-2 bread">Our Services</h1>
            <p class="breadcrumbs">
                <span class="mr-2">
                <a href="{{ route('home') }}">Home <i class="ion-ios-arrow-forward"></i></a>
                </span> <span>Services <i class="ion-ios-arrow-forward"></i></span>
            </p>
          </div>
        </div>
      </div>
    </section>


    <section class="ftco-section" style="margin-top: -50px">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12 wrap-about pr-md-4 ftco-animate">
                    <h2 class="mb-4">Our Services</h2>
                    <p>
                        Elvini Engineering Company limited internal quality control system which span across research and development, training, procurement, production and testing, the company firmly conforms to the codes and standards established by Standards Organization of Nigeria (SON) and International Standards Organization (ISO). We pride ourselves with a Quality Management System design for continual improvement to meet international best practices.
                    </p>
                    <div class="row mt-5">
                        <div class="col-lg-4">
                            <div class="services active text-center">
                                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-collaboration"></span></div>
                                <div class="text media-body">
                                    <h3>Processing & Approval</h3>
                                    <p>
                                        Securing Approvals from Regulators/Authorizing Organizations
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="services text-center">
                                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-analysis"></span></div>
                                <div class="text media-body">
                                    <h3>Construction Services </h3>
                                    <p>Elvini undertakes diverse Construction Management Services</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="services text-center">
                                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-search-engine"></span></div>
                                <div class="text media-body">
                                    <h3>Engineering Services</h3>
                                    <p>Elvini undertakes diverse Engineering Services. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="services text-center">
                                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-handshake"></span></div>
                                <div class="text media-body">
                                    <h3>Advisory Services</h3>
                                    <p>We play Advisory/Consultancy role in our industry.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="services text-center">
                                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-search-engine"></span></div>
                                <div class="text media-body">
                                    <h3> Building & Design</h3>
                                    <p>Building, Design, Landscaping & Construction Services. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="services text-center">
                                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-handshake"></span></div>
                                <div class="text media-body">
                                    <h3>Partnerships</h3>
                                    <p>Partnership and Collaboration.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="services text-center">
                                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-handshake"></span></div>
                                <div class="text media-body">
                                    <h3>Facility Management</h3>
                                    <p>Real Estate and Facility Management Services.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="services text-center">
                                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-handshake"></span></div>
                                <div class="text media-body">
                                    <h3>Procurement</h3>
                                    <p>Procurement Management Services.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="services text-center">
                                <div class="icon mt-2 d-flex justify-content-center align-items-center"><span class="flaticon-handshake"></span></div>
                                <div class="text media-body">
                                    <h3>Project Management</h3>
                                    <p>Project Management Services.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    

    <section class="ftco-section" style="margin-top: -100px">
        <div class="container">
        <div class="row justify-content-center mb-5 pb-2">
          <div class="col-md-8 text-center heading-section ftco-animate">
            <h2 class="mb-4">Project Portfolio</h2>
            {{-- <p>Separated they live in. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country</p> --}}
          </div>
        </div>
            <div class="row no-gutters" style="margin-top: -60px">
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
    







@endsection

{{-- @section('morris') --}}

<script>     
</script>

 