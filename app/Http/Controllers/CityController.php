<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class CityController extends Controller
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
        $city = new City();
        $city->departure_time = $request->Hsalida;
        $city->arrival_time = $request->Hllegada;
        $city->save();

        return view('index');
    }

    public function edit($id){
        $city = City::findOrFail($id);
        return view('Reserve_flight.edit',compact('city'));
    }

    public function update(Request $request, $id){
        $cityUpdate = City::findOrFail($id);

        $cityUpdate->departure_time = $request->Hsalida;
        $cityUpdate->arrival_time = $request->Hllegada;
        $cityUpdate->place_departure = $request->Lsalida;
        $cityUpdate->place_arrival = $request->Lllegada;
        $cityUpdate->departure_date = $request->Fsalida;
        $cityUpdate->arrival_date = $request->Fllegada;
        $cityUpdate->flight_type = $request->tipo_vuelo;
        $cityUpdate->save();
    }

    public function destroy($id){
        $cityDelete = City::findOrFail($id);
        $cityDelete->delete();
        return back()->with('mensaje', 'Vuelo Cancelado');
    }

    public function show($id){
        $city = City::findOrFail($id);
        return view('Reserve_flight.show', compact('flight'));
    }
}
