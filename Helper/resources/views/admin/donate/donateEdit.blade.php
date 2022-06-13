@extends('admin.adminLayout.adminMaster')

@section('content')



<!--End topbar header-->
<div class="clearfix"></div>

  <div class="content-wrapper">
    <div class="container-fluid">

    <div class="row mt-3">
      <div class="col-lg-6">
         <div class="card">
           <div class="card-body">
           <div class="card-title">Edit Donate</div>
           <hr>
            <form action="{{route('donate.update',$donate->id)}}" method="POST">
              @csrf
              @method('PUT')

           <div class="form-group">
            <label for="input-1">Name</label>
            <input type="text" class="form-control" id="input-1" placeholder="Enter Your Name" name="name">
           </div>
           <div class="form-group">
               <label for="input-2">Email</label>
               <input type="email" class="form-control" name="email" id="input-2" placeholder="Enter Your Email Address">
            </div>
            <div class="form-group">
                <label for="input-4">Number</label>
                <input type="phone" class="form-control" name="number" id="input-4" placeholder="Enter Password">
            </div>
            <div class="form-group">
             <label for="input-1">Address</label>
             <input type="text" class="form-control" id="input-1" placeholder="Enter Your Address" name="address">
            </div>
            <div class="form-group">
             <label for="input-1">Tools</label>
             {{-- <input type="text" class="form-control" id="input-1" placeholder="Tools" name="tools"> --}}
 <div class="form-group">
                                <label><strong>Tools :</strong></label><br>
                                <label><input type="checkbox" name="tools[]" value="Red"> Red</label>
                                <label><input type="checkbox" name="tools[]" value="Blue"> Blue</label>
                                <label><input type="checkbox" name="tools[]" value="Green"> Green</label>
                                <label><input type="checkbox" name="tools[]" value="Yellow"> Yellow</label>
                            </div>  
             
            </div>

           <div class="form-group">
            <input type="submit" class="btn btn-light px-5 " value="Edit">
          </div>
          </form>
         </div>
         </div>
      </div>





@endsection