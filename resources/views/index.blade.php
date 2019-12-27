@extends('layout')

@section('title')

    Nigga's Airline

@endsection

@section('content')

    <button name='Comprar_Boleto' onclick="window.location.href = '/buyI';">
        <b>Comprar Boleto</b>
        <img src="http://www.desarrolloweb.com/images/logo_desarrollo_web.gif" width="261" height="35" alt="">
    </button>

    <button name='Reservar_Boleto' onclick="window.location.href = '/reserve';">
        <b>Reservar Boleto</b>
        <img src="http://www.desarrolloweb.com/images/logo_desarrollo_web.gif" width="261" height="35" alt="">
    </button>

    <form method="GET" action="/reserve/show">
        @method('GET')
        @csrf
        <input type="text" name="id" placeholder="Buscar por ID de Vuelo"/>
        <button type="submit">Aceptar</button>
    </form>
@endsection
