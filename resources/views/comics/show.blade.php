@extends('layouts.app')

@section('page-title')
    Fumetto: {{ }}
@endsection

@section('content')
    <img src="{{ $comic->thumb }}" class="img-fluid" alt="{{ $comic->title }}">
    <h1>{{ $comic->title }}</h1>
    <h2>{{ $comic->series }}</h2>
    <h2>{{ $comic->type }}</h2>
    <h3>Prezzo: {{ $comic->price }}</h3>
    <small>Uscito il {{ $comic->sale_date }}</small>
    <p>{{ $comic->description }}</p>

    <a href="{{ route('comics.index') }}" class="btn btn-secondary">Torna alla lista</a>
@endsection
