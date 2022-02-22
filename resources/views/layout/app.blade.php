<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="azsencs ,team , azhar team , az-sencs">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        @yield('title')
    </title>

    <!--Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat+Alternates:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <!--Font Awesome Library-->
    <link rel="stylesheet" href="{{asset('css/all.min.css')}}">
    <!--CSS Files-->
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="{{asset('css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('css/normlize.css')}}">
	<link rel="stylesheet" href="{{asset('css/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/about-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/about-responsive.css')}}">
    <link rel="stylesheet" href="{{asset('css/header-footer.css')}}">
    <link rel="stylesheet" href="{{asset('css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('css/committees-responsive.css')}}">
    <link rel="stylesheet" href="{{asset('css/committees-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/contact-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/events-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/exhipition-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/sign.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="stylesheet" href="{{asset('css/workshop-style.css')}}">
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">






</head>

<body>


        <!-- Header Section Begin -->
        <nav class="navbar navbar-expand-md navbar-light">
            <a class="navbar-brand" href="{{route('index')}}"><img src="{{asset('image/logo.png')}}"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainnav" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            
            <div class="collapse navbar-collapse" id="mainnav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item "><a class="nav-link" href="{{route('index')}}">Home</a></li>
                    <li class="nav-item "><a class="nav-link" href="{{route('about')}}">About</a></li>
                    
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Activites
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{route('events')}}">Events</a>
                        <a class="dropdown-item" href="{{route('Workshops')}}">Workshops</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('exhipitionPage')}}">Exihipation</a>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="{{route('contact')}}">Contact us</a></li>
                </ul>
            </div>
        </nav>
        <!-- Header End -->
        @yield('hero')
     <!--start workshop information icons-->  <!--Moamen Gamal-->
     <div class="information-icons">
                <div class="d-flex   justify-content-around">
                    <div class="information-icon">
                        <a href="{{route('events')}}">
                            <i class="far fa-calendar-alt fa-3x" style="color: #0c9bfa;"></i>
                            <h5 style="color: #0c9bfa;">Event</h5>
                        </a>
                    </div>
                    <div class="information-icon">
                        <a href="{{route('Workshops')}}">
                            <i class="fas fa-chalkboard-teacher fa-3x" style="color: #0c9bfa;"></i>
                            <h5 style="color: #0c9bfa;">Workshop</h5>
                        </a>
                    </div>
                    <div class="information-icon" style="color: #0c9bfa;">
                        <a href="{{route('exhipitionPage')}}">
                            <i class="fas fa-address-card fa-3x" style="color: #0c9bfa;"></i>
                            <h5 style="color: #0c9bfa;">Exhipition</h5>
                        </a>
                        
                    </div>
                    
               </div>
              
            </div>
            <!--workshop information icons end--> <!-- Moamen Gamal -->
       

        @yield('content')


        
<!----------------------------------------------- start footer---------------------------------------------------- -->


<footer class="footer-04">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
                <h2 class="footer-heading"><a href="{{route('index')}}" class="logo">AZ-SENCS</a></h2>
                <p>A small river named Duden flows by their place and supplies it with the necessary regelialia.</p>
                <a href="{{route('about')}}">read more <span class="ion-ios-arrow-round-forward"></span></a>
            </div>
            <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
                <h2 class="footer-heading">Categories</h2>
                <ul class="list-unstyled">
                    <li><a href="{{route('Workshops')}}" class="py-1 d-block">learn &amp; Software</a></li>
                    <li><a href="{{route('Workshops')}}" class="py-1 d-block">Hardware</a></li>
                    <li><a href="{{route('Workshops')}}" class="py-1 d-block">Softskills</a></li>
                    <li><a href="{{route('contact')}}" class="py-1 d-block">Help &amp; Support</a></li>
                </ul>
            </div>
            <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
                <h2 class="footer-heading">comming Tags</h2>
                <div class="tagcloud">
                    <a href="{{route('Workshops')}}" class="tag-cloud-link">web</a>
                    <a href="{{route('Workshops')}}" class="tag-cloud-link">embedded</a>
                    <a href="{{route('Workshops')}}" class="tag-cloud-link">network</a>
                    <a href="{{route('Workshops')}}" class="tag-cloud-link">java</a>
                    <a href="{{route('Workshops')}}" class="tag-cloud-link">tasting</a>
                    <a href="{{route('Workshops')}}" class="tag-cloud-link">ui$ux</a>
                    <a href="{{route('Workshops')}}" class="tag-cloud-link">flutter</a>
                    <a href="{{route('Workshops')}}" class="tag-cloud-link">control</a>
                </div>
            </div>
            <div class="col-md-6 col-lg-3 mb-md-0 mb-4">
                <h2 class="footer-heading">Subscribe</h2>
                <form action="#" class="subscribe-form">
                    <div class="form-group d-flex">
                        <input type="text" class="form-control rounded-left" placeholder="Enter email address">
                        <button type="submit" class="form-control submit rounded-right"><span class="sr-only">Submit</span><i class="ion-ios-send"></i></button>
                    </div>
                </form>
                    <h2 class="footer-heading mt-5">Follow us</h2>
                    <ul class="ftco-footer-social p-0">
                        <li class="ftco-animate"><a href="https://www.facebook.com/AZSENCS" data-toggle="tooltip" data-placement="top"><span class="ion-logo-facebook"></span></a></li>
                        <li class="ftco-animate"><a href="https://twitter.com/Az_SENCS" data-toggle="tooltip" data-placement="top"><span class="ion-logo-twitter"></span></a></li>
                        <li class="ftco-animate"><a href="https://www.instagram.com/az_sencs/" data-toggle="tooltip" data-placement="top"><span class="ion-logo-instagram"></span></a></li>
                        <li class="ftco-animate"><a href="https://www.youtube.com/channel/UCG0F7N-gR38QBDCbKYay7YQ" data-toggle="tooltip" data-placement="top"><span class="ion-logo-youtube"></span></a></li>
                        <li class="ftco-animate"><a href="https://www.linkedin.com/company/az-sencs" data-toggle="tooltip" data-placement="top"><span class="ion-logo-linkedin"></span></a></li>
                    </ul>
            </div>
        </div>
    </div>
    <div class="w-100 mt-5 border-top py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-8">
                    <p class="copyright">All rights reserved |  Az-sencs web commitee</p>
                </div>
                <div class="col-md-6 col-lg-4 text-md-right">
                    <p class="mb-0 list-unstyled">
                        <a class="mr-md-3" href="#">Terms</a>
                        <a class="mr-md-3" href="#">Privacy</a>
                        <a class="mr-md-3" href="#">Compliances</a>
                    </p>
                </div>
             </div>
        </div>
    </div>
</footer>



    <!-- end footer -->

    <!--JS -->
    
<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>    
    <script src="{{asset('js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('js/jquery.nicescroll.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>

        
</body>

</html>