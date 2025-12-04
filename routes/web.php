<?php

use Illuminate\Support\Facades\Route;
use Carbon\Carbon;
use App\Models\Note;
use App\Models\Employee;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::view("/", "landing.index")->name("home");
Route::view("/about", "landing.about")->name("about");
Route::view("/contact", "landing.contact")->name("contact");
Route::view("/services", "landing.services")->name("services");

Route::get("/usuarios", [UserController::class, "index"])->name("user.index");
Route::get("/crear-usuario", [UserController::class, "create"])->name("user.create");

Route::get("/productos", [ProductController::class, "index"])->name("products.index");
Route::get("/crear-producto", [ProductController::class, "create"])->name("products.create");

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

Route::get("/crear-empleado", function () {
    $employee = new Employee();
    $employee->emp_id = 1;
    $employee->emp_firstname = "Eliseu";
    $employee->emp_lastname = "Martinez";
    $employee->emp_birth_date = Carbon::parse("1991-12-15");
    $employee->emp_hire_date = Carbon::parse("2020-08-06");
    $employee->salary = 2000;
    $employee->save();
    return $employee;
});