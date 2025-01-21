@extends('layout/main_template')

@section('content')
<br>
  <h1 style="text-align: center;">Gastos</h1>
    <br>
    

    <a class="btn btn-primary" href="{{route('expenses.create')}}" role="button">Crear Gasto</a>
    <br>
    <br>
    <table class="table table-bordered table-striped">
        <thead class=table-dark>
            <th>Viaje</th>
            <th>Establecimientos</th>
            <th>Gasolina</th>
            <th>Asientos</th>
            <th>Total</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($expenses as $e)
                <tr>
                    <td>{{$e->travel_id}}</td>
                    <td>{{$e->establishments}}</td>
                    <td>{{$e->gasoline}}</td>
                    <td>{{$e->seating}}</td>
                    <td>{{$e->total}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route("expenses.show", $e)}}" role="button"><i class="fa-solid fa-circle-info"></i></a>
                        <a class="btn btn-success" href="{{route("expenses.edit", $e)}}" role="button"><i class="fa-solid fa-file-pen"></i></a>
                        <a class="btn btn-danger" href="{{route("expenses.delete", $e)}}" role="button"><i class="fa-solid fa-trash-can"></i></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$expenses->links()}} <!-- Genera los enlaces de cada página --> 
    
    <table class="table table-dark table-striped" style="width: 25%; border:2px; border-radius:100% ">
        <thead>
            <th>Costos</th>
            <th>Equivalencia</th>
        </thead>
        <tbody>
            <tr>
                <td>1 establecimiento</td>
                <td>$200</td>
            </tr>
            <tr>
                <td>1 litro de gasolina</td>
                <td>$24</td>
            </tr>
            <tr>
                <td>1 asiento</td>
                <td>$80</td>
            </tr>
        </tbody>
      </table>
@endsection