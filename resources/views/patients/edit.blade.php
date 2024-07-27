@extends('layouts.app')

@section('content')

    @livewire('patient-edit', ['patient'=> $patient])
@endsection