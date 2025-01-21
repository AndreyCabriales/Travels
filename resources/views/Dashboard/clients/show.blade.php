@extends('layout.main_template')

@section('content')

<div style="text-align: center">
    <br>    
<center>
<table  class="table table-bordered" style="width: 25%; border:2px; border-radius:100% " > 
    <thead class="table-dark">
        <th>Detalles del CLiente</th>
        <th></th>
    </thead>
    <tbody>
        <tr>
            <td>Nombre</td>
            <td>{{$client->name}}</td>
        </tr>
        <tr>
            <td>Apellido</td>
            <td>{{$client->last_name}}</td>
        </tr>
        <tr>
            <td>Telefono</td>
            <td>{{$client->celphone}}</td>
        </tr>
        <tr>
            <td>Email</td>
            <td>{{$client->email}}</td>
        </tr>
        <tr>
            <td>Genero</td>
            <td>{{$client->gender}}</td>
        </tr>
        <tr>
            <td>Nacionalidad</td>
            <td>{{$client->nationality}}</td>
        </tr>
    </tbody>
</table>
</center>
</div>

<!-- TODO Show Image -->
@endsection