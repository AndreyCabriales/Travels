@extends('layout.main_template')

@section('content')

<div style="text-align: center">
    <br>    
<center>
<table  class="table table-bordered" style="width: 25%; border:2px; border-radius:100% " > 
    <thead class="table-dark">
        <th>Detalles de los Gastos</th>
        <th></th>
    </thead>
    <tbody>
        <tr>
            <td>Viaje</td>
            <td>{{$expense->travel->id}}</td>
        </tr>
        <tr>
            <td>Establecimientos</td>
            <td>{{$expense->establishments}}</td>
        </tr>
        <tr>
            <td>Gasolina</td>
            <td>{{$expense->gasoline}}</td>
        </tr>
        <tr>
            <td>Asientos</td>
            <td>{{$expense->seating}}</td>
        </tr>
        <tr>
            <td>Asientos</td>
            <td>{{$expense->total}}</td>
        </tr>
    </tbody>
</table>
</center>
</div>

<!-- TODO Show Image -->
@endsection