<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Hirlevel;

class Hirlevel_controller extends Controller
{
    public function getData()
    {
        $hirlevelData = Hirlevel::first(); //hogyha nem all-t használok hanem first-et akkor az elsőt jeleníti meg csak  de akkor a blad ben is átkell irni ifre
        return view('home', ['hirlevelData' => $hirlevelData]);
    }
}
