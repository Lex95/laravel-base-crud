@extends('layout.default')

@section('page_title', 'Modifica Singolo Fumetto')

@section('content')

<form action="{{ route("comics.update", $comic) }}" method="post">
    @csrf

    @method('PUT')

    <label for="title">Title</label>
    <input type="text" name="title" id="title" value="{{ $comic->title }}">
    <br>
    
    <label for="description">Description</label>
    <input type="text" name="description" id="description" value="{{ $comic->description }}">
    <br>
    
    <label for="thumb">Thumbnail</label>
    <input type="text" name="thumb" id="thumb" value="{{ $comic->thumb }}">
    <br>
    
    <label for="price">Price</label>
    <input type="number" step="0.01" name="price" id="price" value="{{ $comic->price }}">
    <br>
    
    <label for="series">Series</label>
    <input type="text" name="series" id="series" value="{{ $comic->series }}">
    <br>
    
    <label for="sale_date">Sale Date</label>
    <input type="date" name="sale_date" id="sale_date" value="{{ $comic->sale_date }}">
    <br>
    
    <label for="type">Type</label>
    <input type="text" name="type" id="type" value="{{ $comic->type }}">
    <br>

    <input type="submit" value="Conferma">
</form>

@endsection