<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index()
    {
        return view('authors', [
            "title" => "All Authors",
            "books" => Book::with(['author', 'category'])->get()
        ]);
    }

    public function show(User $author)
    {
        return view('authors', [
            "title" => "Post by Author: $author->name",
            "books" => $author->books->load('author', 'category')
        ]);
    }
}
