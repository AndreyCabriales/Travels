@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<h1 style="text-align: center">Creación de Destinos</h1>

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

<form action="{{route('destinations.store')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <label for="">Hora de Llegada</label>
    <input type="text" name="destination_hour">

    <label for="">Ciudad</label>
    <input type="text" name="destination_city"> 
    
    <label for="">Estado</label>
    <input type="text" name="destination_state">
    
    <label for="">Pais</label>
    <input type="text" name="destination_country">


    <button type="submit">Registrar</button>
</form>

@endsection 