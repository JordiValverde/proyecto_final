@extends('layout')

@section('title')

    Nigga's Airline - Editar

@endsection

@section('content')

    <span>Editar Reserva de Vuelo</span>
    <a href="{{ '/' }}" class="btn btn-primary btn-sm">Volver a Inicio</a>

    <form action="{{ route('reserve.update',$flight->id) }}" method="POST">
        @method('PUT')
        @csrf

        <input type="text" name="Hsalida" placeholder="Hora de Salida"/>
        <input type="text" name="Hllegada" placeholder="Hora de llegada"/>
        <input type="text" name="Lsalida" placeholder="Lugar de salida"/>
        <input type="text" name="Lllegada" placeholder="Destino"/>
        <input type="date" name="Fsalida" placeholder="Fecha de Salida"/>
        <input type="date" name="Fllegada" placeholder="Fecha de llegada"/>
        <input type="text" name="tipo_vuelo" placeholder="Tipo de Vuelo"/>
        <button type="submit">Editar</button>
    </form>

@endsection
