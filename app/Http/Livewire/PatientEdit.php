<?php

namespace App\Http\Livewire;

use Livewire\Component;

class PatientEdit extends Component
{
    public $patient;
    
    public function render()
    {
        return view('livewire.patient-edit');
    }
}
