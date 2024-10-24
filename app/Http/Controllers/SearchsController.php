<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\SearchsModel;

class SearchsController extends Controller
{
    public function index()
    {
        $login = LoginController::getLogin();
        $searchs = SearchsModel::getAll($login);
        return view('searchs', ['searchs' => $searchs]);
    }
}
