@extends('layouts.base')
@section('content')
<div style="width: 500px; margin: 10px;">
    <div>
        @php 
                $data = $book_data[0]
        @endphp
        <h2>Edit your book</h2><br/>
        <form method="POST" action="/edit/book/{{$data -> id}}">
            @csrf
            <!-- <pre> {{ $book_data }} </pre> -->
            <!-- <pre> {{ $book_data[0] -> title }} </pre> -->
            <!-- <pre> {{ json_encode($book_data) }} </pre> -->
			<label>Book title</label>
            <input type="text" name="title" value="{{ old('title', $data -> title) }}">
            @error('title')
                <div style="color: red"> {{ $message }} </div> <br/>
            @enderror

            <label>Book description</label>
            <input type="text" name="description" value="{{ old('description', $data -> description) }}">
            @error('description')
                <div style="color: red"> {{ $message }} </div> <br/>
            @enderror
            
            <label>Author name</label>
            <input type="text" name="author_name" value="{{ old('author_name', $data -> author -> name) }}">
            @error('author_name')
                <div style="color: red"> {{ $message }} </div> <br/>
            @enderror
            
            <label>Author lastname</label>
            <input type="text" name="author_lastname" value="{{ old('author_lastname', $data -> author -> lastname) }}">
            @error('author_lastname')
                <div style="color: red"> {{ $message }} </div> <br/>
            @enderror
            
            <label>Genre</label>
            <input type="text" name="genre" value="{{ old('genre', $data -> genre -> name) }}">
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