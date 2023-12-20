@extends('layouts.base')
@section('content')
<div style="width: 500px; margin: 10px;">
    <!-- <pre> {{ $books }} </pre> -->
    @foreach ($books as $book)
        <div> {{ $book }} </div>
        <form method="GET" action="/edit/book/{{$book->id}}">
            <input style="display:block;width:fit-content;" type="submit" name="submit" value="Edit">
        </form>
        <br/>
    @endforeach
    <div>
        <form method="GET" action="/create/book">
            @csrf
            <input type="submit" name="submit" value="Create a book">
        </form>
    </div>
</div>
@endsection




<!--  <label>Book title</label>
            <input type="text" name="title" value="{{ old('title', 'title') }}">
            @error('title')
                <div style="color: red"> {{ $message }} </div> <br/>
            @enderror

            <label>Book description</label>
            <input type="text" name="description" value="{{ old('description', 'description') }}">
            @error('description')
                <div style="color: red"> {{ $message }} </div> <br/>
            @enderror
            
            <label>Author name</label>
            <input type="text" name="author_name" value="{{ old('author_name', 'author name') }}">
            @error('author_name')
                <div style="color: red"> {{ $message }} </div> <br/>
            @enderror
            
            <label>Author lastname</label>
            <input type="text" name="author_lastname" value="{{ old('author_lastname', 'author lastname') }}">
            @error('author_lastname')
                <div style="color: red"> {{ $message }} </div> <br/>
            @enderror
            
            <label>Genre</label>
            <input type="text" name="genre" value="{{ old('genre', 'genre') }}">
            @error('genre')
                <div style="color: red"> {{ $message }} </div> <br/>
            @enderror

            @if (session('success_message'))
                <div style="color: green;">{{ session('success_message') }}</div>
            @endif
            --> 
