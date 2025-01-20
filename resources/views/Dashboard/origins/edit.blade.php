@extends('layout.main_template')

@section('content')

@include('fragments.formstyles')

<h1 style="text-align: center">Editar Origenes</h1>

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