@extends('_layouts.products')
@section('title', 'Nuevo producto')
@section('header_title')
    <h1>Crear producto</h1>
@endsection
@section('main')
    <form action="{{ route('product.update', $producto) }}" method="POST">
        @csrf
        @method("PUT")
        <label>Nombre:</label>
        <br>
        <input type="text" name="name" id="name" value="{{ $producto->name }}">
        <br><br>
        <label for="description">Descripción:</label>
        <br>
        <textarea name="description" id="description">{{ $producto->description }}</textarea>
        <br><br>
        <label for="price">Precio:</label>
        <br>
        <input type="number" name="price" id="price" step="0.01" value="{{ $producto->price }}">
        <br><br>
        <label for="stock">Stock:</label>
        <br>
        <input type="number" name="stock" id="stock" value="{{ $producto->stock }}">
        <br><br>
        <button type="submit">Modificar</button>
        <a href="{{ route('product.index') }}">Cancelar</a>
    </form>
@endsection