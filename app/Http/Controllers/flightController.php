<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Http\Request;

class flightController extends Controller
{
    //
    public function searchFlight(){
        return view('flight/search_flight');
    }
    public function book($id)
    {
        return view('booking', ['id' => $id]);
    }
    public function search(Request $request)
    {
        $response = Http:: post('http://127.0.0.1:8081/api/flight/search', [
            'departureAirport' => $request->departureAirport,
            'arrivelAirport' => $request->arrivelAirport,
            'departureDate' => $request->departureDate,
            'availableSeat' => $request->passengerNumber
        ]);
        if (empty($response)) {
            return redirect('flight/search')->with('error', "Тохирох нислэг олдсонгүй");
        } else {
            $flights = json_decode($response, true);
            return redirect('flight/search')->with('flights', $flights);
        }
    }
    public function booking(Request $request)
    {
        error_log($request->flight_number);
        error_log($request->date);
        error_log($request->name);
        $response = Http::post('http://127.0.0.1:8081/api/flight/book', [
            'flightNumber'=>$request->flightNumber,
            'passengerName'=>$request->passengerName,
            'passengerBirth'=>$request->passengerBirth
        ]);
        if (!empty($response)) {
            $numbers = json_decode($response, true);
            $number = $numbers['bookingId'];

            return view('booking', [
                'success' => "Амжилттай хадгалагдлаа", 'id' => $request->flightNumber, 'numbers' => $number
            ]);
        }
    }

}
