<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Patient;

class PatientsController extends Controller
{
    public function show(Request $request)
    {
        $patient = Patient::where('uid', $request->uid)->first();

        return view('patients.show', compact('patient'));
    }
}