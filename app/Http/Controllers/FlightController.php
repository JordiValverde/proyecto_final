<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Flight;

class FlightController extends Controller
{
    public function index(){
        return view('Reserve_flight.reserve');
    }

    public function reserve_flight(){
        return view('Reserve_flight.reserve');
    }

    public function buy_flight(){
        return view('Reserve_flight.reserve');
    }

    public function store(Request $request){
        $flight = new Flight();
        $flight->departure_time = $request->Hsalida;
        $flight->arrival_time = $request->Hllegada;
        $flight->place_departure = $request->Lsalida;
        $flight->place_arrival = $request->Lllegada;
        $flight->departure_date = $request->Fsalida;
        $flight->arrival_date = $request->Fllegada;
        $flight->flight_type = $request->tipo_vuelo;
        $flight->save();

        return view('index');
    }

    public function edit($id){
        $flight = Flight::findOrFail($id);
        return view('Reserve_flight.edit',compact('flight'));
    }

    public function update(Request $request, $id){
        $flightUpdate = Flight::findOrFail($id);

        $flightUpdate->departure_time = $request->Hsalida;
        $flightUpdate->arrival_time = $request->Hllegada;
        $flightUpdate->place_departure = $request->Lsalida;
        $flightUpdate->place_arrival = $request->Lllegada;
        $flightUpdate->departure_date = $request->Fsalida;
        $flightUpdate->arrival_date = $request->Fllegada;
        $flightUpdate->flight_type = $request->tipo_vuelo;
        $flightUpdate->save();
    }

    public function destroy($id){
        $flightDelete = Flight::findOrFail($id);
        $flightDelete->delete();
        return back()->with('mensaje', 'Vuelo Cancelado');
    }

    public function show($id){
        $flight = Flight::findOrFail($id);
        return view('Reserve_flight.show', compact('flight'));
    }
}
