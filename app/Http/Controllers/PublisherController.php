<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Publisher;
use Illuminate\Http\Request;

class PublisherController extends Controller
{
    //
    public function index(){
        $categories = Category::all();
        $publishers = Publisher::all();
        return view('publisherview', compact('publishers', 'categories'));
    }

    public function show(string $id){
        $categories = Category::all();
        $publisher = Publisher::find($id);
        $books = $publisher->books;
        return view('publisherdetails', compact('publisher', 'books', 'categories'));
    }
}
