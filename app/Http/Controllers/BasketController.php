<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;
use App\Models\User;
use App\Models\Basket;
use Illuminate\Support\Facades\Auth;
class BasketController extends Controller
{
    public function index() {
        $user_id = Auth::id();
        $basket = Basket::where('user_id', $user_id)->get();
        $books = collect();
        $amounts = array();
        foreach ($basket as $elem) {
            $books->push(Book::where('id', $elem['book_id'])->get());
            array_push($amounts, $elem['Amount']);     
        }
        return view('/basket', [
            'books' => $books,
            'amounts' => $amounts,
        ]);
    }

    public function store() {
        $user_id = Auth::id();
        $book_id = request('id');

        $Amount = Basket::where('book_id', $book_id)->where('user_id', $user_id)->get('Amount');
        if ($Amount != "[]") {
            $basket = Basket::where('book_id', $book_id)->where('user_id', $user_id)->get();
            $basket[0]->Amount = $Amount[0]->Amount + 1;
            $basket[0]->update();
        } else {
            $basket = new Basket;
            $basket->user_id = $user_id;
            $basket->book_id = $book_id;
            $basket->Amount = 1;
            $basket->save();
        }
        return redirect('/basket');
    }
}