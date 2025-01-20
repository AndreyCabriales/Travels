@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<h1 style="text-align: center">Editar Clientes</h1>

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
        <div class="alert-custom">
            {{$e}}
        </div>        
    @endforeach
@endif
<br>

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
    <input type="file" name="identify">

    <button type="submit">Registrar</button>
</form>

@endsection 