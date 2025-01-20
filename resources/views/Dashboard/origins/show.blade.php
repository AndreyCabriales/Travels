@extends('layout.main_template')

@section('content')

<div style="text-align: center">
    <br>    
<center>
<table  class="table table-bordered" style="width: 25%; border:2px; border-radius:100% " > 
    <thead class="table-dark">
        <th>Detalles del Origen</th>
        <th></th>
    </thead>
    <tbody>
        <tr>
            <td>Hora de Salida</td>
            <td>{{$origin->origin_hour}}</td>
        </tr>
        <tr>
            <td>Ciudad</td>
            <td>{{$origin->origin_city}}</td>
        </tr>
        <tr>
            <td>Estado</td>
            <td>{{$origin->origin_state}}</td>
        </tr>
        <tr>
            <td>País</td>
            <td>{{$origin->origin_country}}</td>
        </tr>
    </tbody>
</table>
</center>
</div>

<!-- TODO Show Image -->
@endsection