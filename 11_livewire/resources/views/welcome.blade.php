@extends('layouts.app')

@section('title', 'Welcome Page')

@section('content')
    @livewire('counter')
    {{-- <livewire:counter /> --}}
    @livewire('note')
@endsection