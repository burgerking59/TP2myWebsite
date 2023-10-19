@extends('layouts.main')

@section('content')
<main class="w-full bg-mainWhite p-6">
    <div class="text-mainText font-semibold">
        <h3 class="text-lg underline mb-6">Genres</h3>
        <div class="grid grid-cols-3 gap-4">
            <a href="{{ route('books.index', 'Horror') }}"><div class="bg-darkWhite text-center p-4">
                <h3>Horror</h3>
            </div></a>
            <a href="{{ route('books.index', 'Sci-fi') }}"><div class="bg-darkWhite text-center p-4">
                <h3>Sci-Fi</h3>
            </div></a>
            <a href="{{ route('books.index', 'Non-fic') }}"><div class="bg-darkWhite text-center p-4">
                <h3>Non-Fiction</h3>
            </div></a>
            <a href="{{ route('books.index', 'Crime') }}"><div class="bg-darkWhite text-center p-4">
                <h3>Crime</h3>
            </div></a>
            <a href="{{ route('books.index', 'Fantasy') }}"><div class="bg-darkWhite text-center p-4">
                <h3>Fantasy</h3>
            </div></a>
        </div>
    </div>
</main>
@endsection
