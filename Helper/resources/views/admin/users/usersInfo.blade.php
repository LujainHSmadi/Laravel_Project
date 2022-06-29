
@extends('admin.adminLayout.adminMaster')

@section('content')


<div class="clearfix"></div>

  <div class="content-wrapper">
    <div class="container-fluid">

  <!--Start Dashboard Content-->

	<div class="card mt-3">
    <div class="card-content">
        <div class="row row-group m-0">
            <div class="col-12 col-lg-6 col-xl-3 border-light">

            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">

            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">

            </div>
            <div class="col-12 col-lg-6 col-xl-3 border-light">

            </div>
        </div>
    </div>
 </div>



	<div class="row">
	 <div class="col-12 col-lg-12">
	   <div class="card">
	     <div class="card-header">Users Tables
		  <div class="card-action">
             <div class="dropdown">
             <a href="javascript:void();" class="dropdown-toggle dropdown-toggle-nocaret" data-toggle="dropdown">
              <i class="icon-options"></i>
             </a>
              <div class="dropdown-menu dropdown-menu-right">
              <a class="dropdown-item" href="javascript:void();">Action</a>
              <a class="dropdown-item" href="javascript:void();">Another action</a>
              <a class="dropdown-item" href="javascript:void();">Something else here</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="javascript:void();">Separated link</a>
               </div>
              </div>
             </div>
		 </div>
	       <div class="table-responsive">
                 <table class="table align-items-center table-flush table-borderless">
                  <thead>
                   <tr>
                     <th>NUM</th>
                     <th>Name</th>
                     <th>Email</th>
                    
                     <th style="width: 350px">Actions</th>

                   </tr>
                   </thead>
                   <tbody>
                    @php
                    $i = 1;
                   @endphp
                   @foreach ($users as $item)
                    <tr>

                        <th>{{$i++}}</th>
                        <td>{{$item->name}}</td>
                        <td>{{$item->email}}</td>
                      
                        <td >
                            <div class = "row">
                          
                            <div class="col-lg-1" >
                                    <form action="{{route('users.destroy', $item->id)}}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                    <button type="submit" class="btn btn-danger  px-4">delete</button>
                                    </form>
                            </div>
                            </div>
                        </td>

                   </tr>
                   @endforeach

                 </tbody></table>
               </div>
	   </div>
	 </div>
	</div><!--End Row-->

      <!--End Dashboard Content-->

	<!--start overlay-->
		  <div class="overlay toggle-menu"></div>
		<!--end overlay-->

    </div>
    <!-- End container-fluid-->

    </div><!--End content-wrapper-->
   <!--Start Back To Top Button-->
    <a href="javaScript:void();" class="back-to-top"><i class="fa fa-angle-double-up"></i> </a>
    <!--End Back To Top Button-->

@endsection

