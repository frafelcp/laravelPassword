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
        <li><a href="#">Cambiar mi imagen de perfil</a></li>
        <li><a href="{{url('user/password')}}">Cambiar mi password</a></li>
    </ul>

@stop