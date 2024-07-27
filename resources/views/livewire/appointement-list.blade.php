    <div class="p-4 mt-5">
        @if (session('message'))
            <div class="bg-green-200 p-2 text-white"> {{ session('message') }}</div>
        @endif
        <h4 class="mb-4">Liste des Rendez vous</h4>
                
            <div class="flex justify-between mb-3">
                
                <div class='p-2'>
                    <input type="text" class=" w-25 px-3 py-3 text-gray-700 text-xs bg-white rounded shadow-sm" placeholder="search Doctor">
                </div>
               
                <div class='p-2'>
                    <input type="date" class='p-2' wire:model='filterDate' >
                    <a href="{{ route('appointement.create') }}" class="text-xs text-gray-600 rounded-sm shadow-md bg-white p-2" >Ajouter rendez-vous</a>
                </div>

            </div>



        <table class="min-w-full bg-white text-md">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Date rdv</th>
                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Patient</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Docteur</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Specialiter</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Status</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Action</th>
                        
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @forelse ($appointements as $appointement)
                <tr>
                    <td class="w-1/3 text-left py-3 px-4">{{ $appointement->date }}</td>
                    <td class="w-1/3 text-left py-3 px-4">{{ $appointement->patients->name }}</td>
                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500">{{ $appointement->doctors->name }}</a></td>
                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500">{{ $appointement->doctors->specialitie->libelle }}</a></td>
                    <td>

                        @if ($appointement->status == 3 )
                            <span class='p-1 bg-orange-400 rounded-sm text-xs text-white'>Attente</span>
                        @elseif ($appointement->status == 2 )

                            <span>Refuser</span>

                        @else

                        <span>Accepté</span>
                            
                        @endif
                    </td>
                    <td>

                        <span class=" cursor-pointer hover:text-red-600" wire:click='$emit("delete_appointement", {{ $appointement->id }})' > <i class="fa fa-trash"></i> </span>
                    </td>
                </tr>
                @empty
                    <tr>
                        <td colspan="5"><p>No data Available</p></td>
                    </tr>
                @endforelse
              
             
            
            </tbody>
        </table>

        <div class="mt-2 bg-white ">
            
        </div>
    </div>
