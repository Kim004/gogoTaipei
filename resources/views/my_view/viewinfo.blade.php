@extends('my_view.layouts.master')

@section('title', 'Home')

@section('content')

<div class="site-blocks-cover inner-page-cover overlay" style="background-image: url(images/xmas.jpg);" data-aos="fade" data-stellar-background-ratio="0.5">
    <div class="container">
      <div class="row align-items-center justify-content-center text-center">

        <div class="col-md-10" data-aos="fade-up" data-aos-delay="400">
          
          
          <div class="row justify-content-center">
            <div class="col-md-8 text-center">
              <h1>viewinfo</h1>
              {{-- <p data-aos="fade-up" data-aos-delay="100">Handcrafted free templates by <a href="https://free-template.co/" target="_blank">Free-Template.co</a></p> --}}
            </div>
          </div>

          
        </div>
      </div>
    </div>
  </div>  

  <div class="site-section">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-6">
          <img src="images/img_1.jpg" alt="Free website template by Free-Template.co" class="img-fluid rounded">
        </div>
        <div class="col-md-5 ml-auto">
          <h2 class="text-primary mb-3">History</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquam voluptates a explicabo delectus sed labore dolor enim optio odio at!</p>
          <p class="mb-4">Adipisci dolore reprehenderit est et assumenda veritatis, ex voluptate odio consequuntur quo ipsa accusamus dicta laborum exercitationem aspernatur reiciendis perspiciatis!</p>

          <ul class="ul-check list-unstyled success">
            <li>Adipisci dolore reprehenderit</li>
            <li>Accusamus dicta laborum</li>
            <li>Delectus sed labore</li>
          </ul>
        </div>
      </div>
    </div>
  </div>

  @endsection