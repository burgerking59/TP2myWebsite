@extends('layouts.main')

@section('content')
<main class="w-full bg-mainWhite p-6">
    <div class="text-mainText font-semibold">
        <div class="grid grid-cols-3 gap-4">
        @foreach ($books as $book)
            <div class="bg-darkWhite text-center p-4">
                <img src="img/{{ $book['image'] }}.jpg" />
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