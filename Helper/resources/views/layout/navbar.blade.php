<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="{{asset('images/favicon.png')}}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,300i,400,500,600,700,800,900,900i%7CRoboto:400%7CRubik:100,400,700">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>
    <link rel="stylesheet" href={{asset('/css/bootstrap.css')}}>
    <link rel="stylesheet" href={{asset('/css/fonts.css')}}>
    <link rel="stylesheet" href={{asset('/css/style.css')}}>
    @yield('style')
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  </head>
  <body>
    <div class="ie-panel"><a href="#"><img src="{{asset('images/decor-wave-bottom.jpg')}}" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <div class="preloader">
      <div class="preloader-body">
        <div class="cssload-container">
          <div class="cssload-speeding-wheel"></div>
        </div>
        <p>Loading...</p>
      </div>
    </div>
    <div class="page">
      <!-- Page Header-->
      <header class="section page-header">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-classic" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-static" data-lg-device-layout="rd-navbar-static" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="46px" data-xl-stick-up-offset="46px" data-xxl-stick-up-offset="46px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-main-outer">
              <div class="rd-navbar-main">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a href="index.html"><img class="brand-logo-light" src="{{asset('images/logo-inverse-415x103.png')}}" alt="" width="207" height="51"/></a></div>
                </div>
                <div class="rd-navbar-main-element">
                  <div class="rd-navbar-nav-wrap">
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="/home">Home</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="/about">About Us</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="/services">Services</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="/contact">Contact us</a>
                      </li>
                    </ul>
                    {{-- <a class="button button-primary button-sm" href="#">Donate</a> --}}
                  </div>

                </div>
                
                @if (Session::has('userId'))               
                {{-- <a class="button button-primary button-sm " href="{{route('login.create')}}" style="position:relative;left:200px;height:35px;font-size:13px">logout</a>
                <a class="button button-primary button-sm " href="/profile/1" style="height:35px;font-size:13px">profile</a> --}}
                <div class="nav-item dropdown">
                  {{-- <div>{{session('name')}}</div> --}}
                  <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-user-circle" style="font-size:40px;color:white"></i></a>
                  <div class="dropdown-menu bg-light m-0">
                      {{-- <a href="{{route('doneredit')}}" class="dropdown-item">Account</a> --}}
                      <a href="/profile/1" class="dropdown-item">Account</a>
                      <a href="{{route('login.create')}}" class="dropdown-item">Logout</a>
                  </div>
              </div>
                @else
                <a class="button button-primary button-sm " href="/userform">login</a>
                @endif              </div>
            </div>
          </nav>
        </div>
      </header>
