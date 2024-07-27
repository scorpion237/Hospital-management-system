<div class="w-full h-screen overflow-x-hidden border-t flex flex-col ">
   
    <div class="flex items-center justify-center bg-clip-padding backdrop-filter backdrop-blur-xl bg-opacity-60 border border-gray-200 ">
        <div class="w-full lg:w-1/2 my-6 pr-0 lg:pr-2  bg-white p-4">
            <p class="text-xl pb-6 flex items-center">
                <i class="fas fa-user mr-3"></i> Modifier Patient
            </p>
           <form method="POST" action="{{ route('patient.update', $patient) }}">
            @csrf
            @method('put')

            <div class="leading-loose">
             
                <div class="">
                    <label class="block text-sm text-gray-600" for="name">Nom</label>
                    <input class="w-full px-5 py-1 text-gray-700 bg-gray-200 rounded @error('name')
                        border-2 border-red-400                      
                    @enderror" id="name" name="name" type="text"  placeholder="Your Name" aria-label="Name" value="{{ $patient->name }}">
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="email">Email</label>
                    <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded @error('email')
                    border-2 border-red-400                      
                @enderror" id="email" name="email" type="text"  placeholder="Your Email" aria-label="Email" value="{{ $patient->email }}">
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="email">Contact</label>
                    <input class="w-full px-5  py-1 text-gray-700 bg-gray-200 rounded @error('contact')
                    border-2 border-red-400                      
                @enderror" id="email" name="contact" type="text"  placeholder="Your Email"  value="{{ $patient->contact }}">
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="email">Sexe</label>
                    <select name="sexe" class=" w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="">
                        <option value="M">Male</option>
                        <option value="F">Female</option>
                    </select>
                    
                </div>
                <div class="mt-2">
                    <label class="block text-sm text-gray-600" for="email">Groupe Sanguin</label>
                    <select name="blood_type" class=" w-full px-5  py-1 text-gray-700 bg-gray-200 rounded" id="">
                        <option value="O">O</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        
                    </select>
                    
                </div>
                <div class="mt-2">
                    <label for="block text-sm text-gray-600">Adresse</label>
                    <input type="text" name="adresse" class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" value="{{ $patient->adresse }}">
                <div class="mt-2">
                    <label for="block text-sm text-gray-600">Contact Parent</label>
                    <input type="text" name="contact_parent" class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" value="{{ $patient->contact_parent }}">
                </div>
                <div class="mt-2">
                    <label class=" block text-sm text-gray-600" for="message">Note </label>
                    <textarea class="w-full px-5 py-2 text-gray-700 bg-gray-200 rounded" id="message" name="notes" rows="6"  placeholder="Your inquiry.." > {{  $patient->notes }}</textarea>
                </div>
                <div class="mt-6">
                    <button class="px-4 py-1 text-white font-light tracking-wider bg-gray-900 rounded" type="submit">Actualiser patient</button>
                </div>
         
        </div>
           </form>
        </div>

</div>



