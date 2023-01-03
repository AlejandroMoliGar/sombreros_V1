@extends('layouts.app')
@section('title', 'Trainers Edit')
@section('content')
<form class="form-group" method="POST" action="{{action('TrainerController@update', $trainer->id)}}" enctype="multipart/form-data" >
    @method('PUT')
    @csrf
<div clas="form-group">
<a href="/trainers" class="btn btn-primary"> Volver  </a>
<br>
    <label for="">Marca:</label>
    <input type="text"  name="Marca" value ="{{$trainer->Marca}}" class="form-control">
    <label for="">Modelo:</label>
    <input type="text"  name="Modelo" value ="{{$trainer->Modelo}}"class="form-control">
    <label for="">Diseño:</label>
    <input type="text"  name="Diseño" value ="{{$trainer->Diseño}}" class="form-control">
    <label for="">Color:</label>
    <input type="text"  name="Color" value ="{{$trainer->Color}}"class="form-control">
    <label for="">Talla:</label>
    <input type="text"  name="Talla" value ="{{$trainer->Talla}}" class="form-control">
</div>
<div clas="form-group"  >
    <label for="">Avatar:</label>
    <input type="file"  name="avatar" value ="{{$trainer->avatar}}" >
    </div>
<button type="submit"class="btn btn-primary">
    Editar </button>
</form>

@endsection