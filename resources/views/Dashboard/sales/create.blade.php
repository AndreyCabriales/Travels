@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<h1>Creación de Ventas</h1>

@if($errors->any())
    @foreach ($errors->all() as $e)
        <div class="error">
            {{$e}}
        </div>        
    @endforeach
@endif

<form action="{{route('sales.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

    <label for="">Viaje</label>
    <select name= "travel_id">
        <option value="">Selecciona. . .</option>
            @foreach ( $travels as $travel => $id )
                <option value="{{$id}}">{{$travel}}</option>
            @endforeach
    </select>

    <label for="">Cliente</label>
    <select name= "client_id">
        <option value="">Selecciona. . .</option>
            @foreach ( $clients as $client => $id )
                <option value="{{$id}}">{{$client}}</option>
            @endforeach
    </select>
    
    <label for="">Fecha</label>
    <input type="date" name="sale_date">

    <label for="">Precio</label>
    <input type="int" name="unit_price">

    <button type="submit">Registrar</button>
</form>

@endsection 