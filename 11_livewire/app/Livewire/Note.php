<?php

namespace App\Livewire;

use App\Models\Note as ModelsNote;
use Livewire\Component;

class Note extends Component
{
    public $title;
    public $content;
    public $feedback;

    public function mount()
    {
        $this->title = '';
        $this->content = '';
    }

    public function save()
    {
        // Logic to save the note
        // For example, you could create a new Note model instance and save it
        ModelsNote::create([
            'title' => $this->title,
            'content' => $this->content,
        ]);

        // Reset the fields after saving
        $this->title = '';
        $this->content = '';
        $this->feedback = 'Note saved successfully!';
    }

    public function update($id)
    {
        // Logic to update the note
        $note = ModelsNote::find($id);
        if ($note) {
            $note->title = $this->title;
            $note->content = $this->content;
            $note->save();
            $this->feedback = 'Note updated successfully!';
        } else {
            $this->feedback = 'Note not found!';
        }
    }

    public function destroy($id)
    {
        // Logic to delete the note
        ModelsNote::find($id)->delete();
        $this->feedback = 'Note deleted successfully!';
    }

    public function render()
    {
        $notes = ModelsNote::all(); // Fetch all notes if needed
        return view('livewire.note', compact('notes'));
    }
}
