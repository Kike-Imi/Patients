<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index()
    {
        return view('patients.index', [
            'patients' => Patient::latest()->paginate()
        ]);
    }

    public function create(Patient $patient)
    {
        return view('patients.create', ['patient' => $patient ]);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'dni' => 'required|unique:patients,dni',
            'sex' => 'required',
            'age' => 'required',
        ]);

        $patient = $request->user()->patients()->create([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'dni' => $request->dni,
            'sex' => $request->sex,
            'age' => $request->age,
        ]);
        
        return redirect()->route('patients.edit', $patient);
    }

    public function edit(Patient $patient)
    {
        return view('patients.edit', ['patient' => $patient ]);
    }

    public function update(Request $request, Patient $patient)
    {
        $request->validate([
            'name' => 'required',
            'lastname' => 'required',
            'dni' => 'required|unique:patients,dni',
            'sex' => 'required',
            'age' => 'required',
        ]);

        $patient->update([
            'name' => $request->name,
            'lastname' => $request->lastname,
            'dni' => $request->dni,
            'sex' => $request->sex,
            'age' => $request->age,
        ]);
        
        return redirect()->route('patients.edit', $patient);
    }


    public function destroy(Patient $patient)
    {
        $patient->delete();
        return back();
    }


}
