<div class="m-8  items-center">
    <h2>Ajouter un rendez vous</h2>

    <form wire:submit.prevent='store'>
    
        <div class="bg-white p-5 shadow-sm w-ful rounded-md">
            <div class="flex justify-between">
                <div>
                    <label for="">Code du patient</label>
                    <input type="text" class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" wire:model.debounce.lazy='patientCode'>
                </div>
                <div>
                    <label for="">Date de rendez vous</label>
                    <input type="date" class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" wire:model='date'>
                </div>
            </div>
            <div class="w-full" >
                <label for="">Patient Trouver</label>
                <input type="text" class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" wire:model='currentPatient' readonly>
            </div>
    
            <div class="flex justify-between">
                <div>
                    <label>Spécialité</label>
                    <select name="" id="" class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" wire:model='selectedSpecialities'>
                        <option value=""></option>
                        @foreach ($specialities as $sp)
                            <option value="{{ $sp->id }}">{{ $sp->libelle }}</option>                            
                        @endforeach
                      
                    </select>
                </div>
                @if ($this->selectedSpecialities != '')
                <div>
                    <label>Choisissez Docteur</label>
                    <select name="" id="" class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" wire:model='employer_id'>
                        @foreach ($doctorList as $doctor)
                            <option value="{{ $doctor->id }}"> {{ $doctor->name }}</option>
                        @endforeach
                    </select>
                </div>
                @endif
            </div>
    
            <div class="mt-5 w-full">
                <button type="submit" class="bg-blue-400 p-2 text-white rounded-sm ">Enregistrer le Rendez vous</button>
            </div>
        </div>
    </form>
</div>
