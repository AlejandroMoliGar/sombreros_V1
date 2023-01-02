@extends('layouts.app')
@section('title', 'trainers')
@section('content')
<p>Listado de trainers</p>
    <div class="row">
    @foreach ($trainers as $trainer)
    <div class="col-sm">
        <div class="card text_center" style="width: 18rem; margin-top: 70px;">
        <img style="height: 100px; width: 100px;
        background-color: #EFEFEF; margin: 20px;
        "class="card-img-top rounded-circle mx-auto d-block";
        src='images/{{$trainer->avatar}}'alt="">;
  <div class="card-body">
    <h5 class="card-title">{{$trainer->Marca}}</h5>
    <h6 class="card-title">{{$trainer->Modelo}}</h6>
    <h5 class="card-title">{{$trainer->Diseño}}</h5>
    <h6 class="card-title">{{$trainer->Color}}</h6>
    <h5 class="card-title">{{$trainer->Talla}}</h5>
    <a href="/delete/{{$trainer->id}}" class="btn btn-primary">Delete...</a>
    <a href="/trainers/{{$trainer->id}}/edit" class="btn-btn-secondary">Editar... </a>
    <a href="/trainers/{{$trainer->id}}" class="btn btn-secondary"> Mostrar... </a>
  </div>
</div>
</div>
@endforeach
</div>
@endsection


