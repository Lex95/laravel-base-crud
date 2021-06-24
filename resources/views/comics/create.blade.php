@extends('layout.default')

@section('page_title', 'Pagina Aggiunta Fumetti')

@section('content')
    
<form action="{{ route("comics.store") }}" method="post">
    @csrf

    <label for="title">Title</label>
    <input type="text" name="title" id="title">
    <br>
    
    <label for="description">Description</label>
    <input type="text" name="description" id="description">
    <br>
    
    <label for="thumb">Thumbnail</label>
    <input type="text" name="thumb" id="thumb">
    <br>
    
    <label for="price">Price</label>
    <input type="number" step="0.01" name="price" id="price">
    <br>
    
    <label for="series">Series</label>
    <input type="text" name="series" id="series">
    <br>
    
    <label for="sale_date">Sale Date</label>
    <input type="date" name="sale_date" id="sale_date">
    <br>
    
    <label for="type">Type</label>
    <input type="text" name="type" id="type">
    <br>

    <input type="submit" value="Invia">
</form>

@endsection