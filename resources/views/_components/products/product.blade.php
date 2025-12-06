@props(["title",
"description",
"id"
])
<div>
    <h2><a href="{{ route('product.show', $id) }}">{{ $title }}</a></h2>
    <p>{{ $description }}</p>
    <form action="{{ route("product.delete", $id) }}" method="POST">
        @csrf
        @method("DELETE")
        <button type="submit">Eliminar</button>
    </form>
    <a href="{{ route('product.edit', $id) }}">Editar</a>
</div>