@extends('layouts.layout')

@section('content')

<h1>Tipologie</h1>
<div>
    <input id="newTipo" type="text" class="form-group" placeholder="Nuova">
    <button class="btn btn-primary btn-small" id="newTipo">Aggiungi</button>
    <div id="msg"></div>
</div>
@if(session()->has('message'))
<div class="alert-info alert-dismissible fade show">
    {{session()->get('message')}}
</div>

@endif

<table class="table">
    <thead class="thead-dark">
      <tr>
        <th scope="col">Tipologia</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>

      <form id="form">
        <input type="hidden" name='_token' id='_token' value="{{csrf_token()}}">

      @foreach ($tipologie as $tipologia)
        <tr id="{{$tipologia->id}}">
          <td>{{$tipologia->tipologia}}</td>
          <td>
            <a href="tipologie/{{$tipologia->id}}/edit" class="btn btn-primary btn-small">edit</a>
          </td>
        </tr>

      @endforeach

      </form>
    </tbody>
  </table>

  <script>
 $(function(){
      $('button').on('click',function(ele){
        // alert($('#newTipo').val());
        tipo = $('#newTipo').val();
         url = 'add_tipologia'
         $.ajax(
             url,{
                 method: 'PATCH',
                 data: {
                    '_token': $('#_token').val(),
                    'tipo': tipo
                 },
                 complete: function(resp){
                    if(resp.responseText >= 1){
 //alert(resp.responseText);
                        res=resp.responseText;
                        $('.table').append('<tr id='+res+'><td>'+tipo+'</td><td><a href="tipologie/'+res+'/edit" class="btn btn-primary">Edit</a></td></tr>');
                       }else{
                        alert('Errore sul server');
                    }
                }
             }
         )
      })
 })
  </script>

@endsection
