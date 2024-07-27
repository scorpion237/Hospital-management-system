<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Fonction;

class EmployerEdit extends Component
{
    public $all_functions;
    public $employer;

    public function render()
    {
        $this->all_functions = Fonction::all();
        return view('livewire.employer-edit');
    }
}
