<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        return view('index', [
            "books" => Book::with(['author', 'category'])->get()
        ]);
    }

    public function show(Book $book)
    {
        return view("book", [
            "title" => "Single Post",
            "book" => $book
        ]);
    }

    
}
