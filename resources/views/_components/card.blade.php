@props(["title"])
<div class="card">
    @isset($title)
        <h2>{{ $title }}</h2>
    @endisset
    <p>{{ $slot }}</p>
</div>