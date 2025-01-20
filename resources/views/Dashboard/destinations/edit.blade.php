@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<h1>Editar Destinos</h1>

@if($errors->any())
    @foreach ($errors->all() as $e)
        <div class="error">
            {{$e}}
        </div>        
    @endforeach
@endif

<form action="{{route('destinations.update', $destination->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label for="">Hora de Llegada</label>
    <input type="text" name="destination_hour" value="{{$destination->destination_hour}}">

    <label for="">Ciudad</label>
    <input type="text" name="destination_city" value="{{$destination->destination_city}}"> 
    
    <label for="">Estado</label>
    <input type="text" name="destination_state" value="{{$destination->destination_state}}">

    <label for="">País</label>
    <input type="text" name="destination_country" value="{{$destination->destination_country}}">

    <button type="submit">Registrar</button>
</form>

@endsection