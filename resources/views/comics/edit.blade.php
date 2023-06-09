@extends('layouts.app')

@section('page-title')
    Aggiorna fumetto
@endsection

@section('content')
    <h3 class="text-primary py-3">Aggiorna i campi che desideri e poi clicca su "Salva":</h3>
    <form class="pb-3" action="{{ route('comics.update', ['comic' => $comic->id]) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="title" class="form-label">Titolo: </label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                value="{{ old('title', $comic->title) }}">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione: </label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description', $comic->description) }}</textarea>
            @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Url dell'immagine: </label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb"
                value="{{ old('thumb', $comic->thumb) }}">
            @error('thumb')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo: </label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price"
                value="{{ old('price', $comic->price) }}">
            @error('price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie d'appartenenza: </label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series"
                value="{{ old('series', $comic->series) }}">
            @error('series')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di uscita: </label>
            <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date"
                name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
            @error('sale_date')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Genere: </label>
            <select class="form-select @error('type') is-invalid @enderror" id="type" name="type">
                <option @selected(old('type', $comic->type) == 'comic-book') value="comic-book">comic book</option>
                <option @selected(old('type', $comic->type) == 'graphic-novel') value="graphic-novel">grapic novel</option>
            </select>
            @error('type')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
@endsection
