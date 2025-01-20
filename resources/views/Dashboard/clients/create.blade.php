@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<h1>Creación de Clientes</h1>

@if($errors->any())
    @foreach ($errors->all() as $e)
        <div class="error">
            {{$e}}
        </div>        
    @endforeach
@endif

<form action="{{route('clients.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="">Nombre</label>
    <input type="text" name="name">

    <label for="">Apellido</label>
    <input type="text" name="last_name"> 
    
    <label for="">Telefono</label>
    <input type="tel" name="celphone">

    <label for="">Correo</label>
    <input type="email" name="email">

    <label for="">Genero</label>
    <input type="text" name="gender">

    <label for="">Nacionalidad</label>
    <input type="text" name="nationality">

    <label for="">Identificacion</label>
    <input type="file" name="identify">

    <button type="submit">Registrar</button>
</form>

@endsection 