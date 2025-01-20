@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<h1 style="text-align: center">Editar Viajes</h1>

<style>
    .alert-custom {
    background-color: #ee9ca2;
    color: #000000;
    border: 1px solid #ff0019;
    margin-left: 30%;
    margin-right: 30%;
    padding: 10px;
    border-radius: 5px;
}

.alert-custom ul {
    list-style-type: none;
    padding-left: 0;
}
</style>

@if($errors->any())
    @foreach ($errors->all() as $e)
        <div class="error">
            {{$e}}
        </div>        
    @endforeach
@endif
<br>

<form action="{{route('travels.update', $travel->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label for="">Descripcion del Viaje</label>
    <input type="text" name="description" value="{{$travel->description}}">

    <label for=""><i class="fa-solid fa-upload"></i> Imagen</label>
    <input type="file" name="imagen">

    <label for="">Origen</label>
    <select name= "origin_id">
        <option value="">Selecciona. . .</option>
        @foreach ($origins as $origin => $id )
        <option {{$travel->origin_id == $id ? 'selected' : ''}} value="{{$id}}">{{$origin}}</option>
        @endforeach
    </select>

    <label for="">Destino</label>
    <select name= "destination_id">
        <option value="">Selecciona. . .</option>
        @foreach ($destinations as $destination => $id )
        <option {{$travel->destination_id == $id ? 'selected' : ''}} value="{{$id}}">{{$destination}}</option>
        @endforeach
    </select>

    <label for="">Fecha</label>
    <input type="date" name="travel_date" value="{{$travel->travel_date}}">

    <button type="submit">Registrar</button>
</form>

@endsection 