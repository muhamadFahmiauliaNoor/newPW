<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Registration;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('registrations.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:registrations,email',
            'phone' => 'required|numeric',
            'jurusan' => 'nullable',  // Atur agar jurusan tidak wajib
        ]);

        Registration::create($validated);

        return redirect()->route('registrations.create')->with('success', 'Registration successful!');
    }
}
