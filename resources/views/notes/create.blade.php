@extends('_layouts.app')

@section('title', 'Crear Nueva Nota')

@section('content')
    <h2>Crear Nota</h2>
    <form action="{{ route('note.store') }}" method="POST">
        @csrf
        <label>Título:</label>
        <br>
        <input type="text" name="title" required>
        <br><br>
        <label>Descripción:</label>
        <br>
        <textarea name="description" required></textarea>
        <br><br>
        <label>Fecha:</label>
        <br>
        <input type="date" name="deadline" required>
        <br><br>
        <label>Completada:</label>
        <input type="checkbox" name="done">
        <br><br>
        <button type="submit">Guardar</button>
        <a href="{{ route('note.index') }}">Cancelar</a>
    </form>
@endsection