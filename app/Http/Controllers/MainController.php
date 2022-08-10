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
        $value = books::paginate(10);

        return view('menu')->withValue($value);
    }

    public function paginate(Request $request)
    {

        //$value = books::paginate($request->page);
        $value = books::where('author', 'LIKE', '%' . $request->search . '%')
            ->orWhere('book_name', 'LIKE', '%' . $request->search . '%')
            ->paginate($request->page);

        return view('menu')->withValue($value);
    }
}
