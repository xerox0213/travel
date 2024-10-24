<?php

namespace App\Models;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class FlightsModel extends Controller
{
    public static function getFlights($from, $to)
    {
        $query = 'select * from flight where fFromAirport = ? and fToAirport = ?';
        return DB::select($query, [$from, $to]);
    }

    public static function getFlightsFromAirport($fromAirport)
    {
        $query = 'select distinct c.cId, c.cName, c.cAirport, c.cCountry, c.cLanguage, c.cISO from flight f join city c on f.fToAirport = c.cAirport where f.fFromAirport = ? order by c.cAirport';
        return DB::select($query, [$fromAirport]);
    }
}
