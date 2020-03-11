@extends('layouts.layout')

@section('content')

<div class="container" style="padding-top:5em">



        <?php $count=0; ?>
        @foreach ($immobili  as $immobile)
        <hr class="featurette-divider">
            <div class="row featurette">
         @if ($count%2==0)
              <div class="col-md-7">
         @else
             <div class="col-md-7 order-md-2">
         @endif

             <h2 class="featurette-heading">{{ $immobile->titolo }} <span class="text-muted">  Vani:{{$immobile->vani}}  Mq:{{$immobile->mq}}  Prezzo:{{$immobile->prezzo}}</span></h2>
         <p class="lead">
           {{ $immobile->descrizione }}
         </p>
         <p>
            <a href="https://wa.me/393205504321?text=Sarei%20interessato%20ad%20avere%20maggiori%20informazioni%20grazie%20rif:{{$immobile->id}}" target="_blank">
                <div><font color="#008000"><b>chiedi informazioni tramite whatsapp</b></font>
                <img src="images/whatsapp.png" alt="contattami con whatsapp"
                    style="max-width: 100px; max-height: auto;">
                 </div>
            </a>
        </p>
       </div>
       <div class="col-md-5">
        <img src="{{asset('storage/'.$immobile->photo)}}" class="d-block w-100" alt="...">

        <?php
        $desc = str_replace(" ","-",$immobile->titolo);
        $slug=$immobile->operazione."-".$immobile->tipologia."-".$desc;
        ?>
        <br>
        <p><a class="btn btn-small btn-primary" href="/immobile/{{$immobile->id}}/{{$slug}}" role="button">Dettagli</a></p>

       </div>
     </div>

      <?php $count++ ?>
        @endforeach






</div>

@endsection
