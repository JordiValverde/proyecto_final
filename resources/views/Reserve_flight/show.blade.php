@extends('layout')
@section('title')
    Nigga's Airline - Detalles
@section('content')

    <table class="table" border="3" style="background-color: lightblue">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">DNI</th>
                <th scope="col">Nombre</th>
                <th scope="col">Edad</th>
                <th scope="col">Sexo</th>
                <th scope="col">Numero de Asiento</th>
                <th scope="col">ID del avión</th>
                <th scope="col">ID del Piloto</th>
                <th scope="col">Nombre del Piloto</th>
                <th scope="col">Fecha de Salida</th>
                <th scope="col">Hora de Salida</th>
                <th scope="col">Fecha de Llegada</th>
                <th scope="col">Hora de Llegada</th>
                <th scope="col">Lugar de Salida</th>
                <th scope="col">Destino</th>
                <th scope="col">Tipo de Vuelo</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">{{ $flightShow->id }}</th>
                <td>{{$flightShow->id}}</td>
                <td>{{}}</td>
                <td>{{}}</td>
                <td>{{}}</td>
                <td>{{}}</td>
                <td>{{}}</td>
                <td>{{}}</td>
                <td>{{ $flightShow->departure_date}}</td>
                <td>{{ $flightShow->departure_time}}</td>
                <td>{{ $flightShow->arrival_date}}</td>
                <td>{{ $flightShow->arrival_time}}</td>
                <td>{{ $flightShow->place_departure}}</td>
                <td>{{ $flightShow->place_arrival}}</td>
                <td>{{ $flightShow->flight_type}}</td>
                <td>
                    <a href="{{ route('reserve.edit',$flightShow->id) }}">Modificar</a>
                    <form action="{{ route('reserve.destroy',$flightShow->id) }}" method="POST" class="d-inline">
                        @method('DELETE')
                        @csrf
                        <button type="submit"> Eliminar </button>
                    </form>
                <td>
        </tbody>

@endsection
