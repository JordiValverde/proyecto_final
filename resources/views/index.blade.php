@extends('layout')

@section('title')

    Nigga's Airline
    
@endsection

@section('content')
    
    <button name='Comprar_Boleto' onclick="window.location.href = '/buy';">
        <b>Comprar Boleto</b>
        <img src="http://www.desarrolloweb.com/images/logo_desarrollo_web.gif" width="261" height="35" alt="">
    </button>

    <button name='Reservar_Boleto' onclick="window.location.href = '/reserve';">
        <b>Reservar Boleto</b>
        <img src="http://www.desarrolloweb.com/images/logo_desarrollo_web.gif" width="261" height="35" alt="">
    </button>

@endsection