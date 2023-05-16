@extends('layouts.app')

@section('page-title', 'Lista dei fumetti')

@section('content')

    <a href="{{ route('comics.create') }}" class="btn btn-primary">Crea nuovo fumetto</a>

    <table class="table table-striped">
        <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">Serie</th>
                <th scope="col">Tipo</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Azioni</th>

            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <th scope="row">{{ $comic->id }}</th>
                    <td>{{ $comic->title }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->type }}</td>
                    <td>{{ $comic->price }}</td>
                    <td>
                        <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="btn btn-primary">Info</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
