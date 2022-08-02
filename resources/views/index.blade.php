<li>

    @foreach ($comics as $comic)
    {{ $comic->id }}
    {{ $comic->title }}
    {{ $comic->series }}
    {{ $comic->type }}
    @endforeach
</li>