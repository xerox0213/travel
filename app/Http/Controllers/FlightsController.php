<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\CitiesModel;
use App\Models\FlightsModel;
use App\Models\SearchsModel;
use function Termwind\renderUsing;

class FlightsController extends Controller
{
    public function index()
    {
        $cities = CitiesModel::getAll();
        return view('flights', ['cities' => $cities]);
    }

    public function getFlights()
    {
        $from = request()->post('from');
        $to = request()->post('to');
        $flights = FlightsModel::getFlights($from, $to);
        $cities = CitiesModel::getAll();
        $isLogged = LoginController::isLogged();
        if ($isLogged) {
            $login = LoginController::getLogin();
            SearchsModel::add($from, $to, $login);
        }
        return view('flights', ['cities' => $cities, 'flights' => $flights]);
    }

    public function getFlightsFromAirport($fromAirport)
    {
        $flights = FlightsModel::getFlightsFromAirport($fromAirport);
        return response()->json($flights);
    }
}
