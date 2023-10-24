<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\User;
use App\Models\Basket;
use Illuminate\Support\Facades\Auth;
class BookController extends Controller
{
    public function index() {
        $genre = request('genre');
        $books = Book::where('genre', $genre)->get();
        return view('books/index', [
            'books' => $books,
            'genre' => $genre,
        ]);
    }
    public function show($id) {
        $book = Book::findOrFail($id);
        return view('books/show', [
            'book' => $book
        ]);
    }
}
