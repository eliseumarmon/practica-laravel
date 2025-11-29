@extends("_layouts.landing")
@section("title", "Servicios")
@section("header")
    <h1>Servicios</h1>
@endsection
@section("main")
    <p>Descripción de nuestros servicios.</p>
    @component("components.card")
        @slot("title", "Servicio 1")
        @slot("content", "Descripción del servicio 1")
    @endcomponent
    @component("components.card")
        @slot("title", "Servicio 2")
        @slot("content", "Descripción del servicio 2")
    @endcomponent
    @component("components.card")
        @slot("title", "Servicio 3")
        @slot("content", "Descripción del servicio 3")
    @endcomponent
@endsection