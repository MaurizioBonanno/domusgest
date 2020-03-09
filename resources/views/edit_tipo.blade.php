@extends('layouts.layout')


@section('content')
<h1>Edit Tipologia</h1>
<form action="/tipologia_updated/{{$tipologia->id}}" method="POST">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="PATCH">
    <div class="form-group">
        <label for="tipo">Tipo</label>
       <input type="text" name="tipo" id="tipo" value="{{$tipologia->tipologia}}" class="form-control" placeholder="tipologia">
    </div>
    <input type="submit" class="btn-small btn-primary" value="Submit">

</form>

@endsection
