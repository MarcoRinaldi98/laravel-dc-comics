@extends('layouts.app')

@section('page-title')
    Crea un nuovo fumetto
@endsection

@section('content')
    <h3 class="text-primary py-3">Modulo per l'inserimento di un nuovo fumetto:</h3>
    <form class="pb-3" action="{{ route('comics.store') }}" method="POST">

        @csrf

        <div class="mb-3">
            <label for="title" class="form-label">Titolo: </label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                value="{{ old('title') }}">
            @error('title')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione: </label>
            <textarea class="form-control @error('description') is-invalid @enderror" id="description" name="description">{{ old('description') }}</textarea>
            @error('description')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Url dell'immagine: </label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb"
                value="{{ old('thumb') }}">
            @error('thumb')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo: </label>
            <input type="text" class="form-control @error('price') is-invalid @enderror" id="price" name="price"
                value="{{ old('price') }}">
            @error('price')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie d'appartenenza: </label>
            <input type="text" class="form-control @error('series') is-invalid @enderror" id="series" name="series"
                value="{{ old('series') }}">
            @error('series')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di uscita: </label>
            <input type="text" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date"
                name="sale_date" value="{{ old('sale_date') }}">
            @error('sale_date')
                <div class="invalid-feedback">
                    {{ $message }}
                </div>
            @enderror
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Genere: </label>
            <select class="form-select @error('type') is-invalid @enderror" id="type" name="type">
                <option @selected(old('type') == 'comic-book') value="comic-book">comic book</option>
                <option @selected(old('type') == 'graphic-novel') value="graphic-novel">grapic novel</option>
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
