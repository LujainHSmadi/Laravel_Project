@extends('layout.master')
@section('content')
      <section class="parallax-container" data-parallax-img="images/bg-breadcrumbs-about.jpg">
        <div class="parallax-content breadcrumbs-custom context-dark">
          <div class="container">
            <div class="row justify-content-center">
              <div class="col-12 col-lg-9">
                <h2 class="breadcrumbs-custom-title">Contacts</h2>
                <ul class="breadcrumbs-custom-path">
                  <li><a href="index.html">Home</a></li>
                  <li class="active">Contacts</li>
                </ul>
              </div>
            </div>
          </div>
        </div>


      </section>
      <section class="section section-lg text-center bg-default">
        <div class="container">
          <div class="row row-50">
            <div class="col-md-6 col-lg-4">
              <div class="box-icon-classic">
                <div class="box-icon-inner decorate-triangle decorate-color-secondary"><span class="icon-xl linearicons-phone-incoming icon-gradient-1"></span></div>
                <div class="box-icon-caption">
                  <h4><a href="tel:#">1-800-123-1234</a></h4>
                  <p>You can call us anytime</p>
                </div>
              </div>
            </div>


            <div class="col-md-6 col-lg-4">
              <div class="box-icon-classic">
                <div class="box-icon-inner decorate-circle decorate-color-secondary-2"><span class="icon-xl linearicons-map2 icon-gradient-2"></span></div>
                <div class="box-icon-caption">
                  <h4><a href="#">51 Francis Street, Darlinghurst NSW 2010, United States</a></h4>
                </div>
              </div>
            </div>


            <div class="col-md-6 col-lg-4">
              <div class="box-icon-classic">
                <div class="box-icon-inner decorate-rectangle decorate-color-primary"><span class="icon-xl linearicons-paper-plane icon-gradient-3"></span></div>
                <div class="box-icon-caption">
                  <h4><a href="mailto:#">info@demolink.org</a></h4>
                  <p>Feel free to email us your questions</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      @if ($message= Session::get('success'))
      <div class="alert alert-success" role="alert">
          {{ $message }}
      </div>
      @elseif ($message= Session::get('status'))
      <div class="alert alert-danger" role="alert" style="color:red">
          {{ $message }}
      </div>
      @endif
      <!-- Contact us-->
      <section class="section section-lg bg-gray-1 text-center">
        <div class="container">
          <div class="row justify-content-md-center">
            <div class="col-md-9 col-lg-7">
              <h3>Get in Touch</h3>
              <!-- RD Mailform-->
              <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="{{route('contact.store')}}">
                @csrf
                <div class="form-wrap">
                  <input class="form-input" id="contact-name" type="text" name="name" data-constraints="@Required">
                  <label class="form-label" for="contact-name">Your Name</label>
                </div>
                <div class="form-wrap">
                  <input class="form-input" id="contact-email" type="email" name="email" data-constraints="@Email @Required">
                  <label class="form-label" for="contact-email">E-mail</label>
                </div>
                <div class="form-wrap">
                  <input class="form-input" id="contact-phone" type="text" name="phone_number" data-constraints="@Numeric">
                  <label class="form-label" for="contact-phone">Phone</label>
                </div>
                <div class="form-wrap">
                  <label class="form-label" for="contact-message"> Message</label>
                  <textarea class="form-input" id="contact-message" name="message" data-constraints="@Required"></textarea>
                </div>
                <div class="row justify-content-center">
                  <div class="col-12 col-sm-7 col-lg-5">
                    <button class="button button-block button-lg button-primary" type="submit">Send</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section><a class="section section-banner" href="https://www.templatemonster.com/website-templates/monstroid2.html" style="background-image: url(images/banner/background-03-1920x310.jpg); background-image: -webkit-image-set( url(images/banner/background-03-1920x310.jpg) 1x, url(images/banner/background-03-3840x620.jpg) 2x )" target="_blank"></a>
    
@endsection