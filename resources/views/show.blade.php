@extends('layouts.app')
@section('title','Trainers')
@section('content')
<a href="/trainers" class="btn btn-primary">Volver</a>
            <img style="height: 100px; width: 100px;
            background-color: #EFEFEF; margin: 20px;
            " class="card-img-top rounded-circle mx-auto d-block" src="../images/{{$trainer->avatar}}" alt="">
            <h5 class="text-center">{{$trainer->Marca}} <br>{{$trainer->Modelo}} <br> {{$trainer->Diseño}} <br> {{$trainer->Color}} <br> {{$trainer->Talla}}</h5>
            
            <div class="text-center">
                
                <a href="/delete/{{$trainer->id}}" class="btn btn-primary">
                    Borrar... </a>
                <a href="/trainers/{{$trainer->id}}/edit" class="btn btn-secondary">
                Editar... </a>
            </div>
@endsection