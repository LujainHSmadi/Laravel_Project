<!doctype html>
<html lang="en">
  <head>
    <title>Ask for Help</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/volunteer.css">
      {{-- <!--<link rel="stylesheet" href="css/ceate.css">--> --}}
  </head>

  <body>


    <div>



        <form action="{{route('volenteers.store')}}" method="post">
          @csrf
            <div class="container">

                <div class="row"></div>

                <div class="col-xs-3" id="forms">
                    <h1 style="font-size: 75px;"> Volunteer</h1>

                    <h1> </h1>

                    @if ($message= Session::get('success'))
                        <div class="alert alert-success" role="alert">
                            {{ $message }}
                        </div>
                        @elseif ($message= Session::get('status'))
                        <div class="alert alert-danger" role="alert" style="color:red">
                            {{ $message }}
                        </div>
                        @endif

                    <hr class="mb-3">
                    <label for="username"> Username: </label>
                    <input class="form-control" type="text" name="name" placeholder="username" required>

                    <label for="email"> Email: </label>
                    <input class="form-control" type="email" name="email" placeholder="Email" required>

                    <label for="location"> Age: </label>
                    <input class="form-control" type="text" name="age" placeholder="Age" required>


                    <label for="phonenum"> Phone number: </label>
                    <input class="form-control" type="tel"  name="number" placeholder="phonenumber" required>




                    <label for="location"> Address: </label>
                    <input class="form-control" type="text" name="address" placeholder="Address" required>




                    <label for="location"> Career: </label>
                    <input class="form-control" type="text" name="career" placeholder="Career" required>



                    <hr class="mb-3">

                    <input id="botton" class="btn btn-outline-light botton" type="submit" name="create">
                    <a style="margin-top: 10px" class="btn btn-outline-light botton" href="/services">Back</a>
                </div>
            </div>
    </div>




    </form>
   </div>
  </body>
</html>
