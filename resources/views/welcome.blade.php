@extends('layouts.layout')

@section('content')
<div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel" style="padding-top:.2em">
    <div class="carousel-inner">

      <!-- ciclo gli immobili -->
      <?php $item = 0 ?>
      @foreach ($immobili as $immobile)


            @if ($item == 0)
                <div class="carousel-item active">
            @else
                <div class="carousel-item">
            @endif
      <?php $item = 1 ?>
        <img src="{{asset('storage/'.$immobile->photo)}}" class="d-block w-100" alt="...">
        <div class="container">
          <div class="carousel-caption text-left">
          <h5>{{$immobile->titolo}}</h5>

          <?php
          $desc = str_replace(" ","-",$immobile->titolo);
          $slug=$immobile->operazione."-".$immobile->tipologia."-".$desc;
          ?>
          <p>{{ $immobile->operazione }}/{{$immobile->tipologia}}/ € {{$immobile->prezzo}}</p>
          <p><a class="btn btn-small btn-primary" href="/immobile/{{$immobile->id}}/{{$slug}}" role="button">Dettagli</a></p>
            <p>
            <a href="https://wa.me/393205504321?text=Sarei%20interessato%20ad%20avere%20maggiori%20informazioni%20grazie%20rif:{{$immobile->id}}" target="_blank">
                <div><font color="white"><b>chiedi informazioni tramite whatsapp</b></font>
                <img src="images/whatsapp.png" alt="contattami con whatsapp"
                    style="max-width: 100px; max-height: auto;">
                 </div>
            </a>
            </p>
          </div>
        </div>
      </div>

      @endforeach
      <!--fine listino -->


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
    <h2>Vuoi Vendere?</h2>
      <p>Affidati ad un professionista che potrà guidarti lungo tutto il percorso di vendita della casa <br>
        Contattami e riceverai :
        <ul>
            <li>Una analisi di mercato della zona</li>
            <li>Un dettagliato <b>Piano di Marketing</b> personalizzato di vendita</li>
            <li>Reports dettagliati</li>
        </ul>
        Scopri i servizi dedicati alla vendita
      </p>
      <p><a class="btn btn-secondary" href="/vendita" role="button">Servizi Di Vendita</a></p>
    </div><!-- /.col-lg-4 -->
    <div class="col-lg-6">
        <img src="images/house-search.png" alt="" width="150" height="auto">
        <h2>Devi Comprare?</h2>
      <p>
         Avrai a disposizione il Listino immobiliare più fornito al mondo, un professionista ,
         di parte che ti affianca e ti guida in tutto il percorso d'acquisto di casa tua.
         Scopri i servizi dedicati a chi vuole acquistare.
      </p>
      <p><a class="btn btn-secondary" href="/ricerca" role="button">Servizi per l'acquirente</a></p>
    </div><!-- /.col-lg-4 -->
    <!-- /.col-lg-4 -->
  </div><!-- /.row -->


@endsection
