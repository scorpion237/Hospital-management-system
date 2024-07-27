<div>
    <div class="p-4 mt-5">
        @if (session('message'))
            <div class="bg-green-200 p-2 text-white"> {{ session('message') }}</div>
        @endif
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Name</th>
                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Contact</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Email</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Blood Type</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Actions</th>
                        
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @forelse ($patients as $patient)
                <tr>
                    <td class="w-1/3 text-left py-3 px-4">{{ $patient->name }}</td>
                    <td class="w-1/3 text-left py-3 px-4">{{ $patient->contact }}</td>
                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">{{ $patient->email }}</a></td>
                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500">{{ $patient->blood_type }}</a></td>
                    <td>
                        <a href="{{ route('patient.edit', $patient) }}" class="border-2 border-blue-200 p-1 rounded-md text-xs">Edit</a>
                        <span class="border-2 border-red-200 p-1 rounded-md text-xs cursor-pointer hover:bg-red-400 hover:text-white" wire:click='$emit("delete_patient", {{ $patient->id }})' >Delete</span>
                    </td>
                </tr>
                @empty
                    <tr>
                        <td colspan="5"><p>No data Available</p></td>
                    </tr>
                @endforelse
              
             
            
            </tbody>
        </table>
    </div>
</div>
