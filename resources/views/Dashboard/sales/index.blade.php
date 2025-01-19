@extends('layout/main_template')

@section('content')

  <h1>Ventas</h1>
    <br>
    

    <a class="btn btn-primary" href="{{route('sales.create')}}" role="button">Crear Ventas</a>
    <a class="btn btn-primary" href="{{route('travels.create')}}" role="button">Crear Viajes</a>
    <a class="btn btn-primary" href="{{route('clients.create')}}" role="button">Crear Clientes</a>

    <br>
    <br>
    <table class="table table-bordered table-striped">
        <thead>
            <th>Viaje</th>
            <th>Cliente</th>
            <th>Fecha</th>
            <th>Precio</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @foreach ($sales as $s)
                <tr>
                    <td>{{$s->travel->id}}</td>
                    <td>{{$s->travel->id}}</td>
                    <td>{{$s->sale_date}}</td>
                    <td>{{$s->unit_pric}}</td>
                    <td>
                        <a class="btn btn-primary" href="{{route("sales.show", $t)}}" role="button"><i class="fa-solid fa-circle-info"></i></a>
                        <a class="btn btn-success" href="{{route("sales.edit", $t)}}" role="button"><i class="fa-solid fa-pen-to-square"></i></a>
                        <a class="btn btn-danger" href="{{route("sales.delete", $t)}}" role="button"><i class="fa-solid fa-trash"></i></a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{$sales->links()}} <!-- Genera los enlaces de cada página --> 
@endsection