@extends('layouts.layout')

@section('content')

<div class="row" style="padding-top:5em">
    <div class="col-lg-12">
        <h1 class="small-title">Maurizio Bonanno Remax agente immobiliare in Genova</h1>
    </div>
    <div class="col-12">
        <h2 class="mini-title">Se vuoi saperne di più , su come vendere o acquistare casa , contattami , compila il modulo nella pagina e sarai ricontattato</h2>
    </div>
    <div class="col-12">
        <p>
            Se vuoi Vendere o Acquistare la tua nuova casa , affidati con fiducia ad un professionista di provata esperienza.
            Sono Maurizio Bonanno , faccio l'agente immobiliare in Genova dal 1992.
            Puoi prenotare un appuntamento compilando la scheda sottostante , sarò lieto di incontrarti e spiegarti come
            insieme possiamo raggiungere i tuoi obbiettivi. Ti fornirò di un accurato e personalizzato piano di Marketing
            in accordo con le tue esigenze abitative , metterò a tua disposizione l'intera mia organizzazione e
            collaboreremo insieme fino al raggiungimento degli obbiettivi prefissati.
            Avrai una analisi di mercato immobiliare che ci consentirà di capire come posizionare il tuo immobile
            rispetto alla concorrenza.
        </p>
    </div>

    <div class="col-12" >
        <div class="media" >
            <div class="media-body">
              <h5 class="mt-0 mb-1">Prenota Un appuntamento</h5>
              <br>
              <h6>La compilazione della scheda non è in alcun modo impegnativa e non comporta messun obbligo di acquisto</h6>
             <form action="">
                 <div class="form-group" >
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
