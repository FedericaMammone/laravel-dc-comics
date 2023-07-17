@extends('layouts.main-layout')

@section('content')
    <div class="text-center">
        <h1>{{ $comic->title }}</h1>
        <img src="{{ $comic->src }}">
        <div class="row justify-content-between py-4">
            <span class="col">{{ $comic->sale_date }}</span>
            <span class="col">{{ $comic->price }}</span>
            <span class="col">{{ $comic->series }}</span>
            <span class="col">{{ $comic->type }}</span>
        </div>
        <p class="px-5">
            {{ $comic->description }}
        </p>
    </div>
@endsection
