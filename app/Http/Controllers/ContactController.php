<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MyEmail;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function index() {
        $user = [];
        if (Auth::check()) {
            $user = User::findOrFail(Auth::id());
        }
        
        return view('contact', [
            'user' => $user
        ]);
    }

    public function mail() {
        $name = request('name');
        $email = request('email');
        $message = request('message');
        Mail::to('oliverbk4@gmail.com')->send(new MyEmail($name, $email, $message));
        
        return view("contact")->with('success', 'Email sent successfully');
    }
}
