<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    public function index(){
        return view('employers.index');
    }


    public function create(){
        return view('employers.create');
    }

    public function edit(Employer $employer){

        return view('employers.edit', compact('employer'));
    }

    public function update(Request $request, Employer $employer){

        $request->validate([
            'name'=>'required',
            'email'=>'required'
        ]);

        $employer->name= $request->name;
        $employer->email= $request->email;
        $employer->contact= $request->contact;
        $employer->fonction_id= $request->function_id;

        $employer->save();

        return redirect()->route('employer')->with('message', 'Employer mis à jour');
    }
}
