@extends('layouts.layout')


@section('content')
<h1>Edit Operazione</h1>
<form action="/operazione_updated/{{$operazione->id}}" method="POST">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="PATCH">
    <div class="form-group">
        <label for="tipo">Tipo</label>
       <input type="text" name="operazione" id="operazione" value="{{$operazione->operazione}}" class="form-control" placeholder="tipologia">
    </div>
    <input type="submit" class="btn-small btn-primary" value="Submit">

</form>

@endsection
