<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
  <!-- Latest compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
  

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>           
  
  <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="background-color: #00838f !important">
            <ul class=" navbar-nav  mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="/gallery">Gallery</a>
                </li>
                <li class="nav-item">
                    <a href="/noticeBoard" class="nav-link">Notice Board</a>
                </li>
                <li class="nav-item">
                    <a href="/tenders " class="nav-link">Tenders</a>
                </li>
                <li class="nav-item">
                    <a href="https://portal.egojittc.ac.ke/index.php/login" class="nav-link">Portal</a>
                </li>
            </ul>
        </nav>
        <nav class="navbar navbar-expand-lg navbar-light bg-light" style="background-color: #fff !important">
            <a class="navbar-brand" href="#"><img src="https://web.archive.org/web/20220116054906im_//assets/img/logo.jpg" width="50" alt=""> </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/home">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            About
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/iso">ISO 9001:  2015 Certification</a>
    
                            <a class="dropdown-item" href="/missionvison">Mission and Vision</a>
                            <a class="dropdown-item" href="/bom">Board of Mangement</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/management">School Management</a>
                        </div>
                    </li>
    
                    <li class="nav-item">
                        <a class="nav-link" href="/courses">Courses</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Student Center
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/council">Student Council</a>
                            <a class="dropdown-item" href="/gs">Games and Sports</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="/cs">Clubs and Society</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Administrators
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="/speech/bom"> The Chairman BOM</a>
                            <a class="dropdown-item" href="/speech/principal"> The Principal</a>
                            
                            <a class="dropdown-item" href="/speech/dep">Deputy Principal</a>
                            <a class="dropdown-item" href="/speech/dean">Dean Of Students</a>
                            
                            <a class="dropdown-item" href="/speech/deancurr">Dean Of Curriculum</a> 
                            <div class="dropdown-divider"></div> 
                        </div>
                    </li>
                    
    
    
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact Us</a>
                    </li>
    
                </ul>
    
            </div>
        </nav>  

        <main class="py-4">
            @yield('content')
        </main>
        {{-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script> --}}

        <footer class="page-footer font-small bg-dark pt-4">
 
            <div class="container-fluid text-center text-md-left">
              <div class="row">
           
                <div class="col-md-6 mt-md-0 mt-3">
          
                  <!-- Content -->
                  <h5 class="text-uppercase">St. Lawrence Egoji Teachers’ College</h5>
                  <a class="navbar-brand" href=" http://egojittc.ac.ke/"><img src="https://web.archive.org/web/20220116054906im_//assets/img/logo.jpg" width="100" alt="">  </a>
          
                </div> 
          
                <hr class="clearfix w-100 d-md-none pb-3">
                <div class="col-md-3 mb-md-0 mb-3">
          
                  <!-- Links -->
                  <h5 class="text-uppercase">Quick Links</h5>
          
                  <ul class="list-unstyled">
                    <li>
                    <a href="/missionvison">Mission and Vision</a>
                    </li>
                    <li>
                    <a href="/bom">Board of Mangement</a>
                    </li>
                    <li>
                    <a href="/management">School Management</a>
                    </li>
                    <li>
                    <a href="/contact">Contact Us</a>
                    </li>
                  </ul>
          
                </div> 
                <div class="col-md-3 mb-md-0 mb-3">
          
                  <!-- Links -->
                  <h5 class="text-uppercase">Secondary Links</h5>
          
                  <ul class="list-unstyled">
                    <li>
                    <a href="/downloads">Downloads</a>
                    </li>
                    <li>
                    <a href="/gallery">Gallery</a>
                    </li>
                    <li>
                    <a href="/noticeBoard">Notice Board</a>
                    </li>
                    <li>
                    <a href="/tenders ">Tenders</a>
                    </li>
                  </ul>
          
                </div> 
              </div> 
            </div> 
            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2020 Copyright:
              <a href="mailto:9davidmuia@gmail.com"> 9davidmuia@gmail.com</a>
            </div> 
          </footer>
    </div>
</body>
</html>
