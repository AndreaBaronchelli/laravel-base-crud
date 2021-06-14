@extends('layouts.main')

@section('content')
    <div class="container d-flex flex-column justify-content-center align-items-center">
        <h1 class="py-3 text-center">{{ $comic->title }}</h1>
        <div class="info mb-3">
            <span class="badge bg-primary">{{$comic->series }}</span>
            <span class="badge bg-secondary">{{$comic->type}}</span>
            <span class="badge bg-success">{{$comic->sale_date}}</span>
        </div>
        <img src="{{ $comic->thumb }} " class="mb-3" alt="{{ $comic->title }}">
        <div class="description mb-3">
            <strong>Description:</strong> {{ $comic->description }}
        </div>
        <div class="price mb-3">
            <strong>Price: </strong>{{ $comic->price}}€ 
        </div>

        <a href="{{ route('comics.index') }}" class="btn btn-secondary mb-3">Back to comics list</a>

    </div>
@endsection