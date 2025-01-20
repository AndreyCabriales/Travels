@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<h1>Create de Viajes    </h1>

@if($errors->any())
    @foreach ($errors->all() as $e)
        <div class="error">
            {{$e}}
        </div>        
    @endforeach
@endif

<form action="{{route('travels.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="">Descripcion del Viaje</label>
    <input type="text" name="descripcion">

    <label for="">Imagen</label>
    <input type="file" name="imagen"> 

    <label for="">Origen</label>
    <select name= "origin_id">
        <option value="">Selecciona. . .</option>
            @foreach ( $origins as $origin => $id )
                <option value="{{$id}}">{{$origin}}</option>
            @endforeach
    </select>

    <label for="">Destino</label>
    <select name= "destination_id">
        <option value="">Selecciona. . .</option>
            @foreach ( $destinations as $destination => $id )
                <option value="{{$id}}">{{$destination}}</option>
            @endforeach
    </select>
    
    <label for="">Fecha</label>
    <input type="date" name="travel_date">

    

    <button type="submit">Registrar</button>
</form>

@endsection 