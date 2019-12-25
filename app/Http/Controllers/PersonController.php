<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Person;

class PersonController extends Controller
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
        $person = new Person();
        $person->departure_time = $request->Hsalida;
        $person->arrival_time = $request->Hllegada;
        $person->place_departure = $request->Lsalida;
        $person->place_arrival = $request->Lllegada;
        $person->departure_date = $request->Fsalida;
        $person->arrival_date = $request->Fllegada;
        $person->flight_type = $request->tipo_vuelo;
        $person->save();

        return view('index');
    }

    public function edit($id){
        $person = Person::findOrFail($id);
        return view('Reserve_flight.edit',compact('flight'));
    }

    public function update(Request $request, $id){
        $personUpdate = Person::findOrFail($id);

        $personUpdate->departure_time = $request->Hsalida;
        $personUpdate->arrival_time = $request->Hllegada;
        $personUpdate->place_departure = $request->Lsalida;
        $personUpdate->place_arrival = $request->Lllegada;
        $personUpdate->departure_date = $request->Fsalida;
        $personUpdate->arrival_date = $request->Fllegada;
        $personUpdate->flight_type = $request->tipo_vuelo;
        $personUpdate->save();
    }

    public function destroy($id){
        $personDelete = Person::findOrFail($id);
        $personDelete->delete();
        return back()->with('mensaje', 'Vuelo Cancelado');
    }

    public function show($id){
        $person = Person::findOrFail($id);
        return view('Reserve_flight.show', compact('flight'));
    }
}
