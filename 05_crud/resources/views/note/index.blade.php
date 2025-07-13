@extends('layouts.app')

@section('content')
    <h1>Notes</h1>
    <a href="{{ route('note.create') }}">Create a new note</a>
    <ul>
        @forelse ($notes as $note)
            <li><a href="{{ route('note.show', $note->id) }}">{{ $note->title }}</a> | <a
                    href="{{ route('note.edit', $note->id) }}">Edit</a>
                |
                <form action="{{ route('note.delete', $note->id) }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="Delete" />
                </form>

            </li>
        @empty
            <li>No notes</li>
        @endforelse
    </ul>
@endsection
