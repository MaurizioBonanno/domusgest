@extends('layouts.layout')

@section('content')
<div class="row" style="padding-top:3em">
    <div class="col-12">
        <p>
            <img src="images/remax.png" alt="">
            <h2>Servizi dedicati alla vendita </h2>

        </p>

    </div>
</div>
<hr>
<div class="row" >
    <div class="col-6">
        <p><i class="fas fa-phone-square"></i>
             Dopo aver fissato un appuntamento ,
             effettuerò un sopralluogo sull'immobile
         </p>
    </div>
    <div class="col-6">
        <p><i class="fas fa-file-contract"></i>
             Acquisizione incarico , raccolta della documentazione necessaria ,
             all'espletamento dell'incarico
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
              Indispensabile per conoscere gli immobili in vendita in zona , e per decidere
              come collocarci rispetto alla  concorrenza
              </p>
              <!--
              <a href="#" class="btn btn-primary">Go somewhere</a>
              -->
            </div>
          </div>
    </div>
    <div class="col-sm">
        <div class="card" style="width: 18rem;">
            <img src="images/pianodimarketing.jpg" class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Il Piano di Marketing</h5>
              <p class="card-text">
                Personalizzato su misura per il tuo immobile .
                Contenente le strategie che abbiamo deciso per vendere
                il tuo immobile nel minor tempo possibile e al miglior prezzo
              </p>
              <!--
              <a href="#" class="btn btn-primary">Go somewhere</a>
              -->
            </div>
          </div>
    </div>
    <div class="col-sm">
        <div class="card" style="width: 18rem;">
            <img src="images/report.jpg" height="220"  class="card-img-top" alt="...">
            <div class="card-body">
              <h5 class="card-title">Il Report</h5>
              <p class="card-text">
                Indispensabile per conoscere il lavoro svolto , e capire se la strategia
                di vendita sta dando buoni risultati
              </p>
              <!--
              <a href="#" class="btn btn-primary">Go somewhere</a>
              -->
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

