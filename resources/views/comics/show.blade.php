@extends('layout.default')

@section('page_title', 'Pagina Singolo Fumetto')

@section('content')
    
<a href="{{ route("comics.index") }}">Indietro</a>

<h1>{{$comic->title}}</h1>
<img src="{{$comic->thumb}}" alt="">
<p>{{$comic->description}}</p>
<p>{{$comic->price}}</p>
<p>{{$comic->series}}</p>
<p>{{$comic->sale_date}}</p>
<p>{{$comic->type}}</p>

@endsection