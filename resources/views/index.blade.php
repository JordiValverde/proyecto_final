@extends('layout')

@section('title')

    Nigga's Airline

@endsection

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" />
<link rel="stylesheet" href="css/bootstrap.min.css">
@section('content')
<div class='body'>
    <button class="write" name='Comprar_Boleto' onclick="window.location.href = '/buyI';">
        <link rel="stylesheet" href="css/stiles.css">
        <b>Comprar Boleto</b>
        <img src="http://www.desarrolloweb.com/images/logo_desarrollo_web.gif" width="261" height="35" alt="">
    </button>

    <button class="write" name='Reservar_Boleto' onclick="window.location.href = '/reserve';">
        <link rel="stylesheet" href="css/stiles.css">
        <b>Reservar Boleto</b>
        <img src="http://www.desarrolloweb.com/images/logo_desarrollo_web.gif" width="261" height="35" alt="">
    </button>

    <form method="GET" action="/show">
        @method('GET')
        @csrf
        <input class="write" type="text" name="id" placeholder="Buscar por ID de Vuelo"/>
        <button class="write" type="submit">
            <b>Aceptar</b>
        </button>
    </form>
@endsection
</div>
