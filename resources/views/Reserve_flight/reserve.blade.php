@extends('layout')

@section('title')

    Nigga's Airline - Reserva

@endsection

<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" />
<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/stiles.css">

    <span>Reserva o compra de Pasajes</span>
    <a href="/" class="btn btn-primary btn-sm">Volver a Inicio</a>


@section('content')
<div class="body">
    <form method="POST" action="/reserve">
        @csrf

        <input type="time" name="Hsalida" placeholder="Hora de Salida"/>
        <input type="time" name="Hllegada" placeholder="Hora de llegada"/>
        <input type="date" name="Fsalida" placeholder="Fecha de Salida"/>
        <input type="date" name="Fllegada" placeholder="Fecha de llegada"/>

        <select name="piloto">
            <option value="1">hi</option>
            <option value="2">Marco</option>
        </select>
        <select name="estado">
            <option value="Reservado">Reservar</option>
            <option value="Comprado">Comprar</option>
        </select>
        <select name="ciudadDestino">
            <option value="1">huanuco</option>
            <option value="2">tingo maria</option>
        </select>
        <select name="ciudadSalida">
            <option value="1">huanuco</option>
            <option value="2">tingo maria</option>
        </select>
        <select name="avion">
            <option value="1">jet</option>
            <option value="2">af45</option>
        </select>
        <select name="asiento">
            <option value="1">1</option>
            <option value="2">2</option>
        </select>
        <select name="tipo_vuelo">
            <option value="Primera Clase">Primera Clase</option>
            <option value="Turista">Turista</option>
        </select>
        <input type="text" name="dni" placeholder="DNI"/>
        <select name="sexo">
            <option value="Masculino">Masculino</option>
            <option value="Femenino">Femenino</option>
        </select>
        <input type="text" name="edad" placeholder="Edad"/>
        <input type="text" name="nombre" placeholder="Nombre"/>
        <input type="text" name="apellido" placeholder="Apellido"/>

        <button class="write" type="submit"><b>Aceptar</b></button>
    </form>
</div>
@endsection
