@props(["title"])
<div {{ $attributes->merge(["class" => "card"]) }}>
    @isset($title)
        <h2>{{ $title }}</h2>
    @endisset
    <img src="{{ asset('assets/images/database-cog.png') }}" alt="servicio" height="64" />
    <p>{{ $slot }}</p>
</div>