@extends('layout/main_template')

@section('content')

  <h1 style="text-align: center;">Destinos</h1>
    <br>
    

    <a class="btn btn-primary" href="{{route('destinations.create')}}" role="button">Crear Destino</a>
    <a class="btn btn-primary" href="{{route('travels.index')}}" role="button">Viajes</a>
    <br>
    <br>
    <table class="table table-bordered table-striped">
        <thead class=table-dark>
            <th>Hora de Entrada</th>
            <th>Ciudad</th>
            <th>Estado</th>
            <th>Pais</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($destinations as $d)
                <tr>
                    <td>{{$d->destination_hour}}</td>
                    <td>{{$d->destination_city}}</td>
                    <td>{{$d->destination_state}}</td>
                    <td>{{$d->destination_country}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route("destinations.show", $d)}}" role="button"><i class="fa-solid fa-circle-info"></i></a>
                        <a class="btn btn-success" href="{{route("destinations.edit", $d)}}" role="button"><i class="fa-solid fa-file-pen"></i></a>
                        <a class="btn btn-danger" href="{{route("destinations.delete", $d)}}" role="button"><i class="fa-solid fa-trash-can"></i></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$destinations->links()}} <!-- Genera los enlaces de cada página --> 
@endsection