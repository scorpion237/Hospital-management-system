<?php

namespace App\Http\Livewire;

use App\Models\Appointement;
use App\Models\Patient;
use Livewire\Component;
use App\Models\Employer;
use App\Models\Specialitie;
use App\Notifications\AppointementNotification;
use Carbon\Carbon;
use Illuminate\Support\Facades\Notification;

class AppointementCreate extends Component
{
    public $patientCode;
    public $specialities;
    public $currentPatient = 'Not found';
    public $currentPatientId;
    public $date;
    public $speciality_id;
    public $employer_id;

    public $doctorList;

    //Verif specialiter choisi

    public $selectedSpecialities = '';


    public function store(){
        $this->validate([
            'date'=> 'required|date',
            'patientCode'=> 'required',
            'selectedSpecialities'=> 'required|integer',
            'currentPatientId'=> 'required|integer'
        ]);

        $query = Appointement::create([
            'date'=>$this->date,
            'patient_id'=>$this->currentPatientId,
            'employer_id'=>$this->employer_id,
            'status'=>3,
        ]);

        if($query){

            $AppointementData = [
                'body'=> 'Hello from MO-Hospital; You have an appointement at'.Carbon::parse($this->date)->format('d/M/Y').'. Please confirm by clicking button Bellow ',
                'url'=> '/confirm/'.$this->currentPatientId,
            ];
            $patientData = Patient::find($this->currentPatientId);
            Notification::send($patientData, new AppointementNotification($AppointementData));
        }


        return redirect()->route('appointements')->with('message', 'Rendez vous ajouté. Le patient doit accepter pour confirmer son rdv');
    }


    public function render()
    {
        if($this->patientCode != ''){
            $query = Patient::where('code', $this->patientCode)->get();
            if(count($query) >= 1){
                foreach($query as $q){
                    $this->currentPatient = $q->name;
                    $this->currentPatientId = $q->id;
                }
            }else{
                $this->currentPatient = 'Not Found 4';
            }
        }
        
        $this->doctorList = Employer::where('specialitie_id', $this->selectedSpecialities)->get();

        $this->specialities = Specialitie::all();
        
        return view('livewire.appointement-create');
    }
}
