<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Seat;

class SeatController extends Controller
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
        $seat = new Seat();
        $seat->departure_time = $request->Hsalida;
        $seat->arrival_time = $request->Hllegada;
        $seat->place_departure = $request->Lsalida;
        $seat->place_arrival = $request->Lllegada;
        $seat->departure_date = $request->Fsalida;
        $seat->arrival_date = $request->Fllegada;
        $seat->flight_type = $request->tipo_vuelo;
        $seat->save();

        return view('index');
    }

    public function edit($id){
        $seat = Seat::findOrFail($id);
        return view('Reserve_flight.edit',compact('seat'));
    }

    public function update(Request $request, $id){
        $seatUpdate = Seat::findOrFail($id);

        $seatUpdate->departure_time = $request->Hsalida;
        $seatUpdate->arrival_time = $request->Hllegada;
        $seatUpdate->place_departure = $request->Lsalida;
        $seatUpdate->place_arrival = $request->Lllegada;
        $seatUpdate->departure_date = $request->Fsalida;
        $seatUpdate->arrival_date = $request->Fllegada;
        $seatUpdate->flight_type = $request->tipo_vuelo;
        $seatUpdate->save();
    }

    public function destroy($id){
        $seatDelete = Seat::findOrFail($id);
        $seatDelete->delete();
        return back()->with('mensaje', 'Vuelo Cancelado');
    }

    public function show($id){
        $seat = Seat::findOrFail($id);
        return view('Reserve_flight.show', compact('flight'));
    }
}
