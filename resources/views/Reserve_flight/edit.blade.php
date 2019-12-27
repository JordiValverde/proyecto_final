@extends('layout')

@section('title')

    Nigga's Airline - Editar

@endsection

@section('content')

    <span>Editar Reserva de Vuelo</span>
    <a href="/" class="btn btn-primary btn-sm">Volver a Inicio</a>

    <form action="{{ route('reserve.update',$flight->id) }}" method="POST">
        @method('PUT')
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

        <select name="sexo">
            <option value="Masculino">reservado</option>
            <option value="Femenino">reservado</option>
        </select>
        <input type="text" name="edad" placeholder="Edad"/>
        <input type="text" name="nombre" placeholder="Nombre"/>
        <input type="text" name="apellido" placeholder="Apellido"/>
        <button type="submit">Editar</button>
    </form>

@endsection
