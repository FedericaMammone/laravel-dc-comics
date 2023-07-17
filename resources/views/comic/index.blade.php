@extends('layouts.main-layout')

@section('content')
    <div class="text-center">
        <h1>
            Pastas
            <a href="{{ route('comics.create') }}">+</a>
        </h1>
        <h2>Main Comics</h2>
        <ul class="list-unstyled p-5">
            @foreach ($comics as $comic)
                <li class="m-5 bg-secondary">
                    {{-- <a href="{{ route('pastas.show', $pasta->id) }}">
                    {{ $pasta->titolo }}
                </a> --}}
                    <img width="250px" src=" {{ $comic->thumb }}" alt="">
                    {{ $comic->title }} <br> <br>
                    {{ $comic->description }} <br> <br>
                    {{ $comic->price }} <br> <br>
                    {{ $comic->series }} <br> <br>
                    {{ $comic->sale_date }} <br> <br>
                    {{ $comic->type }}
                </li>
            @endforeach
        </ul>
    </div>
@endsection
