<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\books;

class MainController extends Controller
{
    public function index()
    {
        // $books = books::paginate(15); alternatif
        $books = books::all();
        return view('index', compact('books'));
    }
}
