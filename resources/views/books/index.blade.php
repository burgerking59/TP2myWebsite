@extends('layouts.main')

@section('content')
<main class="w-full bg-mainWhite p-6">
    <div class="text-mainText font-semibold">
        <h3 class="text-lg underline mb-6">{{ $genre }}</h3>
        <div class="grid grid-cols-3 gap-4">
        
        @foreach ($books as $book)
            <div class="bg-darkWhite text-center p-4">
                <img src="{{ URL("/img/{$book->image}") }}" />
                <p>{{ $book['name'] }}</p>
                <p>{{ $book['description'] }}</p>
                <p>{{ $book['author'] }}</p>
                <p>£{{ $book['price'] }}</p>
            </div>
        @endforeach
        </div>
    </div>
</main>
@endsection