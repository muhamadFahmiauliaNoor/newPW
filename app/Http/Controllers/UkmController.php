<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UkmController extends Controller
{
    public function index()
{
    $ukms = \App\Models\UKM::all();
    return view('ukms.index', compact('ukms'));
}

public function show($id)
{
    $ukm = UKM::findOrFail($id);  // Mengambil data UKM berdasarkan ID
    return view('ukms.show', compact('ukm'));
}


}
