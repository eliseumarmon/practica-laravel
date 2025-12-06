<?php

use Illuminate\Support\Facades\Route;
use Carbon\Carbon;
use App\Models\Note;
use App\Models\Employee;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\NoteController;

// Route::get('/', function () {
//     return view('welcome');
// });

// Proyecto Aeropuertos

Route::view('/', 'landing.index')->name('home');
Route::view('/about', 'landing.about')->name('about');
Route::view('/contact', 'landing.contact')->name('contact');
Route::view('/services', 'landing.services')->name('services');

// Proyecto Usuarios

Route::get('/usuarios', [UserController::class, 'index'])->name('user.index');
Route::get('/crear-usuario', [UserController::class, 'create'])->name('user.create');

// Proyecto Productos

Route::get('/productos', [ProductController::class, 'index'])->name('product.index');
Route::get('/producto/crear', [ProductController::class, 'create'])->name('product.create');
Route::post('/productos', [ProductController::class, 'store'])->name('product.store');
Route::get('/producto/{producto}', [ProductController::class, 'show'])->name('product.show');
Route::get("/producto/edit/{producto}", [ProductController::class, "edit"])->name("product.edit");
Route::put("/producto/{producto}", [ProductController::class, "update"])->name("product.update");
Route::delete("/producto/{producto}", [ProductController::class, "destroy"])->name("product.delete");

// Proyecto Empleados

Route::get('/empleados', [EmployeeController::class, 'index'])->name('employees.index');
Route::get('/empleados/by-id', [EmployeeController::class, 'byId'])->name('employees.byId');
Route::get('/empleados/by-lastname', [EmployeeController::class, 'byLastName'])->name('employees.byLastName');
Route::get('/empleados/filter-letter', [EmployeeController::class, 'lastNameStartsWith'])->name('employees.starts');
Route::get('/empleados/filter-year', [EmployeeController::class, 'bornIn'])->name('employees.born');
Route::get('/crear-empleado', function () {
    $employee = new Employee();
    $employee->emp_id = 1;
    $employee->emp_firstname = 'Eliseu';
    $employee->emp_lastname = 'Martinez';
    $employee->emp_birth_date = Carbon::parse('1991-12-15');
    $employee->emp_hire_date = Carbon::parse('2020-08-06');
    $employee->salary = 2000;
    $employee->save();
    return $employee;
});

// Proyecto Notas

Route::get('/notes', [NoteController::class, 'index'])->name('note.index');
Route::get('/note/create', [NoteController::class, 'create'])->name('note.create');
Route::post('/note/store', [NoteController::class, 'store'])->name('note.store');

Route::get('/note/edit/{note}', [NoteController::class, 'edit'])->name('note.edit');
Route::put('/note/update/{note}', [NoteController::class, 'update'])->name('note.update');
Route::get('/note/show/{id}', [NoteController::class, 'show'])->name('note.show'); // ejemplo usando $id
Route::delete('/note/destroy/{note}', [NoteController::class, 'destroy'])->name('note.destroy');
