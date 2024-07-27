<?php

namespace App\Http\Livewire;

use App\Models\Employer;
use App\Models\Fonction;
use Livewire\Component;

class EmployerForm extends Component
{
    public $all_functions;
    public $name;
    public $email;
    public $contact;
    public $function_id;


    public function store()
    {
        $this->validate([
            'name'=> 'required',
            'email'=> 'required|email',
            'contact'=> 'required',
            'function_id'=>'required'
        ]);

        Employer::create([
            'name'=> $this->name,
            'email'=> $this->email,
            'contact'=> $this->contact,
            'fonction_id'=>$this->function_id
            
        ]);

        return redirect()->route('employer')->with('message', 'Employer sauvegarder');
    }


    public function render()
    {
        $this->all_functions = Fonction::all();
        return view('livewire.employer-form');
    }
}
