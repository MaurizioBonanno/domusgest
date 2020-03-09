@extends('layouts.layout')

@section('content')

<h1>Operazioni</h1>
<div>
    <input id="newOperazione" type="text" class="form-group" placeholder="Nuova">
    <button class="btn btn-primary btn-small" id="newOperazione">Aggiungi</button>
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
        <th scope="col">Operazione</th>
        <th scope="col">Actions</th>
      </tr>
    </thead>
    <tbody>

      <form id="form">
        <input type="hidden" name='_token' id='_token' value="{{csrf_token()}}">

      @foreach ($operazioni as $operazione)
        <tr id="{{$operazione->id}}">
          <td>{{$operazione->operazione}}</td>
          <td>
            <a href="operazioni/{{$operazione->id}}/edit" class="btn btn-primary btn-small">edit</a>
          </td>
        </tr>

      @endforeach

      </form>
    </tbody>
  </table>

  <script>
 $(function(){
      $('button').on('click',function(ele){
        alert($('#newOperazione').val());
        tipo = $('#newOperazione').val();
         url = 'add_operazione'
         $.ajax(
             url,{
                 method: 'PATCH',
                 data: {
                    '_token': $('#_token').val(),
                    'tipo': tipo
                 },
                 complete: function(resp){
                    if(resp.responseText >= 1){
                        res=resp.responseText;
                        $('.table').append('<tr id='+res+'><td>'+tipo+'</td><td><a href="operazioni/'+res+'/edit" class="btn btn-primary">Edit</a></td></tr>');
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
