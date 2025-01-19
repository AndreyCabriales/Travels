@extends('layout/main_template')

@section('content')

  <h1>Clients</h1>
    <br>
    

    <a class="btn btn-primary" href="{{route('clients.create')}}" role="button">Crear Clientes</a>

    <br>
    <br>
    <table class="table table-bordered table-striped">
        <thead>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Celular</th>
            <th>Correo</th>
            <th>Genero</th>
            <th>Nacionalidad</th>
            <th>Identificacion</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($clients as $c)
                <tr>
                    <td>{{$c->name}}</td>
                    <td>{{$t->last_name}}</td>
                    <td>{{$t->celphone}}</td>
                    <td>{{$t->email}}</td>
                    <td>{{$t->gender}}</td>
                    <td>{{$t->nationality}}</td>
                    <td><img src="image/travels/{{$t->imagen}}" width="150" height="110" alt=""></td>
                    <td>
                        <a class="btn btn-primary" href="{{route("travels.show", $t)}}" role="button"><i class="fa-solid fa-circle-info"></i></a>
                        <a class="btn btn-success" href="{{route("travels.edit", $t)}}" role="button"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a class="btn btn-danger" href="{{route("travels.delete", $t)}}" role="button"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$clients->links()}} <!-- Genera los enlaces de cada página --> 
@endsection