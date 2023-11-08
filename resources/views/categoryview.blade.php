@extends('layouts.app')
@section('content')
    <div class="">
        <div class="container my-5">
            <div>
                <h1>Category {{$category->id}}</h1>
            </div>
            <div class="row row-cols-4">
                @foreach ($book_categories as $book_category)
                <div class="col-3 my-3">
                        <div class="card" style="width: 18rem;">
                            <img src="{{asset('assets/placeholder.jpeg')}}" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">{{$book_category->book->title}}</h5>
                                <p class="card-text">By</p>
                                <p class="card-text">{{$book_category->book->author}}</p>
                                <a href="{{route('book.details', ['id' => $book_category->book->id])}}" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection