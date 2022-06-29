<!doctype html>
<html lang="en">
  <head>
    <title>Ask for Help</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/ceate.css')}}">
    <link rel="stylesheet" href="{{asset('css/volunteer.css')}}">
      {{-- <!--<link rel="stylesheet" href="css/ceate.css">--> --}}
  </head>
  <body>

    <!-- Optional JavaScript -->
    <div>
        <form action="{{route('home.store')}}" method="POST" enctype="multipart/form-data">
            <div class="container">
@csrf
                <div class="row"></div>

                <div class="col-xs-3" id="forms">
                    <h1 style="font-size: 75px;"> Helper.</h1>

                    <h1> To help you , Fill The Form </h1>

                    <hr class="mb-3">
                    <label for="username"> Name </label>
                    <input class="form-control" type="text" name="name" placeholder="Enter Your Name" required>

                    <label for="email"> Phone Number </label>
                    <input class="form-control" type="text" name="phone" placeholder="Enter Phone Number" required>


                    <label for="password"> Adress</label>
                    <input class="form-control" type="text" name="address" placeholder="Your Adress" required>


                    <label for="re-pass">The Case </label>
                    <input class="form-control" type="file" name="case_image" placeholder="Your Case Image" required>

                    <label for="re-pass">Identity </label>
                    <input class="form-control" type="file" name="identity_image" placeholder="Your Identity Image" required>


                    <label for="phonenum"> Social Security </label>
                    <input class="form-control" type="text"  name="social_security" placeholder="Social Security Number" required>


                    <label for="location"> Description </label>
                    <input class="form-control" type="text" name="description" placeholder="Descripe Your Case" required>
                    <input class="form-control" type="hidden" name="status" value="0">






                    <hr class="mb-3">

                    <input id="botton"  class="btn btn-outline-light botton" type="submit" value="Send">
                    <a style="margin-top: 10px" class="btn btn-outline-light botton" href="/home">Back</a>
                </div>
            </div>
    </div>




    </form>
   </div>


    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>
