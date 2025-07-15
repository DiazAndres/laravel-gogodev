<div>
    {{-- The Master doesn't talk, he acts. --}}
    <input type="text" wire:model="title" placeholder="Enter note title">
    <textarea wire:model="content" placeholder="Enter note content"></textarea>
    <button wire:click="save">Save Note</button>

    <p style="color: red">{{ $feedback }}</p>

    @foreach ($notes as $note)
        <p>{{ $note->title }} <button wire:click="update({{ $note->id }})">Update</button> <button
                wire:click="destroy({{ $note->id }})">Delete</button></p>
    @endforeach
</div>
