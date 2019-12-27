<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Flight;
use App\Plane;
use App\Seat;
use App\Pilot;
use App\Passenger;
use App\City;


class FlightController extends Controller
{
    public function index(){

        return view('Reserve_flight.reserve');
    }

    public function index2(){

        return view('Buy_flight.buy');
    }

    public function store(Request $request){
        $flight = new Flight();
        $passenger = DB::table('passengers')->insert([ 'id' => $request->dni,'sex' => $request->sexo,'age' => $request->edad, 'name' => $request->nombre,
            'last_name' => $request->apellido,'seat_id' => $request->asiento ]);

        $flight->departure_time = $request->Hsalida;
        $flight->arrival_time = $request->Hllegada;
        $flight->place_departure = $request->ciudadSalida;
        $flight->place_arrival = $request->ciudadDestino;
        $flight->departure_date = $request->Fsalida;
        $flight->arrival_date = $request->Fllegada;
        $flight->flight_type = $request->tipo_vuelo;
        $flight->pilot_id = $request->piloto;
        $flight->passenger_id = $request->dni;
        $flight->seat_id = $request->asiento;
        $flight->state = $request->estado;
        $flight->plane_id = $request->avion;
        $flight->save();

        return view('index');
    }

    public function edit($id){
        $flight = Flight::findOrFail($id);
        return view('Reserve_flight.edit',compact('flight'));
    }

    public function editBuy($id){
        $flight = Flight::findOrFail($id);
        return view('Reserve_flight.edit',compact('flight'));
    }

    public function update(Request $request, $id){
        $flightUpdate = Flight::findOrFail($id);

        $passenger = DB::table('passengers')->where('id',$id)
        ->update(['sex' => $request->sexo,'age' => $request->edad, 'name' => $request->nombre,
            'last_name' => $request->apellido,'seat_id' => $request->asiento ]);

        $flightUpdate->departure_time = $request->Hsalida;
        $flightUpdate->arrival_time = $request->Hllegada;
        $flightUpdate->place_departure = $request->ciudadSalida;
        $flightUpdate->place_arrival = $request->ciudadDestino;
        $flightUpdate->departure_date = $request->Fsalida;
        $flightUpdate->arrival_date = $request->Fllegada;
        $flightUpdate->flight_type = $request->tipo_vuelo;
        $flightUpdate->pilot_id = $request->piloto;
        $flightUpdate->seat_id = $request->asiento;
        $flightUpdate->state = $request->estado;
        $flightUpdate->plane_id = $request->avion;
        $flightUpdate->save();
        $flight = $flightUpdate;
        return back()->with('mensaje','Actualizado');
    }

    public function destroy($id){
        $flightDelete = Flight::findOrFail($id);
        $flightDelete->delete();
        return view('index')->with('mensaje', 'Vuelo Cancelado');
    }

    public function show(Request $request){
        $dni = $request->id;
        $flightShow = DB::table('flights')
            ->join('passengers','passengers.id','=','flights.passenger_id')
            ->join('pilots','pilots.id','=','flights.pilot_id')
            ->join('citys','citys.id','=','flights.place_arrival')
            ->select('citys.city_name as destino','pilots.name as pilot_name','flights.*','passengers.id as passenger_id','passengers.name','passengers.last_name','passengers.age','passengers.sex')
            ->where('passengers.id','=',$dni)
            ->get();

        return view('Reserve_flight.show',compact('flightShow'));
    }
}
