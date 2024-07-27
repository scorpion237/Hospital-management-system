<div>
    <div class="p-4 mt-5">
        @if (session('message'))
            <div class="bg-green-200 p-2 text-white"> {{ session('message') }}</div>
        @endif

            <div class="flex justify-between mb-3">
                <h4 class="mb-4">Liste des Employers</h4>
                <a href="{{ route('employer.create') }}" class="text-xs bg-blue-200 p-2 rounded-sm shadow-sm  text-white" >Nouvel Employer</a>
            </div>


        <div class="search mb-3">
            <input type="text" class="w-full px-5 py-2 text-gray-700 text-xs bg-white rounded shadow-sm" placeholder="search Employer" wire:model='search'>
        </div>
        <table class="min-w-full">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Name</th>
                    <th class="w-1/3 text-left py-3 px-4 uppercase font-semibold text-sm">Email</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Fonction</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Email</th>
                    <th class="text-left py-3 px-4 uppercase font-semibold text-sm">Actions</th>
                        
                </tr>
            </thead>
            <tbody class="text-gray-900">
                @forelse ($employers as $employer)
                <tr class="border-gray-200 border-b-2">
                    <td class="w-1/3 text-left py-3 px-4">{{ $employer->name }}</td>
                    <td class="w-1/3 text-left py-3 px-4">{{ $employer->email }}</td>
                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500" href="tel:622322662">{{ $employer->function->libelle }}</a></td>
                    <td class="text-left py-3 px-4"><a class="hover:text-blue-500">{{ $employer->blood_type }}</a></td>
                    <td>
                        <a href="{{ route('employer.edit', $employer->id) }}" class="border-2 border-blue-200 p-1 rounded-md text-xs">Edit</a>
                        <span class="border-2 border-red-200 p-1 rounded-md text-xs cursor-pointer hover:bg-red-400 hover:text-white" wire:click='$emit("delete_employer", {{ $employer->id }})' >Delete</span>
                    </td>
                </tr>
                @empty
                    <tr>
                        <td colspan="5"><p>No data Available</p></td>
                    </tr>
                @endforelse
              
             
            
            </tbody>
            <tfoot>
                    <td class='text-xs'> {{ $employers->links() }}</td>
                
            </tfoot>
        </table>

        <div class="mt-2 bg-white ">

        </div>
    </div>
</div>
