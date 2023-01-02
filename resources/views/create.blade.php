@extends('layouts.app')
@section('title', 'Trainers Create')
@section('content')

<form class="form-group" method="POST" action="/trainers" enctype="multipart/form-data" >
    @csrf
<div clas="form-group">
    <label for="">Marca:</label>
    <input type="text"  name="Marca" class="form-control">
    <label for="">Modelo:</label>
    <input type="text"  name="Modelo" class="form-control">
    <label for="">Diseño:</label>
    <input type="text"  name="Diseño" class="form-control">
    <label for="">Color:</label>
    <input type="text"  name="Color" class="form-control">
    <label for="">Talla:</label>
    <input type="text"  name="Talla" class="form-control">
</div>
<div clas="form-group"  >
    <label for="">Avatar:</label>
    <input type="file"  name="avatar" class="form-control">
    </div>
<button type="submit"class="btn btn-primary">
    Guardar</button>
   
</form>

    <p>Listado de mejores Sombreros</p>
    <div class="row">
    @foreach ($trainers as $trainer)
    <div class="col-sm">
        <div class="card text_center" style="width: 18rem; margin-top: 70px;">
        <img style="height: 100px; width: 100px;
        background-color: #EFEFEF; margin: 20px;
        "class="card-img-top rounded-circle mx-auto d-block";
        src='images/{{$trainer->avatar}}'alt="">;
  <div class="card-body">
    <h5 class="card-title">{{$trainer->Marca}} {{$trainer->Modelo}} {{$trainer->Diseño}} {{$trainer->Color}} {{$trainer->Talla}}</h5>
    
    <a href="/delete/{{$trainer->id}}" class="btn btn-primary">Borrar...</a>
    <a href="/trainers/{{$trainer->id}}/edit" class="btn-btn-secondary">Editar... </a>
    <a href="/trainers/{{$trainer->id}}" class="btn btn-secondary"> Mostrar... </a>
    <a href="/imprimir" class="btn btn-secondary"> Imprimir. </a>
  </div>
</div>
</div>
@endforeach
@endsection

    




