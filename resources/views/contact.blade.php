@extends('layouts.main')

@section('content')
<main class="w-full bg-mainWhite p-6">
    <div class="text-mainText font-semibold">
        <h3 class="text-lg underline mb-6">Contact</h3>
        <form class="form-horizontal" method="POST" action="/contact">
            @csrf
            @guest
           <div>
            <label for="Name">Name: </label>
            <input type="text" id="name" placeholder="Name" name="name" required>
           </div>
           <div>
            <label for="email">Email: </label>
            <input type="text" id="email" placeholder="Email" name="email" required>
           </div>
           @else
           <div>
            <label for="Name">Name: </label>
            <input type="text" id="name" value="{{ $user['name'] }}" name="name" required>
           </div>
           <div>
            <label for="email">Email: </label>
            <input type="text" id="email" value="{{ $user['email'] }}" name="email" required>
           </div>
           @endguest

           <div>
            <label for="message">Message: </label>
            <textarea type="text" id="message" placeholder="Enter your message here" name="message" required> </textarea>
           </div>
           <div>
             <button type="submit" value="Send">Send</button>
           </div>
             
         </form>
        @if(isset($success))
          {{ $success }}
        @endif
    </div>
</main>
@endsection