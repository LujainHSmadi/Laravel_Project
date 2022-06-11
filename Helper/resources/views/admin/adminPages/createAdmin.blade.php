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
           <div class="card-title">Create Admin</div>
           <hr>
            <form>
           <div class="form-group">
            <label for="input-1">Name</label>
            <input type="text" class="form-control" id="input-1" placeholder="Enter Your Name" name="name">
           </div>
           <div class="form-group">
            <label for="input-2">Email</label>
            <input type="text" class="form-control" name="email" id="input-2" placeholder="Enter Your Email Address">
           </div>
           <div class="form-group">
            <label for="input-4">Password</label>
            <input type="text" class="form-control" id="input-4" placeholder="Enter Password">
           </div>
           
           <div class="form-group">
            <button type="submit" class="btn btn-light px-5"><i class="icon-lock"></i> Register</button>
          </div>
          </form>
         </div>
         </div>
      </div>





@endsection
