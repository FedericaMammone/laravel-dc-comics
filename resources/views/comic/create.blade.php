@extends('layouts.main-layout')

@section('content')
    <div class="text-center">
        <h1>
            NEW Comic
        </h1>
        <form method="POST" action="{{ route('comics.store') }}">

            @csrf

            <label for="title ">TITLE </label>
            <br>
            <input type="text" name="title ">
            <br>

            <label for="description ">Description </label>
            <br>
            <input type="text" name="description ">
            <br>

            <label for="price ">price </label>
            <br>
            <input type="text" name="price ">
            <br>

            <label for="series ">series </label>
            <br>
            <input type="text" name="series ">
            <br>

            <label for="sale_date">sale_date</label>
            <br>
            <input type="text" name="sale_date">
            <br>

            <label for="type ">type </label>
            <br>
            <input type="text" name="type ">
            <br>

            <input class="my-3" type="submit" value="CREATE">
        </form>
    </div>
@endsection
