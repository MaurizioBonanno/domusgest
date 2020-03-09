@extends('layouts.layout')

@section('content')

<div class="row" style="padding-top: 5em">
    <div class="col-md-10">
    <h3>Listino</h3>
    </div>
    <table class="table table-light">
        <table class="table table-light">
            <thead class="thead-light">
                <tr>
                    <th>Operazione</th>
                    <th>Tipo</th>
                    <th>Titolo</th>
                    <th>Indirizzo</th>
                    <th>Metri</th>
                    <th>Prezzo</th>
                    <th>Foto</th>
                    <th>Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($immobili as $immobile)
                    <tr>
                        <td>{{ $immobile->operazione }}</td>
                        <td>{{ $immobile->tipologia }}</td>
                        <td>{{ $immobile->titolo }}</td>
                        <td>{{ $immobile->indirizzo}}</td>
                        <td>{{ $immobile->mq }}</td>
                        <td>{{ $immobile->prezzo}}</td>
                    <td> <img src="{{asset('storage/'.$immobile->photo)}}" alt="" width="100" height="auto"> </td>
                    <td>

                    <a href="{{ route('dettagli',['id'=>$immobile->id])}}" title="Dettagli">
                         <button class="btn-small btn-primary " type="button">
                            <i class="fas fa-info-circle"></i>
                         </button>
                     </a>

                     <a href="immobile/{{$immobile->id}}/add_foto" title="Aggiungi Foto">
                        <button class="btn-small btn-primary " type="button">
                            <i class="fas fa-photo-video"></i>
                        </button>
                    </a>

                    <a href="immobili/{{$immobile->id}}/edit" title="Modifica">
                        <button class="btn-small btn-primary" type="button">
                            <i class="far fa-edit"></i>
                        </button>
                    </a>

                    <a href="immobili/{{$immobile->id}}/delete" title="Elimina">
                        <button class="btn-small btn-danger" type="button">
                            <i class="fas fa-trash-alt"></i>
                        </button>
                    </a>
                    </td>
                    </tr>
                @endforeach

            </tbody>
        </table>
        <tbody>
            <tr>
                <td></td>
            </tr>
        </tbody>
    </table>
</div>

@endsection
