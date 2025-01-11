<?php

namespace App\Http\Controllers;

use App\Models\UKM;
use App\Models\Facility;

class HomeController extends Controller
{
    public function index()
    {
        $ukms = UKM::all();
        $facilities = Facility::all();

        return view('home.index', compact('ukms', 'facilities'));
    }
}
