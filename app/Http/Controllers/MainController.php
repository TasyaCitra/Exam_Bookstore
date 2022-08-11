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

    public function input()
    {
        $value = books::all();
        return view('input')->withValue($value);
    }

    public function author(Request $request)
    {

        $value = books::where('author', 'LIKE', '%' . $request->select . '%')
            ->get();

        return view('input')->withValue($value);
    }

    public function menu()
    {
        $value = books::paginate(10);

        return view('menu')->withValue($value);
    }

    public function paginate(Request $request)
    {
        ///ddd($request);
        //$value = books::paginate($request->page);
        $value = books::where('book_name', 'LIKE', '%' . $request->src . '%')
            ->orWhere('author', 'LIKE', '%' . $request->src . '%')
            ->paginate($request->page);

        return view('menu', compact('value'));
    }
}
