## Release 2.0
New functionality was added to the application<br/>
Now you may show, add, edit and delete books


## Access
- Books part
	1. Start the application<br/>
	&nbsp;&nbsp;&nbsp;&nbsp;php artisan serve 
	2. Access your list of books<br/>
	&nbsp;&nbsp;&nbsp;&nbsp;127.0.0.1:8000/books
	3. You may create a book by submitting "Create a book" button (this book will appear in the books list)
	4. Then you may edit and delete the book you want

- User part
	1. Start the application<br/>
	&nbsp;&nbsp;&nbsp;&nbsp;php artisan serve 
	2. Access the user form<br/>
	&nbsp;&nbsp;&nbsp;&nbsp;127.0.0.1:8000/form
	3. Register the user
	4. Display all users<br/>
	&nbsp;&nbsp;&nbsp;&nbsp;127.0.0.1:8000/users


## Main components
- User part
	- app/Http/Controllers/UserControllers<br/>
		* UserFormController - perform operations with the user form<br/>
		* UserInfoController - display users info<br/>
	- Views:
		* layouts:
			* base
			* partials: header, footer
		* user:
			* form
			* users_table

- Books part
	- app/Http/Controllers/BookControllers
		* BookController - the base logic of the book part
	- app/Http/Models/Books
		* Author - responsible for the authors table in the database 
		* Book - responsible for the books table in the database
		* Genre - responsible for the genres table in the database
	- Views:
		* layouts:
			* base
			* partials: header, footer
		* books:
			* create_book (a page where you add the book)
			* edit_book (a page where you edit the book)
			* get_books_list (a page where you display your books)

