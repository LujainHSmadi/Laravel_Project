<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Home</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Poppins:300,300i,400,500,600,700,800,900,900i%7CRoboto:400%7CRubik:100,400,700">
    <link rel="stylesheet" href="{{asset('css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{asset('css/fonts.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" >
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.min.js" integrity="sha384-Atwg2Pkwv9vp0ygtn1JAojH0nYbwNJLPhwyoVbhoPwBhjQPR5VtM2+xf0Uwh9KtT" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{asset('https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css')}}" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
    <style>.ie-panel{display: none;background: #212121;padding: 10px 0;box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3);clear: both;text-align:center;position: relative;z-index: 1;} html.ie-10 .ie-panel, html.lt-ie-10 .ie-panel {display: block;}</style>
  <style>
    #a
    {
     background-color:rgb(112, 107, 107); 
    }
    </style>
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
        <div class="rd-navbar-wrap"  id="a">
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
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="/">Home</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="/about">About Us</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="/services">Services</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="/contact">Contacts</a>
                      </li>
                    </ul>
                    {{-- <a class="button button-primary button-sm" href="#">Donate</a> --}}
                  </div>
                  
                </div>
               
                {{-- <a class="button button-primary button-sm " href="login">Log In</a> --}}
                @if (!Session::has('email'))
              
                <a href="register.login" class="nav-item nav-link ">login</a>
                <a href="register.signup" class="nav-item nav-link">sign up</a>
                
                @else

                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown" style="color:green">Profile</a>
                    <div class="dropdown-menu bg-light m-0">
                    
                        <a href={{route('profile',$users->id)}} class="dropdown-item">account</a>
                        <a href="home" class="dropdown-item">logout</a>
                    </div>
                </div>

                @endif
                
                {{-- <ul>
                  @if(Session()->has('name'))
                   <li><a href="/userform">Log In</a></li>
                   <li><a href="/users/create">Sign up</a></li>
                   @else

                   <li><a href="/profile{id}">Account</a></li>
                   <li><a href="/userform">Log out</a></li>
                   @endif
                </ul> --}}
                
              </div>
            </div>
          </nav>
        </div>
        
      </header>
<style>
body{
  background-color:rgb(223, 220, 220);
}

</style>
  <div class="container" style="margin-top: 120px">
  <div class="row flex-lg-nowrap">
    <div class="col-12 col-lg-auto mb-3" style="width: 200px;">
      
    </div>
 
    <div class="col">
      <div class="row">
        <div class="col mb-3">
          <div class="card">
            <div class="card-body">
              <div class="e-profile">
                <div class="row">
                  <div class="col-12 col-sm-auto mb-3">
                    <div class="mx-auto" style="width: 140px;">
                      <div class="d-flex justify-content-center align-items-center rounded" style="height: 140px; ">
                       <img src="/register/images/OIP.jfif" style="width:140px;height:130px" >
                      </div>
                    </div>
                  </div>
                  <div class="col d-flex flex-column flex-sm-row justify-content-between mb-3">
                    <div class="text-center text-sm-left mb-2 mb-sm-0">
             
                      
                    
                      <div class="mt-2">
                       
                      </div>
                    </div>
                    <div class="text-center text-sm-right">
                      
                    </div>
                  </div>
                </div>
                <ul class="nav nav-tabs">
                  <li class="nav-item"><a href="" class="active nav-link">Settings</a></li>
                </ul>
                <div class="tab-content pt-3">
                  <div class="tab-pane active">
                    <form class="form" method="post" action="{{route('users.update',$users->id)}}">
                      @csrf
                      @method('PUT')
                      <div class="row">
                        <div class="col">
                          <div class="row">
                            <div class="col">
                              <div class="form-group">
                               
                              
                                <label>User Name</label>
                                <input class="form-control" type="text" name="name" placeholder="John Smith" value="{{ $users->name}}">
                              
                              </div>
                            </div>
                            <div class="col">
                              <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="text" placeholder="user@example.com" name="email" value="{{$users->email}}">
                                
                              </div>
                            </div>
                          </div>
                          <div class="row">
                            <div class="col">
                              <div class="form-group">
                                <label>password</label>
                                <input class="form-control" type="password" placeholder="password" name="password" value="{{$users->password}}">
                                
                              </div>
                            </div>
                          </div>
                         
                          
                        </div>
                      </div>
                      <div class="row">
                        
                      </div>
                      <div class="row">
                        <div class="col d-flex justify-content-end">
                          <button class="btn btn-success" type="submit" style="background-color:#7FBC4E">Save Changes</button>
                        </div>
                      </div>
                    </form>
  
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
  
        <div class="col-12 col-md-3 mb-3">
       
          <div class="card">
            <div class="card-body">
              <h6 class="card-title font-weight-bold">Support</h6>
              <p class="card-text">Get fast, free help from our friendly assistants.</p>
              <a href="/contact"><button type="button" class="btn btn-primary" style="background-color:#7FBC4E
                ">Contact Us</button></a>
            </div>
          </div>
        </div>
      </div>
  
    </div>
  </div>
  </div>


      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
@include('layout.footer')
