@extends('layouts.app')
@section('content')
    <div class="container mt-5">
        <div class="justify-content-center align-items-center text-center">
            <div>
                <img src="{{asset('assets/placeholder.jpeg')}}" class="card-img-top" alt="">
            </div>
            <div>
                <h1>{{$book->publisher->name}}</h1>
                <h3>{{$book->title}}</h3>
                <h3>{{$book->author}}</h3>
                <h3>{{$book->year}}</h3>
                <h3>{{$book->synopsis}}</h3>
            </div>
        </div>
    </div>
@endsection