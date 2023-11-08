@extends('layouts.app')
@section('content')
    <div class="">
        <div class="container my-5">
            <div>
                <h1>Book List</h1>
            </div>
            <div class="row row-cols-4">
                @foreach ($books as $book)
                <div class="col-3 my-3">
                        <div class="card" style="width: 18rem;">
                            <img src="{{asset('assets/placeholder.jpeg')}}" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">{{$book->title}}</h5>
                                <p class="card-text">By</p>
                                <p class="card-text">{{$book->author}}</p>
                                <a href="{{route('book.details', ['id' => $book->id])}}" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection