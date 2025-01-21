@extends('layout.main_template')

@section('content')

<div style="text-align: center">
    <br>    
<center>
<table  class="table table-bordered" style="width: 25%; border:2px; border-radius:100% " > 
    <thead class="table-dark">
        <th>Detalles del Destino</th>
        <th></th>
    </thead>
    <tbody>
        <tr>
            <td>Hora de Salida</td>
            <td>{{$destination->destination_hour}}</td>
        </tr>
        <tr>
            <td>Ciudad</td>
            <td>{{$destination->destination_city}}</td>
        </tr>
        <tr>
            <td>Estado</td>
            <td>{{$destination->destination_state}}</td>
        </tr>
        <tr>
            <td>País</td>
            <td>{{$destination->destination_country}}</td>
        </tr>
    </tbody>
</table>
</center>
</div>

<!-- TODO Show Image -->
@endsection