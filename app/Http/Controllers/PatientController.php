<?php

namespace App\Http\Controllers;

use App\Models\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
    public function index(){
        return view('patients.index');
    }
    public function create(){

        return view('patients.create');
    }

    public function edit(Patient $patient){

        return view('patients.edit', compact('patient'));
    }

    public function update(Request $request, Patient $patient){
        
        $request->validate([
            'name'=> 'required',
            'contact'=> 'integer',
            'email'=> 'required|email',
            'sexe'=> 'required|min:1|max:2',
            'blood_type'=> 'required',
            'notes'=> '',
        ]);

        $patient->name = $request->name;
        $patient->email = $request->email;
        $patient->contact = $request->contact;
        $patient->sexe = $request->sexe;
        $patient->blood_type = $request->blood_type;
        $patient->adresse = $request->adresse;
        $patient->contact_parent = $request->contact_parent;
        $patient->notes = $request->notes;

        $patient->save(); 

        return redirect()->route('patient')->with('message', 'Patient Updated successfully');
    }

}
