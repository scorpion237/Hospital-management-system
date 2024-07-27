@extends('layouts.app')

@section('content')

    @livewire('employer-edit', ['employer'=> $employer])
@endsection