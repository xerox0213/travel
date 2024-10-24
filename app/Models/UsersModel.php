<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class UsersModel
{
    public static function exists($login)
    {
        $query = "select * from tuser where login = ?";
        $result = DB::select($query, [$login]);
        return count($result) > 0;
    }
}
