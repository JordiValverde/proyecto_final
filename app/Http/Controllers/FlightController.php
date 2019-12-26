<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Flight;
use App\Plane;
use App\Seat;
use App\Pilot;


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
        $flight->city_id = $request->ciudad;
        $flight->state = $request->estado;
        $flight->plane_id = $request->avion;
        $flight->save();
        return view('index');
    }

    public function destroy($id){
        $flightDelete = Flight::findOrFail($id);
        $flightDelete->delete();
        return view('index')->with('mensaje', 'Vuelo Cancelado');
    }

    public function show(Request $request){
        $passengerShow = Flight::findOrFail($request->id);
        $flightShow = DB::table('flights')
        ->join('passengers', 'passengers.id', '=', 'flights.passenger_id')
        ->join('seats', 'seats.id', '=', 'flights.seat_id')
        ->join('pilots', 'pilots.id', '=', 'flights.pilot_id')
        ->join('planes', 'planes.id', '=', 'flights.plane_id')
        ->select('flights.*','passengers.*','seats.*','pilots.*','planes.*')
        ->where('id',$request->id);
        $seatShow = Seat::findOrFail($request->id);
        $pilotShow = Pilot::findOrFail($request->id);
        $planeShow = Plane::findOrFail($request->id);
        return view('Reserve_flight.show',compact('flightShow'));
    }
}
