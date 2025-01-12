<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function index()
{
    $about = \App\Models\About::first();
    return view('about.index', compact('about'));
}

}
