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