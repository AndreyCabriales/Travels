@extends('layout/main_template')

@section('content')

<br>
  <h1 style="text-align: center">Viajes</h1>
    <br>
    

    <a class="btn btn-primary" href="{{route('travels.create')}}" role="button" >Crear Viaje</a>
    <a class="btn btn-primary" href="{{route('origins.index')}}" role="button">Origenes</a>
    <a class="btn btn-primary" href="{{route('destinations.index')}}" role="button">Destinos</a>

    <br>
    <br>
    <table class="table table-bordered table-striped">
        <thead class=table-dark>
            <th>Descripción del viaje</th>
            <th>Imagen</th>
            <th>Origen</th>
            <th>Destino</th>
            <th>Fecha</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($travels as $t)
                <tr>
                    <td>{{$t->description}}</td>
                    <td><img src="image/travels/{{$t->imagen}}" width="150" height="180" alt=""></td>
                    <td>
                        <p>{{$t->origin->origin_city}}</p>
                    </td>
                    <td>
                        <p>{{$t->destination->destination_city}}</p>
                    </td>
                    <td>{{$t->travel_date}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route("travels.show", $t)}}" role="button"><i class="fa-solid fa-circle-info"></i></a>
                        <a class="btn btn-success" href="{{route("travels.edit", $t)}}" role="button"><i class="fa-solid fa-file-pen"></i></a>
                        <a class="btn btn-danger" href="{{route("travels.delete", $t)}}" role="button"><i class="fa-solid fa-trash-can"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$travels->links()}} <!-- Genera los enlaces de cada página --> 
@endsection