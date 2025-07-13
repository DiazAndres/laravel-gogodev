<?php

namespace App\Http\Controllers;

use App\Http\Requests\NoteRequest;
use App\Http\Resources\NoteResource;
use App\Models\Note;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class NoteController extends Controller
{
    public function index(): JsonResource
    {
        // $notes = Note::all();

        // return response()->json([
        //     'status' => 'success',
        //     'data' => $notes
        // ]);

        // return response()->json(Note::all(), 200);
        return NoteResource::collection(Note::all());
    }

    public function store(NoteRequest $noteRequest): JsonResponse
    {
        $note = Note::create($noteRequest->all());
        return response()->json([
            'status' => 'success',
            'message' => 'Note created successfully',
            'data' => new NoteResource($note)
            // 'data' => $note
        ], 201);
        // * El código 201 indica que se ha creado un recurso
    }

    public function show($id): JsonResource
    {
        $note = Note::find($id);
        return new NoteResource($note);

        // if ($note) {
            // return response()->json($note, 200);
        // } else {
            // return response()->json([
            //     'status' => 'error',
            //     'message' => 'Note not found'
            // ], 404);
            // * El código 404 indica que no se ha encontrado el recurso
        // }
    }

    public function update(NoteRequest $request, $id): JsonResponse
    {
        $note = Note::find($id);
        if ($note) {
            $note->update($request->all());
            return response()->json([
                'status' => 'success',
                'message' => 'Note updated successfully',
                'data' => new NoteResource($note)
            ], 200);
        } else {
            return response()->json([
                'status' => 'error',
                'message' => 'Note not found'
            ], 404);
        }
    }

    public function destroy($id): JsonResponse
    {
        // Note::destroy($id);
        Note::find($id)->delete();
        return response()->json([
            'status' => 'success',
            'message' => 'Note deleted successfully'
        ], 200);
    }
}
