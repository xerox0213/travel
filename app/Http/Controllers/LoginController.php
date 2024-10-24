<?php

namespace App\Http\Controllers;

use App\Models\UsersModel;

class LoginController
{
    public function index()
    {
        return view('login');
    }

    public function login()
    {
        $login = request()->post('login');
        $exists = UsersModel::exists($login);
        if ($exists) {
            session()->put('login', $login);
            return redirect()->route('searchs.get');
        } else {
            return redirect()->route('login.get');
        }
    }

    public static function getLogin()
    {
        return session('login');
    }

    public static function isLogged()
    {
        $login = self::getLogin();
        return isset($login);
    }
}
