@extends('layouts.layout')

@section('content')

<form action="/saveimmobile" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="PATCH">
    <div class="form-group">

        <div class="form-group">
            <label for="operazione">Operazione</label>
            <select class="form-control" id="operazione" name="operazione">

            @foreach ($operazioni as $operazione)
                 <option value="{{$operazione->id}}">{{$operazione->operazione}}</option>
            @endforeach
            </select>
          </div>

            <label for="titolo">Titolo</label>
            <input type="text" name="titolo" id="titolo" placeholder="titolo" class="form-control" required>

            <div class="form-group">
                <label for="descrizione">Descrizione</label>
                <textarea class="form-control" name="descrizione" id="descrizione" rows="3" required></textarea>
            </div>
            <br>
            <img name="thumb" src="" alt=""><br>
            <label for="immagine">Immagine</label><br>
            <input type="file" name="immagine" id="immagine" class="form-group" required><br>

            <div class="form-group">
                <label for="tipologia">Tipologia</label>
                <select class="form-control" id="tipologia" name="tipologia">

                @foreach ($tipologie as $tipologia)
                     <option value="{{$tipologia->id}}">{{$tipologia->tipologia}}</option>
                @endforeach
                </select>
              </div>
            <label for="metri">Metri</label>
            <input type="number" name="metri" id="metri"  class="form-control" required>
            <label for="bagni">Bagni</label>
            <input type="number" name="bagni" id="bagni"  class="form-control" required >
            <label for="camere">Camere</label>
            <input type="number" name="camere" id="camere"  class="form-control" required >
            <label for="vani">Vani</label>
            <input type="number" name="vani" id="vani"  class="form-control" required >
            <label for="indirizzo">Indirizzo</label>
            <input type="text" name="indirizzo" id="indirizzo"  class="form-control" required >
            <label for="provincia">Provincia</label>
            <input type="text" name="provincia" id="provincia" placeholder="Provincia" class="form-control" required>
            <label for="ace">ACE</label>
            <input type="text" name="ace" id="ace" placeholder="ACE" class="form-control" required>

            <label for="link">Prezzo</label>
            <input type="number" name="prezzo" id="prezzo"  class="form-control" required >

    </div>
    <input type="submit" class="btn-small btn-primary" value="Submit">

</form>

@endsection
