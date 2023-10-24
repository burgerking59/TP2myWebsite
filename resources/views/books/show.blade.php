@extends('layouts.main')

@section('content')
<main class="w-full bg-mainWhite p-6">
    <div class="text-mainText font-semibold">
        <div class="grid grid-cols-3 gap-4">
        <div class="bg-darkWhite text-center p-4">
            <img src="{{ URL("/img/{$book->image}") }}" />
            <p>{{ $book['name'] }}</p>
            <p>{{ $book['description'] }}</p>
            <p>{{ $book['author'] }}</p>
            <p>£{{ $book['price'] }}</p>
            <form action="{{ "/basket" }}" method="POST">
            @csrf
            <input type="hidden" value={{ $book['id'] }} name='id'>
            <input type="submit" value="Add to basket"/>
            </form>
        </div>
        </div>
    </div>
</main>
@endsection