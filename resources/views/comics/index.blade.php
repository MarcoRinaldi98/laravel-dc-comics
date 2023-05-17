@extends('layouts.app')

@section('page-title', 'Lista fumetti')

@section('content')

    <a href="{{ route('comics.create') }}" class="btn btn-primary my-4">
        <i class="fa-solid fa-plus pe-2"></i>
        Crea nuovo fumetto
    </a>

    <table class="table table-striped mb-5">
        <thead>
            <tr class="text-primary">
                <th scope="col">ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">Serie</th>
                <th scope="col">Tipo</th>
                <th scope="col">Prezzo</th>
                <th scope="col"></th>

            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic)
                <tr>
                    <th scope="row">{{ $comic->id }}</th>
                    <td class="fw-semibold">{{ $comic->title }}</td>
                    <td>{{ $comic->series }}</td>
                    <td>{{ $comic->type }}</td>
                    <td class="text-success fw-semibold">{{ $comic->price }}</td>
                    <td class="d-flex">
                        <a href="{{ route('comics.show', ['comic' => $comic->id]) }}" class="btn btn-primary">
                            <i class="fa-solid fa-circle-info"></i>
                        </a>

                        <a href="{{ route('comics.edit', ['comic' => $comic->id]) }}" class="btn btn-warning mx-2">
                            <i class="fa-solid fa-pen"></i>
                        </a>

                        <form action="{{ route('comics.destroy', ['comic' => $comic->id]) }}" method="POST">

                            @csrf
                            @method('DELETE')

                            <button type="submit" class="btn btn-danger delete-btn">
                                <i class="fa-solid fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    @include('partials.delete-modal')
@endsection
