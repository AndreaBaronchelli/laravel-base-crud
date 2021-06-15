@extends('layouts.main')

@section('content')
<div class="container">
    @if (session('deleted'))
        <div class="alert alert-success mt-3">
            {{ session('deleted') }} deleted!
        </div>
    @endif
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
                    <a href="{{ route('comics.edit', $comic->id) }}" class="btn btn-success">EDIT</a>
                </td>
                <td>
                    <form action="{{ route('comics.destroy', $comic->id) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <input type="submit" value="DELETE" class="btn btn-danger">
                    </form>
                </td>
            </tr> 
            @endforeach
        </tbody>
    </table>
</div>
    
@endsection