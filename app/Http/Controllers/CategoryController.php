<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    //
    public function show(string $id){
        $categories = Category::all();
        $category = Category::find($id);
        $book_categories = $category->book_categories;
        return view('categoryview', compact('book_categories', 'category', 'categories'));
    }
}
