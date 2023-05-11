<?php

namespace App\Http\Controllers;

use App\Models\Massage;
use Illuminate\Http\Request;

class MassageController extends Controller
{
    public function index(){
        $massage = Massage::all();
        return view ('landing', compact('massage'));
    }

    public function indexDashboard(){
        return view ('dashboard');
    }

    public function create(){
        return view ('landing');
    }

    public function store(Request $request)
    {
        Massage::create($request->all());
        return redirect ('/');
    }
}
