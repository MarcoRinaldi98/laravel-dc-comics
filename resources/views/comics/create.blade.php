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
            <input type="text" class="form-control" id="title" name="title">
        </div>
        <div class="mb-3">
            <label for="description" class="form-label">Descrizione: </label>
            <textarea class="form-control" id="description" name="description"></textarea>
        </div>
        <div class="mb-3">
            <label for="thumb" class="form-label">Url dell'immagine: </label>
            <input type="text" class="form-control" id="thumb" name="thumb">
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo: </label>
            <input type="text" class="form-control" id="price" name="price">
        </div>
        <div class="mb-3">
            <label for="series" class="form-label">Serie d'appartenenza: </label>
            <input type="text" class="form-control" id="series" name="series">
        </div>
        <div class="mb-3">
            <label for="sale_date" class="form-label">Data di uscita: </label>
            <input type="text" class="form-control" id="sale_date" name="sale_date">
        </div>
        <div class="mb-3">
            <label for="type" class="form-label">Genere: </label>
            <input type="text" class="form-control" id="type" name="type">
        </div>
        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
@endsection
