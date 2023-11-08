@extends('layouts.app')
@section('content')
    <div class="">
        <div class="container my-5">
            <div>
                <h1>Publisher List</h1>
            </div>
            <div class="row row-cols-4">
                @foreach ($publishers as $publisher)
                <div class="col-3 my-3">
                        <div class="card" style="width: 18rem;">
                            <img src="{{asset('assets/placeholder.jpeg')}}" class="card-img-top" alt="">
                            <div class="card-body">
                                <h5 class="card-title">{{$publisher->name}}</h5>
                                <a href="{{route('publisher.details', ['id' => $publisher->id])}}" class="btn btn-primary">Detail</a>
                            </div>
                        </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection