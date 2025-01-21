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

<form action="{{route('expenses.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

    <label for="">Viaje</label>
    <select name= "travel_id">
        <option value="">Selecciona. . .</option>
            @foreach ( $travels as $travel => $id )
                <option value="{{$id}}">{{$travel}}</option>
            @endforeach
    </select>

    <label for="">Establecimientos</label>
    <input type="integer" name="estalishments"> 
    
    <label for="">Gasolina</label>
    <input type="double" name="gasoline">
    
    <label for="">Asientos</label>
    <input type="double" name="seating">

    <button type="submit">Registrar</button>
</form>

@endsection 