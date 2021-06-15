@extends('layouts.main')

@section('content')
<div class="container">
    <table class="table">
        <thead>
            <tr>
                <th>Title</th>
                <th>Type</th>
                <th colspan="3">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($comics as $comic) 
            <tr>
                <td>{{ $comic->title }}</td>
                <td>{{ $comic->type }}</td>
                <td>
                    <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-secondary">SHOW</a>
                </td>
                <td>
                    <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-success">EDIT</a>
                </td>
                <td>
                    <a href="{{ route('comics.show', $comic->id) }}" class="btn btn-danger">DELETE</a>
                </td>
            </tr> 
            @endforeach
        </tbody>
    </table>
</div>
    
@endsection