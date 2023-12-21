@extends('layouts.base')
@section('content')
<div style="width: 500px; margin: 10px;">
    <!-- <pre> {{ json_encode($books) }} </pre> -->
    <style>
        footer {
            position: unset;
        }
        .books-table {
            white-space: nowrap;
        }
    </style>
    
    {{--
    @foreach ($books as $book)
        <pre> {{ json_encode($book, JSON_PRETTY_PRINT) }} </pre>
        <form method="GET" action="/edit/book/{{$book->id}}">
            <input style="display:block;width:fit-content;" type="submit" name="submit" value="Edit">
        </form>
        <br/>
    @endforeach 
    --}}

    <div class="users-table books-table">
        <h2>Books table</h2><br/>
        @php
            $books_list = $books;
            //dd($books_list);
        @endphp
        <table>
            <tr>
                <th>Title</th>                    
                <th>Description</th>                    
                <th>Author name</th>                    
                <th>Author lastname</th>                    
                <th>Genre</th>                    
                <th>Edit</th>                    
            </tr>

            @foreach($books_list as $book)
                <tr>
                    <td>{{ $book["title"] }}</td>
                    <td>{{ $book["description"] }}</td>
                    <td>{{ $book["author"]["name"] }}</td>
                    <td>{{ $book["author"]["lastname"] }}</td>
                    <td>{{ $book["genre"]["name"] }}</td>
                    <td>
                        <form method="GET" action="/edit/book/{{$book['id']}}">
                            <input style="display:block;width:fit-content;" type="submit" name="submit" value="Edit">
                        </form>
                    </td>
                </tr>
            @endforeach

        </table>
    </div>
    <div>
        <form method="GET" action="/create/book">
            @csrf
            <input type="submit" name="submit" value="Create a book">
        </form>
    </div>
</div>
@endsection
