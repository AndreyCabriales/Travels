@extends('layout.main_template')

@section('content')

<div style="text-align: center">
    <br>    
<center>
<table  class="table table-bordered" style="width: 25%; border:2px; border-radius:100% " > 
    <thead class="table-dark">
        <th>Detalles de la Venta</th>
        <th></th>
    </thead>
    <tbody>
        <tr>
            <td>Viaje</td>
            <td>{{$sale->travel->description}}</td>
        </tr>
        <tr>
            <td>Cliente</td>
            <td>{{$sale->client->name}}</td>
        </tr>
        <tr>
            <td>Fecha</td>
            <td>{{$sale->sale_date}}</td>
        </tr>
        <tr>
            <td>Precio</td>
            <td>{{$sale->unit_price}}</td>
        </tr>
    </tbody>
</table>
</center>
</div>

<!-- TODO Show Image -->
@endsection