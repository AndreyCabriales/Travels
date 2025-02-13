@extends('layout/main_template')

@section('content')
<br>
  <h1 style="text-align: center;">Origenes</h1>
    <br>
    

    <a class="btn btn-primary" href="{{route('origins.create')}}" role="button">Crear Origen</a>
    <a class="btn btn-primary" href="{{route('travels.index')}}" role="button">Viajes</a>
    <br>
    <br>
    <table class="table table-bordered table-striped">
        <thead class=table-dark>
            <th>Hora de Salida</th>
            <th>Ciudad</th>
            <th>Estado</th>
            <th>Pais</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($origins as $o)
                <tr>
                    <td>{{$o->origin_hour}}</td>
                    <td>{{$o->origin_city}}</td>
                    <td>{{$o->origin_state}}</td>
                    <td>{{$o->origin_country}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route("origins.show", $o)}}" role="button"><i class="fa-solid fa-circle-info"></i></a>
                        <a class="btn btn-success" href="{{route("origins.edit", $o)}}" role="button"><i class="fa-solid fa-file-pen"></i></a>
                        <a class="btn btn-danger" href="{{route("origins.delete", $o)}}" role="button"><i class="fa-solid fa-trash-can"></i></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$origins->links()}} <!-- Genera los enlaces de cada página --> 
@endsection