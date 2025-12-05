@extends('_layouts.app')

@section('title', 'Editar Nota')

@section('content')
    <h2>Editar Nota</h2>
    <form action="{{ route('note.update', $note->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Título:</label>
        <br>
        <input type="text" name="title" value="{{ $note->title }}" required>
        <br><br>
        <label>Descripción:</label>
        <br>
        <textarea name="description" required>{{ $note->description }}</textarea>
        <br><br>
        <label>Fecha:</label>
        <br>
        <input type="date" name="deadline" value="{{ $note->deadline->format("Y-m-d") }}" required>
        <br><br>
        <label>Completada:</label>
        <input type="checkbox" name="done" {{ $note->done ? 'checked' : '' }}>
        <br><br>
        <button type="submit">Actualizar</button>
        <a href="{{ route('note.index') }}">Cancelar</a>
    </form>
@endsection
