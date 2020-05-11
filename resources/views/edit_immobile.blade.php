@extends('layouts.layout')

@section('content')

<form action="/updateimmobile/{{$immobile->id}}" method="POST" enctype="multipart/form-data">
    {{csrf_field()}}
    <input type="hidden" name="_method" value="PATCH">
    <div class="form-group">

        <div class="form-group">
            <label for="operazione">Operazione</label>
            <select class="form-control" id="operazione" name="operazione">

            @foreach ($operazioni as $operazione)
                 @if ($operazione->id == $immobile->id_operazione)
                 <option value="{{$operazione->id}}" selected>{{$operazione->operazione}}</option>
                 @endif
                 <option value="{{$operazione->id}}">{{$operazione->operazione}}</option>
            @endforeach
            </select>
          </div>

            <label for="titolo">Titolo</label>
        <input type="text" value="{{$immobile->titolo}}" name="titolo" id="titolo" placeholder="titolo" class="form-control" required>

            <div class="form-group">
                <label for="descrizione">Descrizione</label>
                <textarea class="form-control" name="descrizione" id="descrizione" rows="3" required>
                    {{ $immobile->descrizione }}
                </textarea>
            </div>
            <br>
        <img name="thumb" src="{{asset('storage/'.$immobile->photo)}}" width="100" height="auto"><br>
            <label for="immagine">Immagine</label><br>
            <input type="file" name="immagine" id="immagine" class="form-group"><br>

            <div class="form-group">
                <label for="tipologia">Tipologia</label>
                <select class="form-control" id="tipologia" name="tipologia">

                @foreach ($tipologie as $tipologia)
                    @if ($tipologia->id == $immobile->id_tipologia)
                    <option value="{{$tipologia->id}}" selected>{{$tipologia->tipologia}}</option>
                    @endif
                     <option value="{{$tipologia->id}}">{{$tipologia->tipologia}}</option>
                @endforeach
                </select>
              </div>
            <label for="metri">Metri</label>
            <input type="number" name="metri" id="metri" value="{{ $immobile->mq }}"  class="form-control" required>
            <label for="bagni">Bagni</label>
            <input type="number" name="bagni" id="bagni" value="{{ $immobile->bagni }}" class="form-control" required >
            <label for="camere">Camere</label>
            <input type="number" name="camere" id="camere" value="{{ $immobile->camere }}"  class="form-control" required >
            <label for="vani">Vani</label>
            <input type="number" name="vani" id="vani" value="{{$immobile->vani}}"  class="form-control" required >
            <label for="indirizzo">Indirizzo</label>
            <input type="text" name="indirizzo" value="{{$immobile->indirizzo}}" id="indirizzo"  class="form-control" required >
            <label for="provincia">Provincia</label>
            <input type="text" name="provincia" id="provincia" value="{{$immobile->provincia}}" placeholder="Provincia" class="form-control" required>
            <label for="ace">ACE</label>
            <input type="text" name="ace" id="ace" value="{{$immobile->certificazione}}" placeholder="ACE" class="form-control" required>

            <label for="link">Prezzo</label>
            <input type="number" name="prezzo" value="{{$immobile->prezzo}}" id="prezzo"  class="form-control" required >

            <label for="link">Visita virtuale</label>
            <input type="text" name="realistico" id="realistico" value="{{ $immobile->realistico }}" class="form-control">
    </div>
    <input type="submit" class="btn-small btn-primary" value="Submit">

</form>

@endsection
