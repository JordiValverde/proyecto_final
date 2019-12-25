<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Passenger;

class PassengerController extends Controller
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
        $passenger = new Passenger();
        $passenger->departure_time = $request->Hsalida;
        $passenger->arrival_time = $request->Hllegada;
        $passenger->place_departure = $request->Lsalida;
        $passenger->place_arrival = $request->Lllegada;
        $passenger->departure_date = $request->Fsalida;
        $passenger->arrival_date = $request->Fllegada;
        $passenger->flight_type = $request->tipo_vuelo;
        $passenger->save();

        return view('index');
    }

    public function edit($id){
        $passenger = Passenger::findOrFail($id);
        return view('Reserve_flight.edit',compact('flight'));
    }

    public function update(Request $request, $id){
        $passengerUpdate = Passenger::findOrFail($id);

        $passengerUpdate->departure_time = $request->Hsalida;
        $passengerUpdate->arrival_time = $request->Hllegada;
        $passengerUpdate->place_departure = $request->Lsalida;
        $passengerUpdate->place_arrival = $request->Lllegada;
        $passengerUpdate->departure_date = $request->Fsalida;
        $passengerUpdate->arrival_date = $request->Fllegada;
        $passengerUpdate->flight_type = $request->tipo_vuelo;
        $passengerUpdate->save();
    }

    public function destroy($id){
        $passengerDelete = Passenger::findOrFail($id);
        $passengerDelete->delete();
        return back()->with('mensaje', 'Vuelo Cancelado');
    }

    public function show($id){
        $passenger = Passenger::findOrFail($id);
        return view('Reserve_flight.show', compact('flight'));
    }
}
