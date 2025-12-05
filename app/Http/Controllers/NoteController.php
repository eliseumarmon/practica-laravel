<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Note;

class NoteController extends Controller
{
    public function index() {
        $notes = Note::all();
        return view("notes.index", compact("notes"));
    }

    public function show($id) {
        $note = Note::findOrFail($id);
        return view('notes.show', compact('note'));
    }

    public function create() {
        return view("notes.create");
    }
    public function store(Request $request) {
        Note::create($request->all());
        // Redirigir a la lista de notas
        return redirect()->route('note.index');
    }

    public function edit(Note $note) {
        return view("notes.edit", compact("note"));
    }
    public function update(Request $request, Note $note) {
        $data = $request->all();
        $data['done'] = $request->has('done') ? 1 : 0;
        $note->update($data);
        // Redirigir a la lista de notas
        return redirect()->route('note.index');
    }

    public function destroy(Note $note) {
        $note->delete();
        return redirect()->route("note.index");
    }
}
