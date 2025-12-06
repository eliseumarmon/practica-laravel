@extends("_layouts.products")
@section("title", "Detalles producto {{ $producto->id }}")
@section("header_title")
    <h1>Detalles producto {{ $producto->id }}</h1>
@endsection
@section("main")
    <h2>{{ $producto->name }}</h2>
    <div>
        <p>Descripción: {{ $producto->description }}</p>
        <p>Precio: {{ $producto->price }}€</p>
        <p>Stock: {{ $producto->stock }} unidades</p>
    </div>
@endsection