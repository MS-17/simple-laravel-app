<?php

namespace App\Http\Controllers\BookControllers;

use App\Http\Controllers\Controller;
use App\Models\Books\Author;
use App\Models\Books\Book;
use App\Models\Books\Genre;
// use Illuminate\Http\Request;
// use Illuminate\Support\Str;


class BookController extends Controller
{
    
    public function index() {
        $b = Book::all();
        dump(Book::find(1) -> author);
        dump(Book::find(1) -> genre);
        return $b;       
    }

    public function create() {
        $author = Author::create(["name" => "A", "lastname" => "B"]);
        $genre = Genre::create(["name" => "g1"]);
        $book = Book::create(["title" => "Some book", 
                           "description" => "Its description",
                           "author_id" => $author -> id,
                           "genre_id" => $genre -> id
                         ]);
        return $book;
    }

}
