<!DOCTYPE html>
<html>
  <head> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="{{ asset('') }}admin/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="{{ asset('') }}admin/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="{{ asset('') }}admin/css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="{{ asset('') }}admin/https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="{{ asset('') }}admin/css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="{{ asset('') }}admin/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="{{ asset('') }}admin/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <header class="header">   
      <nav class="navbar navbar-expand-lg">
        <div class="search-panel">
          <div class="search-inner d-flex align-items-center justify-content-center">
            <div class="close-btn">Close <i class="fa fa-close"></i></div>
            <form id="searchForm" action="#">
              <div class="form-group">
                <input type="search" name="search" placeholder="What are you searching for...">
                <button type="submit" class="submit">Search</button>
              </div>
            </form>
          </div>
        </div>
        <div class="container-fluid d-flex align-items-center justify-content-between">
          <div class="navbar-header">
            <!-- Navbar Header--><a href="index.html" class="navbar-brand">
              <div class="brand-text brand-big visible text-uppercase"><strong class="text-primary">Dark</strong><strong>Admin</strong></div>
              <div class="brand-text brand-sm"><strong class="text-primary">D</strong><strong>A</strong></div></a>
            <!-- Sidebar Toggle Btn-->
            <button class="sidebar-toggle"><i class="fa fa-long-arrow-left"></i></button>
          </div>
            
            <!-- Log out               -->
            <div class="list-inline-item logout">
              <a id="logout" href="{{ route('admin.logout') }}" class="nav-link">Logout <i class="icon-logout"></i></a></div>
          </div>
        </div>
      </nav>
    </header>
    <div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
          <div class="avatar"><img src= {{ asset('admin') }}/{{ Auth::user()->image }} alt="..." class="img-fluid rounded-circle"></div>
          <div class="title">
            <h1 class="h5">{{ Auth::user()->name }}</h1>
            <p>Web Designer</p>
          </div>
        </div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li class="active"><a href="{{ route('admin.dashboard') }}"> <i class="icon-home"></i>Home </a></li>
                {{-- <li><a href="charts.html"> <i class="fa fa-bar-chart"></i>Charts </a></li> --}}
                <li><a href="{{ route('admin.user') }}"> <i class="icon-padnote"></i>User Updates</a></li>
              
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Add & Edit</a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="{{ route('admin.banner') }}">Add Banner</a></li>
                    <li><a href="{{ route('admin.service') }}">Add Services</a></li>
                    <li><a href="{{ route('admin.image') }}">Add Photos</a></li>
                    <li><a href="{{ route('admin.video') }}">Add Videos</a></li>
                    <li><a href="{{ url('admin/about/1') }}">Edit About</a></li>
                  </ul>
                </li>
                
                <li><a href="#exampledropdownDropdown1" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>View</a>
                  <ul id="exampledropdownDropdown1" class="collapse list-unstyled ">
                    <li><a href="{{ route('admin.viewservices') }}">View Services</a></li>
                    <li><a href="{{ route('admin.viewbanner') }}">View Banner</a></li>
                    <li><a href="{{ route('admin.viewimage') }}">View Photo</a></li>
                    <li><a href="{{ route('admin.viewvideo') }}">View Video</a></li>
                  </ul>
                </li>
                
                {{-- <li><a href="login.html"> <i class="icon-logout"></i>Login page </a></li> --}}
        </ul><span class="heading"></span>
        
      </nav>