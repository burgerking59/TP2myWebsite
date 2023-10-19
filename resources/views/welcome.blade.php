@extends('layouts.main')

@section('content')
<main class="w-full bg-mainWhite p-6">
    <div class="text-mainText font-semibold">
        <h3 class="text-lg underline mb-6">Genres</h3>
        <div class="grid grid-cols-3 gap-4">
            <div class="bg-darkWhite text-center p-4">
                <h3>Horror</h3>
            </div>
            <div class="bg-darkWhite text-center p-4">
                <h3>Sci-Fi</h3>
            </div>
            <div class="bg-darkWhite text-center p-4">
                <h3>Non-Fiction</h3>
            </div>
            <div class="bg-darkWhite text-center p-4">
                <h3>Crime</h3>
            </div>
            <div class="bg-darkWhite text-center p-4">
                <h3>Fantasy</h3>
            </div>
        </div>
    </div>
</main>
@endsection
