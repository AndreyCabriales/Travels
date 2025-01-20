@extends('layout.main_template')

@section('content')

<div style="text-align: center">
    <br>    
<center>
<table  class="table table-bordered" style="width: 25%; border:2px; border-radius:100% " > 
    <thead class="table-dark">
        <th>Detalles del Viaje</th>
        <th></th>
    </thead>
    <tbody>
        <tr>
            <td>Viaje</td>
            <td>{{$travel->description}}</td>
        </tr>
        <tr>
            <td>Imagen</td>
            <td><img src="image/travels/{{$travel->imagen}}" width="100" height="100" alt=""></td>
        </tr>
        <tr>
            <td>Origen</td>
            <td>Ciudad:{{$travel->origin->origin_city}}
            <br>
            Estado:{{$travel->origin->origin_state}}
            <br>
            País:{{$travel->origin->origin_country}}</td>
        </tr>
        <tr>
            <td>Destino</td>
            <td>Ciudad:{{$travel->destination->destination_city}}
            <br>
            Estado:{{$travel->destination->destination_state}}
            <br>
            País:{{$travel->destination->destination_country}}</td>
        </tr>
        <tr>
            <td>Fecha</td>
            <td>{{$travel->travel_date}}</td>
        </tr>
    </tbody>
</table>
</center>
</div>

<!-- TODO Show Image -->
@endsection