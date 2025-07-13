@extends('layouts.app')

@section('content')
    {{-- @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}

    <a href="{{ route('note.index') }}">Back</a>
    <form action="{{ route('note.store') }}" method="POST">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title" />
        <br />
        @error('title')
            <p style="color: red">{{ $message }}</p>
        @enderror

        <label for="description">Description</label>
        <input type="text" name="description" />
        <br />
        @error('description')
            <p style="color: red">{{ $message }}</p>
        @enderror

        <input type="submit" value="Create note" />
    </form>
@endsection
