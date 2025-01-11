<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Facility;

class facilityController extends Controller
{
    public function index()
{
    $facilities = \App\Models\Facility::all();
    return view('facilities.index', compact('facilities'));
}

public function show($id)
    {
        $facility = Facility::findOrFail($id);
        return view('facilities.show', compact('facility'));
    }

}
