<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class AdminController extends Controller
{
   public function updateUser(Request $request , $id){
    Session::flash('add-user', 'success');
    Session::flash('message', 'Successfully edit user');
    User::where('id','=', $id)->update([
        'name' => $request -> name,
        'email' => $request -> email,
        'no_hp' => $request -> no_hp,
        'address' => $request -> address,
    ]);
    return redirect('/dashboard/users');
   }

   public function updateBook(Request $request , $id){
    Session::flash('edit-book', 'success');
    Session::flash('message', 'Successfully edit book');
    Book::where('id','=', $id)->update([
        'title' => $request -> title,
        'writer' => $request -> writer,
        'publisher' => $request -> publisher,
        'cover' => $request -> cover,
        'sinopsis' => $request -> sinopsis,
    ]);
    return redirect('/dashboard/books');
   }
}
