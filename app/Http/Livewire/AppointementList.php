<?php

namespace App\Http\Livewire;

use App\Models\Appointement;
use Livewire\Component;

class AppointementList extends Component
{
    public $appointements;
    public $filterDate;

    public function render()
    {
    
        $this->filterDate == '' ? $this->appointements = Appointement::with(['patients', 'doctors'])->get() : $this->appointements = Appointement::with(['patients', 'doctors'])->where('date', $this->filterDate)->get();


        return view('livewire.appointement-list');
    }
}
