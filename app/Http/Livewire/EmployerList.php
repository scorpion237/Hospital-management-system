<?php

namespace App\Http\Livewire;

use App\Models\Employer;
use Livewire\Component;
use Livewire\WithPagination;

class EmployerList extends Component
{
    public  $search;

    public $listeners= ['delete_employer'];


    function delete_employer(Employer $employer){
        $employer->delete();
        return redirect()->back()->with('message', 'Employer Deleted!');
    }

    public function render()
    {
        $this->search != '' ? $employers = Employer::with('function')->where('name', 'LIKE', "%{$this->search}%")->paginate(25) : $employers = Employer::with('function')->paginate(25);
        
        return view('livewire.employer-list', compact('employers'));
    }
}
