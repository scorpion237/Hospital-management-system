@extends('layouts.app')

@section('content')

<div class="w-full overflow-x-hidden border-t flex flex-col">
   <main class="w-full flex-grow p-6">

      @livewire('employer-list')
   </main>
</div>

@endsection