<?php

namespace App\Http\Controllers\BookControllers;

use App\Http\Controllers\Controller;
use App\Models\Books\Author;
use App\Models\Books\Book;
use App\Models\Books\Genre;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Http\Request;

class BookController extends Controller
{
    
    public function index() {
        $b = Book::all();
        // dump(Book::find(1) -> author);
        // dump(Book::find(1) -> genre);
        return $b;
    }
    

    public function save(Request $request):RedirectResponse {

        $validate = $request -> validate(
            [
                "title"=> "required",
                "description" => "required",
                "author_name" => "required",
                "author_lastname" => "required",
                "genre" => "required"
            ],
            [
                "title.required" => "Enter the book's title",
                "description.required" => "Enter the book's description",
                "author_name.required" => "Enter the author name",
                "author_lastname.required" => "Enter the author lastname",
                "genre.required" => "Enter the genre",
            ]
        );

        $author = Author::create(["name" => $validate["author_name"], "lastname" => $validate["author_lastname"]]);

        $genre = Genre::create(["name" => $validate["genre"]]);

        $book = Book::create([
                                "title" => $validate["title"],
                                "description" => $validate["description"],
                                "author_id" => $author["id"],
                                "genre_id" => $genre["id"],
                            ]);

        return redirect("/create/book") -> with("success_message", "The data was saved successfully");
    }


    public function create(): View {
        return view("books.create_book");
    }

}

