@extends('layouts.app')

@section('content')

    <h1>Bienvenid@ {{Auth::user()->name}} a su Panel de Control</h1>

    @if (Session::has('status'))
    <hr />
    <div class='text-success'>
        {{Session::get('status')}}
    </div>
    <hr />
    @endif

    <img src='' alt="img-perfil" class='img-responsive' style='max-width: 150px' />

    <h3>Opciones:</h3>

    <ul>
        @foreach($usuarios as $usuario)
        <li><a href="#">Cambiar mi imagen de perfil</a></li>
        <li><a href="" data-target="#modal-{{$usuario->id}}" data-toggle="modal">Cambiar mi password</a></li>
        @include('user.modal')
        @endforeach        
    </ul>

@stop