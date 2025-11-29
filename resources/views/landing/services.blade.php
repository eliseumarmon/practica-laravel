@extends("_layouts.landing")
@section("title", "Servicios")
@section("header")
    <h1>Servicios</h1>
@endsection
@section("main")
    <p>Descripción de nuestros servicios.</p>
    <x-card class="texto-centrado" title="Servicio 1">
        Descripción breve del servicio 1.
    </x-card>
    <x-card class="texto-centrado" title="Servicio 2">
        Descripción breve del servicio 2.
    </x-card>
    <x-card class="texto-centrado" title="Servicio 3">
        Descripción breve del servicio 3.
    </x-card>
@endsection