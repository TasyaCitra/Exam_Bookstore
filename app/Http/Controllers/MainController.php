<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\books;

class MainController extends Controller
{
    public function index()
    {
        $books = books::orderBy('voter', 'desc')->paginate(10);
        // $books = books::all();
        return view('index', compact('books'));
    }

    public function menu()
    {
        $value = books::all();
        $value->avg('rating');

        return view('menu')->withValue($value);
    }
}
