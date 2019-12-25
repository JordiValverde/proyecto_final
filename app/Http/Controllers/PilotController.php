<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pilot;

class PilotController extends Controller
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
        $pilot = new Pilot();
        $pilot->departure_time = $request->Hsalida;
        $pilot->arrival_time = $request->Hllegada;
        $pilot->place_departure = $request->Lsalida;
        $pilot->place_arrival = $request->Lllegada;
        $pilot->departure_date = $request->Fsalida;
        $pilot->arrival_date = $request->Fllegada;
        $pilot->flight_type = $request->tipo_vuelo;
        $pilot->save();

        return view('index');
    }

    public function edit($id){
        $pilot = Pilot::findOrFail($id);
        return view('Reserve_flight.edit',compact('flight'));
    }

    public function update(Request $request, $id){
        $pilotUpdate = Pilot::findOrFail($id);

        $pilotUpdate->departure_time = $request->Hsalida;
        $pilotUpdate->arrival_time = $request->Hllegada;
        $pilotUpdate->place_departure = $request->Lsalida;
        $pilotUpdate->place_arrival = $request->Lllegada;
        $pilotUpdate->departure_date = $request->Fsalida;
        $pilotUpdate->arrival_date = $request->Fllegada;
        $pilotUpdate->flight_type = $request->tipo_vuelo;
        $pilotUpdate->save();
    }

    public function destroy($id){
        $pilotDelete = Pilot::findOrFail($id);
        $pilotDelete->delete();
        return back()->with('mensaje', 'Vuelo Cancelado');
    }

    public function show($id){
        $pilot = Pilot::findOrFail($id);
        return view('Reserve_flight.show', compact('flight'));
    }
}
