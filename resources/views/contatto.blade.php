@extends('layouts.layout')

@section('content')

<div class="row" style="padding-top:5em">

    <div class="col-12" >
        <div class="media" >
            <div class="media-body">
              <h5 class="mt-0 mb-1">Prenota Un appuntamento</h5>
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
