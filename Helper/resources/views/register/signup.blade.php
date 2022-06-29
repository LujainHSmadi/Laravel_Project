<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up Form by Colorlib</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts/material-icon/css/material-design-iconic-font.min.css">

    <!-- Main css -->
    <link rel="stylesheet" href="/register/css/style.css">
</head>
<body>


    <div class="main">

        <!-- Sign up form -->
        <section class="signup">
            <div class="container">
                <div class="signup-content">
                    <div class="signup-form">
                        <h2 class="form-title">Sign up</h2>
                        @if ($message= Session::get('success'))
                        <div class="alert alert-success" role="alert">
                            {{ $message }}
                        </div>
                        @elseif ($message= Session::get('status'))
                        <div class="alert alert-danger" role="alert" style="color:red">
                            {{ $message }}
                        </div>
                        @endif
                        <form method="post" class="register-form" id="register-form" action="{{route('users.store')}}">
                            @csrf
                            <div class="form-group">
                                <label for="name"><i class="zmdi zmdi-account material-icons-name"></i></label>
                                <input type="text" name="name" id="name" placeholder="Your Name"/>
                                @error('name')
                                 <div class="alert alert-danger mt-1 mb-1" style="color:red">{{ $message }}</div>
                                    @enderror
                            </div>
                            <div class="form-group">
                                <label for="email"><i class="zmdi zmdi-email"></i></label>
                                <input type="email" name="email" id="email" placeholder="Your Email" />
                                @error('email')
                                <div class="alert alert-danger mt-1 mb-1" style="color:red">{{ $message }}</div>
                                   @enderror
                            </div>
                            <div class="form-group">
                                <label for="pass"><i class="zmdi zmdi-lock"></i></label>
                                <input type="password" name="password" id="pass" placeholder="Password"/>
                            </div>
                            @error('password')
                            <div class="alert alert-danger mt-1 mb-1" style="color:red">{{ $message }}</div>
                               @enderror
                            {{-- <div class="form-group">
                                <label for="re-pass"><i class="zmdi zmdi-lock-outline"></i></label>
                                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password"/>
                            </div> --}}


                            <div class="form-group form-button">
                                <input type="submit" name="signup" id="signup" class="form-submit" value="Register" style="background-color:rgb(103, 200, 103)"/>
                            </div>
                        </form>
                    </div>
                    <div class="signup-image">
                        <figure><img src="/register/images/im.png" alt="sing up image" style="height: 200px;width:400px"></figure>
                        <a href="/userform" class="signup-image-link">I am already member !!</a>
                    </div>
                </div>
            </div>
        </section>



    </div>

    <!-- JS -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="js/main.js"></script>
</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
</html>
