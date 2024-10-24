<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class CitiesModel
{
    public static function getAll()
    {
        $query = 'select cId, cName, cCountry, cAirport from city order by cName, cCountry, cAirport';
        return DB::select($query);
    }
}
