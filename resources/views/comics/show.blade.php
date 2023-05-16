@extends('layouts.app')

@section('page-title')
    Fumetto: {{ $comic->id }}
@endsection

@section('content')
    <div class="text-center">
        <img src="{{ $comic->thumb }}" class="img-fluid pt-3" alt="{{ $comic->title }}">
        <h2>{{ $comic->title }}</h2>
        <div>
            <span class="pe-5">{{ $comic->series }}</span>
            <span class="ps-5">{{ $comic->type }}</span>
        </div>
        <h3>Prezzo: {{ $comic->price }} €</h3>
        <small>Uscito il {{ $comic->sale_date }}</small>
        <p class="fst-italic">{{ $comic->description }}</p>

        <a href="{{ route('comics.index') }}" class="btn btn-secondary my-5">Torna alla lista</a>
    </div>
@endsection
