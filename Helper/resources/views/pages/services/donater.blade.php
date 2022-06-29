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

        <form action="{{route('donate.store')}}" method="post">
          @csrf
            <div class="container">

                <div class="row"></div>

                <div class="col-xs-3" id="forms">
                    <h1 style="font-size: 75px;"> Donate</h1>

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



                    <label for="phonenum"> Phone number: </label>
                    <input class="form-control" type="tel"  name="number" placeholder="phonenumber" required>

                    <label for="location"> Address: </label>
                    <input class="form-control" type="text" name="address" placeholder="Address" required>




                    <hr class="mb-3">
                      <div  class="form-group  ">
                       <label ><strong>Tools :</strong></label><br>
                         <label><input type="checkbox" name="tools" value="paint"> paint</label> <br>
                         <label><input type="checkbox" name="tools" value="Bricks"> Bricks</label><br>
                         <label><input type="checkbox" name="tools" value="Grit"> Grit</label><br>
                         <label><input type="checkbox" name="tools" value="Rebar"> Rebar</label>
                         <label><input type="checkbox" name="tools" value="Cement"> Cement</label>
                         <label><input type="checkbox" name="tools" value="Electrical wires"> Electrical wires</label>
                         <label><input type="checkbox" name="tools" value="Doors">Doors</label>
                         <label><input type="checkbox" name="tools" value="Windows">Windows</label>
                   </div>
                    <input id="" class="btn btn-outline-light botton" type="submit" name="create" value="submit">
                    <a style="margin-top: 10px" class="btn btn-outline-light botton" href="/services">Back</a>

                </div>
            </div>
    </div>




    </form>
   </div>
  </body>
</html>
