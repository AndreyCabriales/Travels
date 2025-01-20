@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<h1 style="text-align: center">Creación de Clientes</h1>

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