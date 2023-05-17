@extends('layouts.app')

@section('page-title', 'Home')

@section('content')

    <h1 class="pt-5 text-center"> Benvenuto in DC Comics</h1>
    <div class="w-100 text-center pt-5">
        <a href="{{ route('comics.index') }}" class="btn btn-secondary mt-5">Sfoglia i nostri fumetti</a>
    </div>


@endsection
