<?php

namespace App\Http\Livewire;

use App\Models\Patient;
use Livewire\Component;
use Livewire\WithPagination;

class PatientList extends Component
{

    public $listeners= ['delete_patient'];


    function delete_patient(Patient $patient){
        $patient->delete();
        return redirect()->back()->with('message', 'Patient Deleted!');
    }
    public function render()
    {
        $patients = Patient::paginate(10);
        return view('livewire.patient-list', compact('patients'));
    }
}
