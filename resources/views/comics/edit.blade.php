@extends('layouts.main')

@section('content')

<div class="container py-3 col-md-8 offset-md-2">
    <form class="form form-horizontal" action="{{ route('comics.update', $comic->id) }}" method="post">
        @csrf
        @method('PATCH')
    
        <div class="mb-3">
            <label for="title" class="form-label">Title</label> 
            <input type="text" id="title" name="title" value="{{ $comic->title }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <div><textarea name="description" id="description" rows="5" class="form-control">{{ $comic->description }}</textarea></div>
        </div>

        <div class="mb-3">
            <label for="thumb" class="form-label">Thumb</label> 
            <input type="text" id="thumb" name="thumb" value="{{ $comic->thumb }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="price" class="form-label">Price</label> 
            <input type="text" id="price" name="price" value="{{ $comic->price }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="series" class="form-label">Series</label> 
            <input type="text" id="series" name="series" value="{{ $comic->series }}" class="form-control">
        </div>
        
        <div class="mb-3">
            <label for="sale_date" class="form-label">Sale Date</label> 
            <input type="text" id="sale_date" name="sale_date" value="{{ $comic->sale_date }}" class="form-control">
        </div>

        <div class="mb-3">
            <label for="type">Type</label>
            <select name="type" id="type" class="form-control">
                <option value="comic book" @if ($comic['type'] == 'comic book')
                    selected
                @endif>Comic Book</option>
                <option value="graphic novel" @if ($comic['type'] == 'graphic novel')
                selected
            @endif>Graphic Novel</option>
            </select>
        </div>

        <button type="submit" class="btn btn-success">EDIT</button>
    </form>
    
@endsection