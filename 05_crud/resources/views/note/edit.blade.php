@extends('layouts.app')

@section('content')
    <a href="{{ route('note.index') }}">Back</a>
    <h1>Editar nota</h1>
    <form action="{{ route('note.update', $note->id) }}" method="post">
        @method('PUT')
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title" value="{{ $note->title }}" class="@error('title') danger @enderror" />
        <br />
        @error('title')
            <p style="color:
            red">{{ $message }}</p>
        @enderror

        <label for="description">Description</label>
        <input type="text" name="description" value="{{ $note->description }}" />
        <br />
        @error('title')
            <p style="color: red">{{ $message }}</p>
        @enderror

        <input type="submit" value="Update note" />
    </form>
@endsection
