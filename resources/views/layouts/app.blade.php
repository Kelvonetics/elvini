<!DOCTYPE html>
<html lang="en">
  <head>
    <title> ELVINI - ENGINEERING COMPANY LIMITED. </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Elvini Engineering Company Limited is a well-capitalized result-oriented and innovative multidisciplinary Nigerian contracting company offering first-class and full-scale integrated solutions spanning building, engineering, procurement and supply, installation, construction, project and construction management, facility management, maintenance and logistics">
    
	<meta name="keywords" content="Elvini, Engineering Services, Building and Construction Services, manufacturing industries, Petroleum storage tanks and associated facilities, Pipeline design and construction, Gas, Thermal and Processing systems, Jetty, Shoreline protection, Land reclamation, Marine and offshore projects, Petroleum refinery and petrochemical plants services, Power, energy and water projects, Soil improvement and deep foundations, Civil, electrical, mechanical and Infrastructure projects, Non-Destructive Testing/Examination, Geotechnical Investigation">
	<meta property="og:title" content="SAP Cloud Applications Studio for SAP Business ByDesign">
    <!-- App Icons -->
    <link rel="shortcut icon" href="{{ asset('assets/images/settings.png') }}">
    
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans:300,400,600,700,800,900&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ asset('assets/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icons.css') }}">
    
    <link rel="stylesheet" href="{{ asset('assets/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
  </head>

  <style>
    *
    {
      font-size: 15px;
    }
      ul li.megamenu-item > a::after,
      ul li.has-down > a::after 
      {
        color: #ffffff; 
      }
        @media only screen and (min-width: 768px) and (max-width: 991px) 
        {
          ul li.megamenu-item > a::after,
          ul li.has-down > a::after 
          {
            color: #003679; 
          } 
        }
        @media only screen and (max-width: 767px) 
        {
          ul li.megamenu-item > a::after,
          ul li.has-down > a::after 
          {
            color: #003679; 
          } 
        }
        .megamenu 
        {
          position: absolute;
          width: 100%;
          left: 0;
          top: 100%;
          background-color: #ffffff;
          z-index: 200;
          box-shadow: 0 1px 4px rgba(0, 0, 0, 0.15); 
        }



   ul li .megamenu .single-mega.cn-col-5 {
    width: 20%;
    float: left;
    padding: 15px;
    border-right: 1px solid #f2f4f8; }
     ul li .megamenu .single-mega.cn-col-5:last-of-type {
      border-right: none; }
   ul li .megamenu .single-mega.cn-col-4 {
    width: 32%;
    float: left;
    padding: 15px;
    border-right: 1px solid #f2f4f8; }
     ul li .megamenu .single-mega.cn-col-4:last-of-type {
      border-right: none; }
   ul li .megamenu .single-mega.cn-col-3 {
    width: 33.3333334%;
    float: left;
    padding: 15px;
    border-right: 1px solid #f2f4f8; }
     ul li .megamenu .single-mega.cn-col-3:last-of-type {
      border-right: none; }
   ul li .megamenu .single-mega .title {
    font-size: 14px;
    border-bottom: 1px solid #f2f4f8;
    padding: 8px 12px; }
 ul li .dropdown li a {
  border-bottom: 1px solid rgba(242, 244, 248, 0.7); }
 ul li .dropdown li:last-child a {
  border-bottom: none; text-decoration: none; }
  a
  {
    text-decoration: none!important;
  }

  .active-nav-link
  {
      color: #b99566!important;
  }


  /*.overlay 
  {
    background-color: #b99566!important;
  }*/


  </style>


    <body>

        <div class="bg-top navbar-light">
            <div class="container">
                <div class="row no-gutters d-flex align-items-center align-items-stretch">
                    <div class="col-md-6 d-flex align-items-center py-4">
                        <a class="navbar-brand" style="font-size: 20px" href="#">ELVINI ENGINEERING COMPANY LIMITED.</a>
                    </div>

                    <div class="col-lg-6 d-block">
                        <div class="row d-flex">
                            <div class="col-md d-flex topper align-items-center align-items-stretch py-md-12">
                                {{-- <div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div> --}}
                                <div style="margin-top: 25px">
                                    <span>Professionalism. Leading Technology. Diversified Service.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-dark bg-dark ftco-navbar-light" id="ftco-navbar">
            <div class="container d-flex align-items-center">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span> Menu
              </button>
              {{-- <form action="#" class="searchform order-lg-last">
              <div class="form-group d-flex">
                <input type="text" class="form-control pl-3" placeholder="Search">
                <button type="submit" placeholder="" class="form-control search"><span class="ion-ios-search"></span></button>
              </div>
            </form>
              --}}



              @php
                  $crumbs = explode("/",$_SERVER["REQUEST_URI"]);   //dd($crumbs['1']);
              @endphp

              <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item @if($crumbs['1'] == 'home') active @endif">
                      <a href="{{ route('home') }}" id="home" class="nav-link pl-0">Home</a></li>
                    <li class="nav-item @if($crumbs['1'] == 'about') active @endif">
                      <a href="{{ route('about') }}" id="about" class="nav-link">About</a></li>
                    <li class="nav-item @if($crumbs['1'] == 'projects') active @endif">
                      <a href="{{ route('projects') }}" id="projects" class="nav-link">Projects</a>
                        <div class="megamenu" id="mega-proj" style="display: none; width: 70%; margin-left: 15%; margin-right: auto;">
                            <ul class="single-mega cn-col-4">
                                <li class="nav-item" style="list-style: none!important">
                                  <a href="{{ route('projects') }}"> <span class="ion-ios-arrow-round-forward mr-2"></span>
                                    Petroleum storage tanks and associated facilities
                                  </a>
                                </li>
                                <li class="nav-item" style="list-style: none!important">
                                  <a href="{{ route('projects') }}"> <span class="ion-ios-arrow-round-forward mr-2"></span>
                                    Pipeline design and construction
                                  </a>
                                </li>
                                <li class="nav-item" style="list-style: none!important">
                                  <a href="{{ route('projects') }}"> <span class="ion-ios-arrow-round-forward mr-2"></span>
                                    Gas, Thermal and Processing systems
                                  </a>
                                </li>
                                <li class="nav-item" style="list-style: none!important">
                                  <a href="{{ route('projects') }}"> <span class="ion-ios-arrow-round-forward mr-2"></span>
                                    Residential, industrial and commercial buildings and associated facilities
                                  </a>
                                </li>
                                <li class="nav-item" style="list-style: none!important">
                                  <a href="{{ route('projects') }}"> <span class="ion-ios-arrow-round-forward mr-2"></span>
                                    Jetty, Shoreline protection, Land reclamation, Marine and offshore projects
                                  </a>
                                </li>
                            </ul>
                            <ul class="single-mega cn-col-4">
                                <li class="nav-item" style="list-style: none!important">
                                  <a href="{{ route('projects') }}"> <span class="ion-ios-arrow-round-forward mr-2"></span>
                                    Machines, Equipment procurement and installations
                                  </a>
                                </li>
                                <li class="nav-item" style="list-style: none!important">
                                  <a href="{{ route('projects') }}"> <span class="ion-ios-arrow-round-forward mr-2"></span>
                                    Petroleum refinery and petrochemical plants services
                                  </a>
                                </li>
                                <li class="nav-item" style="list-style: none!important">
                                  <a href="{{ route('projects') }}"> <span class="ion-ios-arrow-round-forward mr-2"></span>
                                    Rigid and flexible roads
                                  </a>
                                </li>
                                <li class="nav-item" style="list-style: none!important">
                                  <a href="{{ route('projects') }}"> <span class="ion-ios-arrow-round-forward mr-2"></span>
                                    Consultancy
                                  </a>
                                </li>
                                <li class="nav-item" style="list-style: none!important">
                                  <a href="{{ route('projects') }}"> <span class="ion-ios-arrow-round-forward mr-2"></span>
                                    Power, energy and water projects
                                  </a>
                                </li>
                            </ul>
                            <ul class="single-mega cn-col-4">
                                <li class="nav-item" style="list-style: none!important">
                                  <a href="{{ route('projects') }}"> <span class="ion-ios-arrow-round-forward mr-2"></span>
                                    Soil improvement and deep foundations
                                  </a>
                                </li>
                                <li class="nav-item" style="list-style: none!important">
                                  <a href="{{ route('projects') }}"> <span class="ion-ios-arrow-round-forward mr-2"></span>
                                    Civil, electrical, mechanical and Infrastructure projects
                                  </a>
                                </li>
                                <li class="nav-item" style="list-style: none!important">
                                  <a href="{{ route('projects') }}"> <span class="ion-ios-arrow-round-forward mr-2"></span>
                                    Non-Destructive Testing/Examination
                                  </a>
                                </li>
                                <li class="nav-item" style="list-style: none!important">
                                  <a href="{{ route('projects') }}"> <span class="ion-ios-arrow-round-forward mr-2"></span>
                                    Geotechnical Investigation
                                  </a>
                                </li>
                            </ul>
                        </div>
                    </li>
                    <li class="nav-item @if($crumbs['1'] == 'services') active @endif">
                      <a href="{{ route('services') }}" id="services" class="nav-link">Services</a>
                        <div class="megamenu" id="mega-serv" style="display: none; width: 70%; margin-left: 15%; margin-right: auto;">
                            <ul class="single-mega cn-col-4">
                                <li class="nav-item" style="list-style: none!important">
                                  <a href="{{ route('services') }}"> <span class="ion-ios-arrow-round-forward mr-2"></span>
                                    Documents Processing and Secure Approvals from Regulators/Authorizing Organizations
                                  </a>
                                </li>
                                <li class="nav-item" style="list-style: none!important">
                                  <a href="{{ route('services') }}"> <span class="ion-ios-arrow-round-forward mr-2"></span>
                                    Project Management Services
                                  </a>
                                </li>
                                <li class="nav-item" style="list-style: none!important">
                                  <a href="{{ route('services') }}"> <span class="ion-ios-arrow-round-forward mr-2"></span>
                                    Construction Management Services
                                  </a>
                                </li>
                            </ul>
                            <ul class="single-mega cn-col-4">
                                <li class="nav-item" style="list-style: none!important">
                                  <a href="{{ route('services') }}"> <span class="ion-ios-arrow-round-forward mr-2"></span>
                                    Engineering Services
                                  </a>
                                </li>
                                <li class="nav-item" style="list-style: none!important">
                                  <a href="{{ route('services') }}"> <span class="ion-ios-arrow-round-forward mr-2"></span>
                                    Advisory Services
                                  </a>
                                </li>
                                <li class="nav-item" style="list-style: none!important">
                                  <a href="{{ route('services') }}"> <span class="ion-ios-arrow-round-forward mr-2"></span>
                                    Building and Construction Services
                                  </a>
                                </li>
                            </ul>
                            <ul class="single-mega cn-col-4">
                                <li class="nav-item" style="list-style: none!important">
                                  <a href="{{ route('services') }}"> <span class="ion-ios-arrow-round-forward mr-2"></span>
                                    Partnerships
                                  </a>
                                </li>
                                <li class="nav-item" style="list-style: none!important">
                                  <a href="{{ route('services') }}"> <span class="ion-ios-arrow-round-forward mr-2"></span>
                                    Real Estate and Facility Management Services
                                  </a>
                                </li>
                                <li class="nav-item" style="list-style: none!important">
                                  <a href="{{ route('services') }}"> <span class="ion-ios-arrow-round-forward mr-2"></span>
                                    Procurement Management Services
                                  </a>
                                </li>
                            </ul>
                        </div>
                    </li>

                    <li class="nav-item @if($crumbs['1'] == 'blog') active @endif">
                      <a href="#" id="blog" class="nav-link">Blog</a></li>
                    <li class="nav-item @if($crumbs['1'] == 'contact-us') active @endif">
                      <a href="{{ route('contact-us') }}" id="contact-us" class="nav-link">Contact</a></li>
                </ul>
              </div>


                    <div class="col-lg-6 d-block">
                        <div class="row d-flex">
                            <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                                <div class="icon d-flex justify-content-center align-items-center"><span class="icon-paper-plane"></span></div>
                                <div class="text" style="color: #fff">
                                    <span style="color: #fff">Email</span>
                                    <span>info@elviniengineering.com.ng</span>
                                </div>
                            </div>
                            <div class="col-md d-flex topper align-items-center align-items-stretch py-md-4">
                                <div class="icon d-flex justify-content-center align-items-center"><span class="icon-phone2"></span></div>
                                <div class="text" style="color: #fff">
                                    <span style="color: #fff">Call</span>
                                    <span>Call Us: +2348026732467</span>
                                </div>
                            </div>
                            {{-- <div class="col-md topper d-flex align-items-center justify-content-end">
                                <p class="mb-0 d-block">
                                    <a href="#" class="btn py-2 px-3 btn-primary">
                                        <span>Free Consulting</span>
                                    </a>
                                </p>
                            </div> --}}
                        </div>
                    </div>
            </div>
        </nav>
    <!-- END nav -->
    
        


         @yield('content')


                


        
    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-6 col-lg-5">
            <div class="ftco-footer-widget mb-5">
                <h2 class="ftco-heading-2">Location & Address</h2>
                <div class="block-23 mb-3">
                  <ul>
                    <li><span class="icon icon-map-marker"></span>
                      <span>Head Office:</span>
                      <span class="text"> 
                      NO 28, Adeleke Street, Off Allen Avenue, Ikeja, Lagos State.</span>
                    </li>

                    <li><span class="icon icon-map-marker"></span>
                      <span>Italy Office:</span>
                      <span class="text"> 
                      Via Donghi 28/15, 16132, Genova, Italy.</span>
                    </li>
                    <li><a href="#"><span class="icon icon-phone"></span><span class="text"> +2348026732467, +393510548130</span></a></li>
                  </ul>
                </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-2">
            <div class="ftco-footer-widget mb-5">
              <h2 class="ftco-heading-2">Services</h2>
              <div class="block-21 mb-4 d-flex">
                <div class="text">
                  <h3 class="heading">
                    <a href="#">Contruction</a>
                    <a href="#">Design</a>
                    <a href="#">Consultancy</a>
                    <a href="#">Procurement</a>
                  </h3>
                  {{-- <div class="meta">
                    <div><a href="#"><span class="icon-calendar"></span> June 27, 2019</a></div>
                    <div><a href="#"><span class="icon-person"></span> Admin</a></div>
                    <div><a href="#"><span class="icon-chat"></span> 19</a></div>
                  </div> --}}
                </div>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-lg-2">
            <div class="ftco-footer-widget mb-5 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="{{ route('home') }}"><span class="ion-ios-arrow-round-forward mr-2"></span>Home</a></li>
                <li><a href="{{ route('about') }}"><span class="ion-ios-arrow-round-forward mr-2"></span>About</a></li>
                <li><a href="{{ route('services') }}"><span class="ion-ios-arrow-round-forward mr-2"></span>Services</a></li>
                <li><a href="{{ route('projects') }}"><span class="ion-ios-arrow-round-forward mr-2"></span>Projects</a></li>
                <li><a href="{{ route('contact-us') }}"><span class="ion-ios-arrow-round-forward mr-2"></span>Contact</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-6 col-lg-3">
            <div class="ftco-footer-widget mb-5">
                <h2 class="ftco-heading-2">Subscribe Us!</h2>
              <form action="#" class="subscribe-form">
                <div class="form-group">
                  <input type="text" class="form-control mb-2 text-center" placeholder="Enter email address">
                  <input type="submit" value="Subscribe" class="form-control submit px-3">
                </div>
              </form>
            </div>
            <div class="ftco-footer-widget mb-5">
                <h2 class="ftco-heading-2 mb-0">Connect With Us</h2>
                <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-3">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ asset('assets/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('assets/js/aos.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('assets/js/scrollax.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('assets/js/google-map.js') }}"></script>
  <script src="{{ asset('assets/js/main.js') }}"></script>
    
  </body>
</html>

























       

        @yield('morris')


        <!-- TOOLTIP -->
        <script>
            $(function()
            {
               $('#projects').hover(function()
               {
                  $('#mega-proj').slideDown();    $('#mega-serv').fadeOut();    //$this.removeClass('show-dropdown');
               });

               $('#mega-proj').mouseleave(function()
               {
                  $('#mega-proj').fadeOut();    $('#mega-serv').fadeOut();     //$this.removeClass('show-dropdown');
               });


               $('#services').hover(function()
               {
                  $('#mega-serv').slideDown();    $('#mega-proj').fadeOut();    //$this.removeClass('show-dropdown');
               });

               $('#mega-serv').mouseleave(function()
               {
                  $('#mega-serv').fadeOut();    $('#mega-proj').fadeOut();    //$this.removeClass('show-dropdown');
               });




              $('.nav-link').click(function()
              {
                  var id = $(this).attr("id");
                  $('#'+id).addClass('active-nav-link');
              });
            });
        </script>





    </body>
</html>
