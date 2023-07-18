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
                    <a href="{{ route('comics.show', $comic->id) }}">
                        {{ $comic->titolo }}
                    </a>

                    <a class="mx-3 btn btn-primary" href="{{ route('comic.edit', $comic->id) }}">
                        EDIT
                    </a>

                    <form class="d-inline" method="POST" action="{{ route('comic.destroy', $comic->id) }}">

                        @csrf
                        @method('DELETE')

                        <input class="mx-3 btn btn-primary" type="submit" value="DELETE">
                    </form>

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
