<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{

                // REGISTER

    public function indexRegister(){
        return view ('auth.register');
    }

    public function storeRegister(Request $request){
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'no_hp' => $request->no_hp,
            'address' => $request->address,
            
        ]);

        return redirect ('/login');
    }

                // LOGIN

    public function indexLogin(){
        return view ('auth.login');
    }

    public function storeLogin(Request $request)
    {
        $infologin = $request->validate([
            'name' => 'required',
            'password' => 'required'
        ],[
            'name.required' => 'Username is required',
            'password.required' => 'Password is required',
        ]);

        if (Auth::attempt($infologin)) {
            $request->session()->regenerate();
            if(Auth::user() && Auth::user()->role_id == 1){
                return redirect ('dashboard/index');
            }
            return redirect()->intended('/dashboard-user');
        } else {
            // Session::flash('status', 'error');
            // Session::flash('message', 'Username and Password entered are invalid!');
            return redirect ('login');
        }
    }

                // DASHBOARD-ADMIN

    public function indexDashboard(){
        $user = User::count();
        $book = Book::count();
        return view ('dashboard.index', compact('user', 'book'));
    }


                // USERS-ADMIN

    public function usersDashboard(){
        $user = User::all();
        return view ('dashboard.user', compact('user'));
    }

    public function editUsersDashboard($id){
        $user = User::find($id);
        return view ('dashboard.edit-user', compact(['user']));
    }

    public function deleteUsersDashboard($id){
        Session::flash('add-user', 'success');
        Session::flash('message', 'Successfully delete user');
        $user = User::find($id);
        $user -> delete();
        return redirect ('/dashboard/users');
    }

                // BOOKS-ADMIN

    public function booksDashboard(){
        $book = Book::all();
        return view ('dashboard.book', compact('book'));
    }

    public function addBookDashboard(){
        return view ('dashboard.add-book');
    }

    public function bookStore(Request $request)
    {
        Session::flash('add-book', 'success');
        Session::flash('message', 'Successfully added book');
        Book::create($request->all());
        return redirect ('/dashboard/books');
    }

    public function editBookDashboard($id){
        $book = Book::find($id);
        return view ('dashboard.edit-book', compact(['book']));
    }

    public function deleteBookDashboard($id){
        Session::flash('delete-book', 'success');
        Session::flash('message', 'Successfully delete book');
        $book = Book::find($id);
        $book -> delete();
        return redirect ('/dashboard/books');
    }

                // CATEGORY-ADMIN

    public function categoryDashboard(){
        return view ('dashboard.category');
    }

                // RENTSLOG-ADMIN

    public function rentslogDashboard(){
        return view ('dashboard.rentslog');
    }

                // LOGOUT-ADMIN

    public function logout()
    {
        Auth::logout();
        return redirect ('/')->with('success', 'Logged out successfully');
    }

}