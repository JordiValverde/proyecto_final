@extends('layout')

@section('title')

    Nigga's Airline - Reserva

@endsection

@section('content')

    <form method="POST" action="/reserve">
        @csrf
        <input type="text" name="Hsalida" placeholder="Hora de Salida"/>
        <input type="text" name="Hllegada" placeholder="Hora de llegada"/>
        <input type="text" name="Lsalida" placeholder="Lugar de salida"/>
        <input type="text" name="Lllegada" placeholder="Destino"/>
        <input type="date" name="Fsalida" placeholder="Fecha de Salida"/>
        <input type="date" name="Fllegada" placeholder="Fecha de llegada"/>
        <input type="text" name="tipo_vuelo" placeholder="Tipo de Vuelo"/>
        <button type="submit">Aceptar</button>
    </form>

    <a href="{{ route('reserve.edit',1) }}">modificar</a>

    <a href="{{ route('reserve.show',1) }}">search</a>
@endsection
