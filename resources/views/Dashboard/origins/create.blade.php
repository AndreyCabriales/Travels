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

<form action="{{route('origins.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

    <label for="">Hora de Salida</label>
    <input type="text" name="origin_hour">

    <label for="">Ciudad</label>
    <input type="text" name="origin_city"> 
    
    <label for="">Estado</label>
    <input type="text" name="origin_state">
    
    <label for="">Pais</label>
    <input type="text" name="origin_country">

    <button type="submit">Registrar</button>
</form>

@endsection 