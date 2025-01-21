@extends('layout/main_template')

@section('content')
<br>
  <h1 style="text-align: center">Clientes</h1>
    <br>
    

    <a class="btn btn-primary" href="{{route('clients.create')}}" role="button">Crear Clientes</a>

    <br>
    <br>
    <table class="table table-bordered table-striped">
        <thead class=table-dark>
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
                    <td>{{$c->last_name}}</td>
                    <td>{{$c->celphone}}</td>
                    <td>{{$c->email}}</td>
                    <td>{{$c->gender}}</td>
                    <td>{{$c->nationality}}</td>
                    <td><img src="image/clients/{{$c->identify}}" width="150" height="110" alt=""></td>
                    <td>
                        <a class="btn btn-primary" href="{{route("clients.show", $c)}}" role="button"><i class="fa-solid fa-circle-info"></i></a>
                        <a class="btn btn-success" href="{{route("clients.edit", $c)}}" role="button"><i class="fa-solid fa-file-pen"></i></a>
                        <a class="btn btn-danger" href="{{route("clients.delete", $c)}}" role="button"><i class="fa-solid fa-trash-can"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$clients->links()}} <!-- Genera los enlaces de cada página --> 
@endsection