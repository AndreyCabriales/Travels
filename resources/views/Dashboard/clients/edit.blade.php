@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<h1>Editar Clientes</h1>

@if($errors->any())
    @foreach ($errors->all() as $e)
        <div class="error">
            {{$e}}
        </div>        
    @endforeach
@endif

<form action="{{route('clients.update', $client->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label for="">Nombre</label>
    <input type="text" name="name" value="{{$client->name}}">

    <label for="">Apellido</label>
    <input type="text" name="last_name" value="{{$client->last_name}}"> 
    
    <label for="">Telefono</label>
    <input type="tel" name="celphone" value="{{$client->celphone}}">

    <label for="">Correo</label>
    <input type="email" name="email" value="{{$client->email}}">

    <label for="">Genero</label>
    <input type="text" name="gender" value="{{$client->gender}}">

    <label for="">Nacionalidad</label>
    <input type="text" name="nationality" value="{{$client->nationality}}">

    <label for=""><i class="fa-solid fa-upload"></i> Identificacion </label>
    <input type="file" name="imagen">

    <button type="submit">Registrar</button>
</form>

@endsection 