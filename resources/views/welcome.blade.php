@extends('layouts.layout')

@section('content')
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="padding-top:.2em">
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/foto1.jpg" class="d-block w-100" alt="...">
        <div class="container">
          <div class="carousel-caption text-left">
            <h5>Example headline.</h5>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-small btn-primary" href="#" role="button">Sign up today</a></p>
          </div>
        </div>
      </div>
      <div class="carousel-item ">
        <img src="images/foto2.jpg" class="d-block w-100" alt="...">
        <div class="container">
          <div class="carousel-caption text-left">
            <h5>Example headline.</h5>
            <p>Cras justo odio, dapibus ac facilisis in, egestas eget quam. Donec id elit non mi porta gravida at eget metus. Nullam id dolor id nibh ultricies vehicula ut id elit.</p>
            <p><a class="btn btn-small btn-primary" href="#" role="button">Sign up today</a></p>
          </div>
        </div>
      </div>

    </div>
    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>


  <div class="row" style="padding-top:2em">
    <div class="col-lg-6">
        <img src="images/house-512.png" alt="" width="150" height="auto">
    <h2>Devi Vendere?</h2>
      <p>Donec sed odio dui. Etiam porta sem malesuada magna mollis euismod. Nullam id dolor id nibh ultricies vehicula ut id elit. Morbi leo risus, porta ac consectetur ac, vestibulum at eros. Praesent commodo cursus magna.</p>
      <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-6">
        <img src="images/house-search.png" alt="" width="150" height="auto">
        <h2>Devi Comprare?</h2>
      <p>Duis mollis, est non commodo luctus, nisi erat porttitor ligula, eget lacinia odio sem nec elit. Cras mattis consectetur purus sit amet fermentum. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh.</p>
      <p><a class="btn btn-secondary" href="#" role="button">View details &raquo;</a></p>
    </div><!-- /.col-lg-4 -->
    <!-- /.col-lg-4 -->
  </div><!-- /.row -->


@endsection
