<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Plane;

class PlaneController extends Controller
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
        $plane = new Plane();
        $plane->departure_time = $request->Hsalida;
        $plane->arrival_time = $request->Hllegada;
        $plane->place_departure = $request->Lsalida;
        $plane->place_arrival = $request->Lllegada;
        $plane->departure_date = $request->Fsalida;
        $plane->arrival_date = $request->Fllegada;
        $plane->flight_type = $request->tipo_vuelo;
        $plane->save();

        return view('index');
    }

    public function edit($id){
        $plane = Plane::findOrFail($id);
        return view('Reserve_flight.edit',compact('flight'));
    }

    public function update(Request $request, $id){
        $planeUpdate = Plane::findOrFail($id);

        $planeUpdate->departure_time = $request->Hsalida;
        $planeUpdate->arrival_time = $request->Hllegada;
        $planeUpdate->place_departure = $request->Lsalida;
        $planeUpdate->place_arrival = $request->Lllegada;
        $planeUpdate->departure_date = $request->Fsalida;
        $planeUpdate->arrival_date = $request->Fllegada;
        $planeUpdate->flight_type = $request->tipo_vuelo;
        $planeUpdate->save();
    }

    public function destroy($id){
        $planeDelete = Plane::findOrFail($id);
        $planeDelete->delete();
        return back()->with('mensaje', 'Vuelo Cancelado');
    }

    public function show($id){
        $plane = Plane::findOrFail($id);
        return view('Reserve_flight.show', compact('flight'));
    }
}
