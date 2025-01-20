@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<h1>Editar Origenes</h1>

@if($errors->any())
    @foreach ($errors->all() as $e)
        <div class="error">
            {{$e}}
        </div>        
    @endforeach
@endif

<form action="{{route('origins.update', $origin->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('PUT')
    <label for="">Hora de Salida</label>
    <input type="text" name="origin_hour" value="{{$origin->origin_hour}}">

    <label for="">Ciudad</label>
    <input type="text" name="origin_city" value="{{$origin->origin_city}}"> 
    
    <label for="">Estado</label>
    <input type="text" name="origin_state" value="{{$origin->origin_state}}">

    <label for="">País</label>
    <input type="text" name="origin_country" value="{{$origin->origin_country}}">

    <button type="submit">Registrar</button>
</form>

@endsection