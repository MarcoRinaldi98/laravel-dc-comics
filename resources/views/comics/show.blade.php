@extends('layouts.app')

@section('page-title')
    {{ $comic->title }}
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

        <div class="d-flex justify-content-center py-5">
            <a href="{{ route('comics.index') }}" class="btn btn-secondary me-2">Torna alla lista</a>
            <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST">

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger delete-btn">
                    Elimina
                </button>
            </form>
        </div>

    </div>

    @include('partials.delete-modal')
@endsection
