@extends('layouts.main-layout')

@section('content')
    <div class="text-center">
        <h3>
            Comic-Create
        </h3>
        <form method="POST" action="{{ route('comic.update', $comic->id) }}">

            @csrf
            @method('PUT')

            <label for="title">title</label>
            <br>
            <input type="text" name="title" id="title" value="{{ $comic->title }}">
            <br>

            <label for="description">description</label>
            <br>
            <input type="text" name="description" id="description" value="{{ $comic->description }}">
            <br>

            <label for="thumb">thumb</label>
            <br>
            <input type="text" name="thumb" id="thumb" value="{{ $comic->thumb }}">
            <br>

            <label for="price">price</label>
            <br>
            <input type="text" name="price" id="price" value="{{ $comic->price }}">
            <br>

            <label for="series">series</label>
            <br>
            <input type="text" name="series" id="series" value="{{ $comic->series }}">
            <br>

            <label for="sale_date">sale_date</label>
            <br>
            <input type="text" name="sale_date" id="sale_date" value="{{ $comic->sale_date }}">
            <br>

            <label for="type">type</label>
            <br>
            <input type="text" name="type" id="type" value="{{ $comic->type }}">
            <br>

            <input class="my-3" type="submit" value="UPDATE">

        </form>
    </div>
@endsection
