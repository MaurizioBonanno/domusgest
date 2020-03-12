@extends('layouts.layout')

@section('content')

<div class="row" style="padding-top:3em">
    <div class="col-12">
        <p>
            <img src="images/remax.png" alt="">
            <h2>Servizi dedicati per l'acquisto</h2>

        </p>

    </div>
</div>
<hr>
<div class="row" >
    <div class="col-6">
        <p><i class="fas fa-phone-square"></i>
             Dopo aver fissato un appuntamento ,
             studieremo insieme le tue esigenze per individuare quali caratteristiche
             dovrà avere la tua nuova casa . Verificheremo insieme , quali spese dovrai affrontare
             e se ti occorre un mutuo studieremo la migliore soluzione per averlo a tassi e condizioni
             più favorevoli per le tue condizioni.
         </p>
    </div>
    <div class="col-6">
        <p><i class="fas fa-file-contract"></i>
             Acquisizione incarico , raccolta della documentazione necessaria ,
             avrai immediatamente a disposizione tutto il listino dei consulenti immobiliari
             REMAX , contenente centinaia di offerte ed in continuo aggiornamento giornaliero
         </p>
    </div>
    <div class="col-12">
        <h3>Ecco quello che riceverai:</h3>
    </div>
    <div class="col-sm">
        <div class="card" style="width: 18rem;">
            <img src="images/analisidimercato.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Analisi di Mercato</h5>
              <p class="card-text">
              Indispensabile per conoscere gli immobili in vendita in zona , avere un quadro
              preciso di tutte le offerte che ci sono in zona e per comprare al miglior prezzo
              la tua casa ideale
              </p>
              <!--
              <a href="#" class="btn btn-primary">Go somewhere</a>
              -->
            </div>
          </div>
    </div>
    <div class="col-sm">
        <div class="card" style="width: 18rem;">
            <img src="images/ricerca-casa.png" height="250" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Selezione dell'offerta</h5>
              <p class="card-text">
                Una selezione di case che rispecchiano unicamente le tue esigenze
                , evitando di perdere tempo con case non conformi alla tua richiesta
              </p>
              <!--
              <a href="#" class="btn btn-primary">Go somewhere</a>
              -->
            </div>
          </div>
    </div>
    <div class="col-sm">
        <div class="card" style="width: 18rem;">
            <img src="images/documenti.jpg" height="220"  class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Controllo dei documenti</h5>
              <p class="card-text">
                Raccolta e analisi della documentazione necessaria all'acquisto e
                all'eventuale mutuo ,
                per farti acquistare in tutta tranquillità e comodità
              </p>
              <!--
              <a href="#" class="btn btn-primary">Go somewhere</a>
              -->
            </div>
          </div>
    </div>
    <div class="col-10">
        <hr class="featurette-divider">

        <div class="row featurette">
          <div class="col-md-6">
            <h2 class="featurette-heading">Un consulente dedicato <span class="text-muted">Un esperto di parte che tratterà per te</span></h2>
            <p class="lead">
                Sarai affiancato e accompagnato in tutte le fasi della trattativa d'acquisto di casa tua
                 , avrai un esperto dalla tua parte
                che cercherà di ottenere il meglio per te
            </p>
          </div>
          <div class="col-md-5">
           <img src="images/accordo.jpg" alt="">
          </div>
        </div>

    </div>
</div>
<hr>
<div class="row">

        <div class="col-12">
            <div class="media">
                <div class="media-body">
                  <h5 class="mt-0 mb-1">Prenota Un appuntamento</h5>
                 <form action="">
                     <div class="form-group">
                         <label for="nome">Nome</label>
                         <input id="nome" class="form-control" type="text" name="nome" >
                     </div>
                     <div class="form-group">
                         <label for="email">Indirizzo Email</label>
                         <input id="email" class="form-control" type="email" name="email">
                     </div>
                     <div class="form-group">
                         <label for="telefono">Telefono</label>
                         <input id="telefono" class="form-control" type="text" name="telefono">
                     </div>
                     <div class="form-group">
                         <label for="messaggio">Messaggio</label>
                         <textarea id="messaggio" class="form-control" name="messaggio" rows="3"></textarea>
                     </div>
                     <button id="inviobtn" class="btn btn-light" type="button">Prenota</button>
                 </form>
                </div>
              </div>
        </div>

</div>

<script>
    $(document).ready(function(){
        $('#inviobtn').click(function(){
           var nome = $('#nome').val();
           var email = $('#email').val();
           var telefono = $('#telefono').val();
           var messaggio = $('#messaggio').val();

           var datastring='nome='+nome+'&email='+email+'&telefono='+telefono+'&messaggio='+messaggio;
           if(nome == '' || email=='' || telefono=='' || messaggio==''){
               alert('Tutti i campi devono essere riempiti');
           }else {
               //invio ajax form
               $.ajax({
                   method:'GET',
                   url : '/fissaappuntamento',
                   data: datastring,
                   cache: false,
                   success: function(result){
                       alert(result);
                   }
               })
           }
           return false;
        })
    })
</script>

@endsection
