<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Patient; 

class PageController extends Controller
{
    public function home(Request $request){
        $search= $request->search;
        $patients = Patient::where('name', 'LIKE', "%{$search}%")
        ->with('user')
        ->latest()->paginate();
        return view('home', ['pacientes' => $patients]);
    }

    public function paciente(Patient $patient){

        return view('paciente', ['paciente' => $patient]);
    }
}
