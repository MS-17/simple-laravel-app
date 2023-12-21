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
    
    public function get_books_list() {
        // $book = Book::all();
        // dump($b);
        $books = Book::with("author", "genre") -> get();
        return view("books.get_books_list", ["books" => $books -> toArray()]);
    }
    

    public function get_create_view(): View {
        return view("books.create_book");
    }


    public function save_new_book(Request $request):RedirectResponse {

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


    public function get_edit_view(string $id): View {
        $book_data = Book::with("author", "genre") -> where("id", $id) ->get();
        return view("books.edit_book", ["book_data" => $book_data]);
    }


    public function save_changed_book(Request $request, string $id): RedirectResponse {
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

        // possible change: you don't have to update a book if nothing's changed and 
        // send the corresponding to this case message 

        $book = Book::find($id);
        $book -> title = $validate["title"];
        $book -> description = $validate["description"];
        $book -> author -> name = $validate["author_name"];
        $book -> author -> lastname = $validate["author_lastname"];
        $book -> genre -> name = $validate["genre"];
        $book -> push();

        return redirect("/edit/book/".$id) -> with("success_message", "The data was saved successfully");
    }

    public function soft_delete_book(Request $request): RedirectResponse {
        if (ctype_digit($request -> book_id)){
            Book::where("id", $request -> book_id) -> delete();
        }
        return redirect("/books");
   }

}

