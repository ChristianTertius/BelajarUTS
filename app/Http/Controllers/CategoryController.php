<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index(){
        return view('categories', [
            "title" => "Book Categories",
            "categories" => Category::all()
        ]);
    }

    public function show(Category $category){
        return  view('categories', [
            "title" => "Books by Category: $category->name",
            "books" => $category->book->load('author', 'category')
        ]);
    }
}
