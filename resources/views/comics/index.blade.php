@extends('layout.default')

@section('page_title', 'Lista Fumetti')

@section('content')

<a href="{{ route("comics.create") }}">Aggiungi un nuovo fumetto</a>

<div class="container-flex">
    @foreach($comics as $comic)
    <div class="item">
        <a href="{{ route("comics.show", $comic->id) }}">
            <img src="{{ $comic->thumb }}" alt="">
            <p>{{ $comic->series }}</p>
            <a href="{{ route("comics.edit", $comic) }}">Modifica</a>
        </a>
    </div>
    @endforeach
</div>

@endsection