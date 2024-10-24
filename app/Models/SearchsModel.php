<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class SearchsModel
{

    public static function getAll($login)
    {
        $query = 'select * from search where login = ?';
        return DB::select($query, [$login]);
    }

    public static function add($from, $to, $login)
    {
        $query = 'insert into search (fromAirport, toAirport, login) values (?, ?, ?)';
        DB::insert($query, [$from, $to, $login]);
    }
}
