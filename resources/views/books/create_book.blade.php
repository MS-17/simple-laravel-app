@extends('layouts.base')
@section('content')
<div style="width: 500px; margin: 10px;">
    <div>
        <form method="POST" action="/create/book">
            @csrf
            
            <label>Book title</label>
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
            
            <input type="submit" name="submit" value="Submit">

        </form>
    
    </div>
</div>
@endsection