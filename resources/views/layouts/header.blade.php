<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="icon" href="{{ asset('') }}assets/img/favicon.png" type="image/png">
        <title>Dr. BS Ankit Nehra</title>
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="{{ asset('') }}assets/css/bootstrap.css">
        <link rel="stylesheet" href="{{ asset('') }}assets/vendors/linericon/style.css">
        <link rel="stylesheet" href="{{ asset('') }}assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="{{ asset('') }}assets/vendors/owl-carousel/owl.carousel.min.css">
        <link rel="stylesheet" href="{{ asset('') }}assets/vendors/lightbox/simpleLightbox.css">
        <link rel="stylesheet" href="{{ asset('') }}assets/vendors/nice-select/css/nice-select.css">
        <link rel="stylesheet" href="{{ asset('') }}assets/vendors/animate-css/animate.css">
        <!-- main css -->
        <link rel="stylesheet" href="{{ asset('') }}assets/css/style.css">
        <link rel="stylesheet" href="{{ asset('') }}assets/css/responsive.css">
        
	<link rel="stylesheet" href="{{ asset('') }}assets/cssnivo/default.css" type="text/css" media="screen">
    <!--<link rel="stylesheet" href="bar/bar.css" type="text/css" media="screen" />-->
    <link rel="stylesheet" href="{{ asset('') }}assets/cssnivo/nivo-slider.css" type="text/css" media="screen">
    <!--<link rel="stylesheet" href="cssnivo/style.css" type="text/css" media="screen" />-->
        
    <!-----zoom---------->
	<link rel="stylesheet" href="{{ asset('') }}assets/css1/screen.css">
	<link rel="stylesheet" href="{{ asset('') }}assets/css1/lightbox.css">
    
    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
	<script src="{{ asset('') }}assets/js1/jquery-1.11.0.min.js"></script>
	<script src="{{ asset('') }}assets/js1/lightbox.js"></script>	
<!-- end-->



    
    </head>
    <body>

        

<div class="right-icons">
    <a class="qlwapp-toggle whats" href="https://wa.me/+919414350913/?text=" target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
    <a class="qlwapp-toggle phno" href="tel:+919414350913" target="_blank"><i class="fa fa-phone phone"></i></a>
</div>

<header class="header_area">
           <div class="top_menu row m0">
               <div class="container">
                <div class="float-left">
                    <ul class="list header_social">
                        <li><a target="_blank" href=""><i class="fa fa-facebook"></i></a></li>
                        <li><a target="_blank" href=""><i class="fa fa-instagram"></i></a></li>
                        <li><a target="_blank" href=""><i class="fa fa-twitter"></i></a></li>
                        <li><a target="_blank" href=""><i class="fa fa-linkedin"></i></a></li>
                    </ul>
                </div>
                <div class="float-right">
                    <a class="ac_btn">Contact No. +91 9414350913</a>
                    <a class="dn_btn">drbsankitnehra@gmail.com</a>
                </div>
               </div>	
           </div>
               
        <div class="main_menu">
            <nav class="navbar navbar-expand-lg navbar-light">
                <div class="container">
                    
                    <a class="navbar-brand logo_h" href="index.php"><img src="{{ asset('') }}assets/img/logo.png" alt=""></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                        <ul class="nav navbar-nav menu_nav ml-auto">
                            <li class="nav-item"><a class="nav-link" href="{{ route('home.home') }}">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('home.abouts') }}">About Us</a></li>                                
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Services</a>
                                <ul class="dropdown-menu">
                          
                                    @php
                                                $service = DB::table('services')->get();
                                            @endphp
                                    @foreach ($service as $services)
                                        
                                    <li><a href="{{ route('home.servicelist', $services->id) }}">{{ $services->name }}</a></li>


                                    @endforeach
                    
                    
                    {{-- <li><a href="{{ route('cancer_scaning') }}">Cancer Screening</a></li>
                    <li><a href="{{ route('HNCancer') }}">Head & Neck Cancer </a></li>
                    <li><a href="{{ route('ThroatCancer') }}">Throat Cancer </a></li>
                    <li><a href="{{ route('BreastCancer') }}">Breast Cancer </a></li>
                    <li><a href="{{ route('GynecologicalCancerning') }}">Gynecological Cancer</a></li> 
                    <li><a href="{{ route('GastrointestinalCancer') }}">Gastrointestinal Cancer </a></li> 
                    <li><a href="{{ route('LiverCancer') }}">Lung Cancer </a></li>
                    <li><a href="{{ route('LungCancer') }}">Liver Cancer </a></li>
                    <li><a href="{{ route('BoneCancer') }}">Bone Cancer </a></li> 
                    <li><a href="{{ route('SoftTissueTumour') }}">Soft Tissue Tumour </a></li>
                    <li><a href="{{ route('KidneyCancer') }}">Kidney Cancer </a></li>
                    <li><a href="{{ route('UrologicCancer') }}">Urologic Cancer </a></li>
                    <li><a href="{{ route('ProstateCancer') }}">Prostate Cancer</a></li>
                    <li><a href="{{ route('BloodCancer') }}">Hematological Cancer/Blood Cancer</a></li>
                    <li><a href="{{ route('BrainCancer') }}">Brain Cancer</a></li> --}}
                                </ul>
                            </li>
                            
                            <li class="nav-item submenu dropdown">
                                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Gallery</a>
                                <ul class="dropdown-menu">
                    <li><a href="{{ route('home.images') }}">image Gallery</a></li>
                    <li><a href="{{ route('home.videos') }}">Video Gallery</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="{{ route('home.contact') }}">Contact</a></li>
                        </ul>
                        
                    </div> 
                </div>
            </nav>
        </div>
    </header>