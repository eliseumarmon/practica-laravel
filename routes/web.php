<?php

use Illuminate\Support\Facades\Route;
use App\Models\Note;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view("/", "landing.index")->name("home");
Route::view("/about", "landing.about")->name("about");
Route::view("/contact", "landing.contact")->name("contact");
Route::view("/services", "landing.services")->name("services");

Route::get("/crear-nota", function () {
    $note = new Note();
    $note->title = "Mi primera nota";
    $note->description = "Descripción de la nota";
    $note->done = false;
    $note->save();
    return $note;
});

Route::get("/borrar-nota/{id}", function ($id) {
    $note = Note::find($id);
    if ($note) {
        $note->delete();
        return "Nota eliminada";
    }
    return "Nota no encontrada";
});