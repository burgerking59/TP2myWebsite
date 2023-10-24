@extends('layouts.main')

@section('content')
<main class="w-full bg-mainWhite p-6">
    <div class="text-mainText font-semibold">
        <h3 class="text-lg underline mb-6">Basket</h3>
        <div class="grid grid-cols-3 gap-4">
        @php
            $total = 0
        @endphp 
        @for ($i = 0; $i < count($books); $i++)
        <div class="bg-darkWhite text-center p-4">
            <img src="{{ URL("/img/{$books[$i][0]->image}") }}" />
            <p>{{ $books[$i][0]['name'] }}</p>
            <p>{{ $books[$i][0]['description'] }}</p>
            <p>{{ $books[$i][0]['author'] }}</p>
            <p>£{{ $books[$i][0]['price'] }}</p>
            <p>Amount: {{ $amounts[$i] }}</p>
            <a href="{{ route('basket.destroy') }}"><p>Delete</p></a>
            @php
            $total += $books[$i][0]['price'] * $amounts[$i] 
            @endphp
        </div>
        @endfor
        <p>Total: £{{$total}}</p>
        </div>
    </div>
</main>
@endsection