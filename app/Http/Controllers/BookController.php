<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\User;

class BookController extends Controller
{
    public function index() {
        $books = Book::all();
        return view('books', [
            'books' => $books,
        ]);
    }
    public function show($id) {
        return view('details', ['id' => $id]);
    }
}
