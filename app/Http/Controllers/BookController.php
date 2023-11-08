<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function index(){
        $categories = Category::all();
        $books = Book::all();
        return view('home', compact('categories', 'books'));
    }

    public function show(string $id){
        $categories = Category::all();
        $book = Book::find($id);
        return view('bookdetails', compact('book', 'categories'));
    }
}
