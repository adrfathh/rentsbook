<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index(){
        $book = Book::get();
        return view ('user.index', compact('book'));
    }

    public function logout()
    {
        Auth::logout();
        return redirect ('/')->with('success', 'Logged out successfully');
    }
}
