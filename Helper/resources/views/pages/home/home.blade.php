@extends('layout.master')
@section('content')

      <section class="section section-lg section-main-bunner section-main-bunner-filter">
        <div class="main-bunner-img" style="background-image: url(&quot;images/bg-bunner-2.jpg&quot;); background-size: cover;"></div>
        <div class="main-bunner-inner">
          <div class="container">
            <div class="row row-50 justify-content-lg-center align-items-lg-center">
              <div class="col-lg-12">
                <div class="bunner-content-modern text-center">
                  <h1 class="main-bunner-title">Help The Children</h1>
                  <p>We do whatever it takes to make surethat families don’t just survive but thrive. Helper believes that united we stand , divided we fall </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-xl">
        <div class="container">
          <div class="row row-50 justify-content-lg-between align-items-lg-center">
            <div class="col-lg-6">
              <div class="box-img-animate">
                <div class="box-img-animate-item" data-parallax-scroll="{&quot;y&quot;: 0, &quot;x&quot;: 140,  &quot;smoothness&quot;: 50 }"><img src="images/animate-img-1.jpg" alt=""></div>
                <div class="box-img-animate-item" data-parallax-scroll="{&quot;y&quot;: 150, &quot;x&quot;: 0,  &quot;smoothness&quot;: 50 }"><img src="images/animate-img-2(2).jpg"  width="271px" height="191px" alt=""></div>
                <div class="box-img-animate-item" data-parallax-scroll="{&quot;y&quot;:70, &quot;x&quot;: -250,  &quot;smoothness&quot;: 50 }"><img src="images/animate-img-3(2).jpg" width="271px" height="191px" alt=""></div>
                <div class="box-img-animate-item" data-parallax-scroll="{&quot;y&quot;:60, &quot;x&quot;: 70,  &quot;smoothness&quot;: 50 }"><img src="images/animate-img-5.jpg" alt=""></div>
                <div class="box-img-animate-item" data-parallax-scroll="{&quot;y&quot;:0, &quot;x&quot;: 140,  &quot;smoothness&quot;: 50 }"><img src="images/animate-img-6.jpg" alt=""></div>
                <div class="box-img-animate-item" data-parallax-scroll="{&quot;y&quot;:70, &quot;x&quot;: -250,  &quot;smoothness&quot;: 50 }"><img src="images/animate-img-3(4).jpg" width="271px" height="191px" alt=""></div>
              </div>
            </div>
            <div class="col-lg-6 col-xl-5">
              <div class="innset-xl-left-70">
                <h3>Our Mission</h3>
                <p class="text-opacity-80">Our organization pursues several goals that can be identified as our mission. Learn more about them below.</p>
                <div class="row row-50">
                  <div class="col-md-6 col-lg-12">
                    <div class="box-icon-modern">
                      <div class="box-icon-inner decorate-triangle"><span class="icon-xl linearicons-baby2 icon-primary"></span></div>
                      <div class="box-icon-caption">
                        <h4><a href="#">Saving families</a></h4>
                        <p>Our main mission is to save and rescue families from living in not appropirate houses.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-12">
                    <div class="box-icon-modern">
                      <div class="box-icon-inner decorate-circle"><span class="icon-xl linearicons-sun icon-primary"></span></div>
                      <div class="box-icon-caption">
                        <h4><a href="#">Peace On The Planet</a></h4>
                        <p>By working with our partners, we aim to establish peaceful around the world.</p>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6 col-lg-12">
                    <div class="box-icon-modern">
                      <div class="box-icon-inner decorate-rectangle"><span class="icon-xl linearicons-umbrella2 icon-primary"></span></div>
                      <div class="box-icon-caption">
                        <h4><a href="#">Care &amp; Protection</a></h4>
                        <p>We provide global care and protection to support families all over the world.</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="section section-lg bg-gray-1">
        <div class="container">
          <div class="row justify-content-center text-center">
            <div class="col-md-9 col-lg-7 wow-outer">
              <div class="wow slideInDown">
                <h3>Latest Cases</h3>
                <p style=>At Helper, there are various  cases to deal with and many families need us , in which you can always take part. Feel free to know about them below or browse our website for more information.</p>
              </div>
            </div>
          </div>
          <div class="row row-50">
 @php
    $i = 0 ;
@endphp
            @foreach ($cases as $item)

{{-- @if ($i++ < 3) --}}

@if (!$item->status)



            <div class="col-md-6 col-lg-4 wow-outer">
              <div class="wow fadeInUp">
                <article class="box-causes">
                  <div class="box-causes-img"><img src="{{url('public/images/'.$item->case_image)}}" alt="" width="372px"  style="height:396px;"/>
                    {{-- <a class="button button-sm button-primary" href="#">Donate</a> --}}

                  </div>
                  <h5 class="font-weight-medium">{{$item->description}}</h5>
                  {{-- <a class="button button-sm button-primary" href="/don">Donate</a>
                  <a class="button button-sm button-primary" href="/volenteers">Volunteer</a> --}}

                </article>
              </div>
            </div>

@endif
{{-- @endif --}}

@endforeach

          </div>
        </div>
      </section>


      <section class="section section-lg bg-gray-1" >
        <div class="container">
          <div class="row justify-content-center text-center">


      <h3 style="text-align: center"  > Successful Stories </h3>
     <p style="padding: 20px" style="font-size: 20pt">Here we show you some of our successful stories that ended with lots of family laughter and a happy, warm home. Here we show you part of what Helper does, and in the end this can't be done without you, so don't hesitate to be a part of Helper, part of people's laughter, their homes and their memories.</p>

      <div id="carouselExampleControls" class="carousel slide" data-ride="carousel" >
        <div class="carousel-inner">
          <div class="carousel-item active" >
            <img class="d-block w-100" src="/images/Screenshot (2121).png" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/images/Screenshot (2124).png" alt="Second slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/images/Screenshot (2123).png" alt="Third slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="/images/Screenshot (2122).png" alt="Third slide">
          </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
          </div>
        </div>

      </section>







      <section class="parallax-container bg-gray-600" data-parallax-img="images/parallax-img-2.jpg">
        <div class="parallax-content section-xxl text-center">
          <div class="container">
            <div class="row justify-content-md-center">
              <div class="col-md-9 col-lg-8 col-xl-8 wow-outer">
                <div class="innset-xl-right-30 innset-xl-left-30">
                  <div class="wow slideInDown">
                    <h3>Ask For Help</h3>
                    <form class="rd-form rd-mailform rd-form-inline" data-form-output="form-output-global" data-form-type="subscribe"  >
                      <div class="form-wrap">
                        <p>
                          If you own a house that needs repair and care and you are looking for someone to help you for free, you can click here and give us all the details so that we can contact you as soon as possible</p>
                        {{-- <input class="form-input" id="subscribe-form-email" type="email" name="email" data-constraints="@Email @Required"> --}}
                        <label class="form-label" for="subscribe-form-email" ></label>
                      </div>

                    </form>

                        <a class="button button-primary button-lg" href="{{route('home.create')}}" >Click Here</a>

                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
@endsection

  <script src="{{asset('js/core.min.js')}}"></script>
      <script src="{{asset('js/script.js')}}"></script>
