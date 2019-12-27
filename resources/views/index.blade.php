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
        <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi.ytimg.com%2Fvi%2FKaLx5E7345U%2Fhqdefault.jpg&f=1&nofb=1" width="261" height="35" alt="">
    </button>

    <button class="write" name='Reservar_Boleto' onclick="window.location.href = '/reserve';">
        <link rel="stylesheet" href="css/stiles.css">
        <b>Reservar Boleto</b>
        <img src="https://external-content.duckduckgo.com/iu/?u=https%3A%2F%2Fi.ytimg.com%2Fvi%2FKaLx5E7345U%2Fhqdefault.jpg&f=1&nofb=1" width="261" height="35" alt="">
    </button>

    <form method="GET" action="/reserve/show">
        @method('GET')
        @csrf
        <input class="write" type="text" name="id" placeholder="Buscar por DNI"/>
        <button class="write" type="submit">
            <b>Aceptar</b>
        </button>
    </form>
@endsection
</div>
