@extends("_layouts.products")
@section("title", "Productos")
@section("header_title")
    <h1>Productos</h1>
@endsection
@section("main")
    @if ($productos->isEmpty())
        <p>No hay productos disponibles.</p>
    @else
        <ul>
            @foreach ($productos as $product)
                <li><x-products.product title="{{ $product->name }}" description="{{ $product->description }}" id="{{ $product->id }}"/></li>
            @endforeach
        </ul>
    @endif
@endsection