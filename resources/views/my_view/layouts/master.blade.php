<!DOCTYPE html>
<html lang="zh-TW">
  <head>
    {{-- <title>Browse &mdash; Free Website Template by Free-Template.co</title> --}}
    <title>@yield('title')</title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="Free-Template.co" />

    <link rel="shortcut icon" href="ftco-32x32.png">

    <link href="https://fonts.googleapis.com/css?family=Rubik:400,700" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('fonts/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/owl.theme.default.min.css')}}">
    
    <link rel="stylesheet" href="{{ asset('css/bootstrap-datepicker.css')}}">

    <link rel="stylesheet" href="{{ asset('fonts/flaticon/font/flaticon.css')}}">

    <link rel="stylesheet" href="{{ asset('css/aos.css')}}">
    <link rel="stylesheet" href="{{ asset('css/rangeslider.css')}}">

    <link rel="stylesheet" href="{{ asset('css/style.css')}}">


    {{-- <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/rangeslider.css">

    <link rel="stylesheet" href="css/style.css">
     --}}
  </head>
  <body>

        {{-- header.blade.php --}}
        <div class="site-wrap">

                <div class="site-mobile-menu">
                  <div class="site-mobile-menu-header">
                    <div class="site-mobile-menu-close mt-3">
                      <span class="icon-close2 js-menu-toggle"></span>
                    </div>
                  </div>
                  <div class="site-mobile-menu-body"></div>
                </div>

                {{-- navbar.blade.php --}}
                <header class="site-navbar" role="banner">
            
                  <div class="container">
                    <div class="row align-items-center">
                      
                      <div class="col-11 col-xl-2">
                      <h1 class="mb-0 site-logo"><a href="{{ route('index')}}" class="text-white h2 mb-0">Home</a></h1>
                        {{-- <h1 class="mb-0 site-logo"><a href="index.html" class="text-white h2 mb-0">Browse</a></h1> --}}
                      </div>
                      <div class="col-12 col-md-10 d-none d-xl-block">
                        <nav class="site-navigation position-relative text-right" role="navigation">
            
                          <ul class="site-menu js-clone-nav mr-auto d-none d-lg-block">
                            <li class="active"><a href="{{ route('home')}}"><span>Login</span></a></li>
                            {{-- <li class="active"><a href="index.html"><span>Home</span></a></li> --}}
                            {{-- Dropdown功能先註解掉 --}}
                            {{-- <li class="has-children">
                              <a href="about.html"><span>Dropdown</span></a>
                              <ul class="dropdown arrow-top">
                                <li><a href="#">Menu One</a></li>
                                <li><a href="#">Menu Two</a></li>
                                <li><a href="#">Menu Three</a></li>
                                <li class="has-children">
                                  <a href="#">Dropdown</a>
                                  <ul class="dropdown">
                                    <li><a href="#">Menu One</a></li>
                                    <li><a href="#">Menu Two</a></li>
                                    <li><a href="#">Menu Three</a></li>
                                    <li><a href="#">Menu Four</a></li>
                                  </ul>
                                </li>
                              </ul>
                            </li> --}}
                            <li><a href="{{ route('viewlist')}}"><span>Viewlist</span></a></li>
                            <li><a href="{{ route('viewinfo')}}"><span>Viewinfo</span></a></li>
                            <li><a href="{{ route('listings')}}"><span>Listings</span></a></li>
                            <li><a href="{{ route('contact')}}"><span>Contact</span></a></li>
                            {{-- <li><a href="listings.html"><span>Listings</span></a></li> --}}
                            {{-- <li><a href="about.html"><span>About</span></a></li> --}}
                            {{-- <li><a href="blog.html"><span>Blog</span></a></li> --}}
                            {{-- <li><a href="contact.html"><span>Contact</span></a></li> --}}
                          </ul>
                        </nav>
                      </div>
            
            
                      <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>
            
                      </div>
            
                    </div>
                  </div>
                  
                </header>

                {{-- content --}}
                @yield('content')

                {{-- footer.blade.php --}}
                <footer class="site-footer">
                    <div class="row pt-5 mt-5">
                        <div class="col-12 text-md-center text-left">
                            <p>
                              <!-- Link back to Free-Template.co can't be removed. Template is licensed under CC BY 3.0. -->
                              &copy; 2019 <strong class="text-black">Browse</strong> Free Template. All Rights Reserved. <br> Design by <a href="https://free-template.co/" target="_blank" class="text-black">Free-Template.co</a>
                            </p>
                        </div>
                    </div>
                </footer>
        </div>
    
        {{-- master.blade.php --}}
        <script src="{{ asset('js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{ asset('js/jquery-migrate-3.0.1.min.js')}}"></script>
        <script src="{{ asset('js/jquery-ui.js')}}"></script>
        <script src="{{ asset('js/popper.min.js')}}"></script>
        <script src="{{ asset('js/bootstrap.min.js')}}"></script>
        <script src="{{ asset('js/owl.carousel.min.js')}}"></script>
        <script src="{{ asset('js/jquery.stellar.min.js')}}"></script>
        <script src="{{ asset('js/jquery.countdown.min.js')}}"></script>
        <script src="{{ asset('js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{ asset('js/bootstrap-datepicker.min.js')}}"></script>
        <script src="{{ asset('js/aos.js')}}"></script>
        <script src="{{ asset('js/rangeslider.min.js')}}"></script>

        <script src="{{ asset('js/typed.js')}}"></script>

        <script src="{{ asset('js/main.js')}}"></script>

        {{-- <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/jquery-migrate-3.0.1.min.js"></script>
        <script src="js/jquery-ui.js"></script>
        <script src="js/popper.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/owl.carousel.min.js"></script>
        <script src="js/jquery.stellar.min.js"></script>
        <script src="js/jquery.countdown.min.js"></script>
        <script src="js/jquery.magnific-popup.min.js"></script>
        <script src="js/bootstrap-datepicker.min.js"></script>
        <script src="js/aos.js"></script>
        <script src="js/rangeslider.min.js"></script> --}}
        
      
        {{-- <script src="js/typed.js"></script> --}}
                  <script>
                  var typed = new Typed('.typed-words', {
                  strings: ["Taipei"," NewTaipei"],
                  typeSpeed: 80,
                  backSpeed: 80,
                  backDelay: 4000,
                  startDelay: 1000,
                  loop: true,
                  showCursor: true
                  });
                  </script>
      
        {{-- <script src="js/main.js"></script> --}}
        
        </body>
      </html>